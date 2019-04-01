<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Model {



	public function read_payment_method(){
		$sql="SELECT * from payment";

		return $this->db->query($sql)->result();

	}
	public function read_courier(){
		$sql="SELECT * from courier";

		return $this->db->query($sql)->result();

	}



	public function save_order($data){
		$this->db->insert('orders',array('cus_id'=>$data['cus_id'],'cour_id'=>$data['cour_id']));
		return $this->db->insert_id();

	}

	public function save_order_details_info($data){
		$this->db->insert('order_details',$data);


	}
	public function save_billing($data,$result){
		return $this->db->insert('billing',array('amount'=>$data['amount'],'payment_status'=>$data['payment_status'],'payment_id'=>$data['payment_id'],'order_id'=>$result,'cus_id'=>$data['cus_id']));
	}	

	public function view_order_details($data){
		$sql="SELECT * from products p join order_details od on p.product_id=od.product_id
		join billing b on od.order_id = b.order_id where od.order_id=".$data." Group by p.product_id";

		return $this->db->query($sql)->result();
	}
	public function view_order_by_courier($data){

		$sql=" SELECT * FROM ORDERS O JOIN customers C ON O.cus_id = C.cus_id WHERE O.isDeliver ='no' AND O.cour_id=".$data;


		return $this->db->query($sql)->result();
	}
	public function view_delivered_order_by_courier($data){

		$sql=" SELECT * FROM ORDERS O JOIN customers C ON O.cus_id = C.cus_id WHERE O.isDeliver ='yes' AND O.cour_id=".$data;


		return $this->db->query($sql)->result();
	}	

	public function deliver_order($id){

		$sql="UPDATE ORDERS SET isDeliver = 'yes' , shippedDate = CURRENT_TIMESTAMP
		WHERE order_id=".$id;

		return $this->db->query($sql);
	}

}