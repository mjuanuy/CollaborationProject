<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Model {

    protected $table = "customers";


	public function read_customer_info_by_id($id){

		$sql = "SELECT * FROM ".$this->table." WHERE cus_id =".$id;

		return $this->db->query($sql)->result();

		// return $this->db->insert($data);

	}

}
