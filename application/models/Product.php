<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {
	protected $table = 'products';

	
	public function read_all_products(){

		$sql = "SELECT * FROM ".$this->table;

		return $this->db->query($sql)->result();
	}
	public function read_latest_product(){

		$sql = "SELECT * FROM ".$this->table." ORDER by date_added DESC LIMIT 2";

		return $this->db->query($sql)->result();
	}
	public function read_product_by_id($id){

		$sql = "SELECT * FROM ".$this->table." p join product_category c on p.category_id=c.category_id join stock s on p.product_id=s.product_id WHERE p.product_id='".$id."'";

		return $this->db->query($sql)->result();
	}	
	public function read_stocks_by_id($id){

		$sql = "SELECT * FROM stock WHERE product_id='".$id."'";

		return $this->db->query($sql)->result();
	}

	public function File_upload($data){
		$qry = $this->db->insert('products',$data);

	}

	public function submit(){
		$field = array(
			'product_id'=>$this->input->post('txt-product_id'),
			'product_name'=>$this->input->post('txt-product_name'),
			'purchase_price'=>$this->input->post('txt-purchase_price'),
			'sell_price'=>$this->input->post('txt-purchase_sell'),
			'short_desc'=>$this->input->post('txt-short_description'),
			'description'=>$this->input->post('txt_description'),
			'category_id'=>$this->input->post('txt-category_id'),
			);

		$this->db->insert('products',$field);
		if($this->db->affected_rows() >0){
			return true;
		}
		else{
			return false;
		}
	
	}
	public function getstock(){
		$field = array(
			'product_id'=>$this->input->post('txt-product_id'),
			'stock_id'=>$this->input->post('txt-stock'),
			'quantity'=>$this->input->post('txt-quantity'),
			'supplier_id'=>$this->input->post('txt-supplier')
			);
		
		$this->db->insert('stock',$field);
		if($this->db->affected_rows() >0){
			return true;
		}
		else{
			return false;
		}
	}
	public function getproduct()
	{	
		
		$query = $this->db->get('products');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return false;
		}
	}

}