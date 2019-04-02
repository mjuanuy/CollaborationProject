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

	public function read_all_category(){
		$sql="SELECT * FROM product_category";

		return $this->db->query($sql)->result();
	}

	public function read_all_supplier(){
		$sql="SELECT * FROM supplier";

		return $this->db->query($sql)->result();
	}	

	public function read_stocks_by_id($id){

		$sql = "SELECT SUM(stocks_qnty) FROM stock WHERE SupplyRequestStatus = 'approved' AND product_id='".$id."'";

		return $this->db->query($sql)->result();
	}

	public function quantity_by_order($id){

		$sql="SELECT SUM(quantity) from order_details where product_id=".$id;

		return $this->db->query($sql)->result();
	}


	public function save_product($data){

		$this->db->insert($this->table,$data);
		return $this->db->insert_id();
	}
	public function add_stocks($data,$result){

		$sql="INSERT INTO stock (supplier_id,product_id)
		Values
		(".$data['supplier_id'].",".$result.")";

		return $this->db->query($sql);
	}
}
