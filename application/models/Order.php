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

}
