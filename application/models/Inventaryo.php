 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inventaryo extends CI_Model {
    protected $table = 'products';
    
    public function read_all_products(){
        $sql = "SELECT p.product_id,product_name,product_image,purchase_price,sell_price,date_added,stocks_qnty,sum(quantity) qnty 
        FROM products p
        left join stock s on p.product_id=s.product_id
        left join (select b.billing_id, b.payment_status,b.order_id,o.product_id,o.quantity from billing as b join order_details o on b.order_id = o.order_id) oo on p.product_id = oo.product_id GROUP BY product_id";

        return $this->db->query($sql)->result();
    }

    public function get_product_info_history($product_id){

        $sql ="SELECT *
        FROM ".$this->table." p
        join stock s on p.product_id=s.product_id
        join (select s.*, st.supplied_stock, st.sup_transactionID,st.product_id from supplier_transaction st join supplier s on st.supplier_id = s.supplier_id group by st.product_id ) st on st.product_id = p.product_id
        join (select b.*,ord.product_id, ord.quantity  from billing b join order_details ord on b.order_id = ord.order_id  where b.payment_status = 'Paid' group by ord.product_id ) o on o.product_id = p.product_id  where p.product_id = $product_id" ;
    return $this->db->query($sql)->result();
    }

    public function view_product_history(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('product_category', 'product_category.category_id = products.category_id');
        $this->db->join('supplier', 'supplier.supplier_id = products.supplier_id');
        $result = $this->db->get();
        return $result->result();
    }
   public function view_product_history1($product_id){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('product_category', 'product_category.category_id = products.category_id');
        $this->db->join('supplier', 'supplier.supplier_id = products.supplier_id');
        $this->db->where('product_id',$product_id);
        $result = $this->db->get();
        return $result->result();
    }


public function view_product_by_date($product_id){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('product_category', 'product_category.category_id = products.category_id');
        $this->db->join('supplier', 'supplier.supplier_id = products.supplier_id');
        $this->db->where('product_id',$product_id);
        $result = $this->db->get();
        return $result->result();
    }



    public function view_stock($product_id){
        $this->db->select('*');
        $this->db->from('stock');
        $this->db->where('product_id',$product_id);
        $this->db->group_by('product_id');
        $result = $this->db->get();
        return $result->row();
    }
    public function view_orders($product_id){
        $this->db->select('*');
        $this->db->from('order_details');
        $this->db->join('orders', 'orders.order_id = order_details.order_id');
        $this->db->join('billing', 'billing.order_id = orders.order_id');
        $this->db->where('product_id',$product_id);
        $this->db->group_by('product_id');
        $result = $this->db->get();
        return $result->row();
    }


    public function view_deliveries($order_id){
        $this->db->select('*');
        $this->db->from('delivery');
        $this->db->join('courier', 'courier.order_id = delivery.order_id');
        $this->db->where('order_id',$order_id);
        $this->db->group_by('order_id');
        $result = $this->db->get();
        return $result->row();
    }
    public function view_billing($order_id){
        $this->db->select('*');
        $this->db->from('billing');
        $this->db->where('order_id',$order_id);
        $result = $this->db->get();
        return $result->row();
    }

}