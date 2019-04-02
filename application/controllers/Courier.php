<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courier extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Useraccount', 'user');
		$this->load->model('Order');
	}

	public function index(){
		$this->check_access();
		$cour_data=$this->session->userdata('courier_id');
		$data['cour_details']=$this->Order->view_order_by_courier($cour_data);
		$data['pagename'] = 'Login';
		$data['contents'] = 'contents/courier/deliver';
		$this->load->view('templates/main', $data);
	}

	public function deliver(){
		$id=$this->input->get('order');
		$cour_data=$this->session->userdata('courier_id');
		$result=$this->Order->deliver_order($id);
		$this->Order->insert_delivery($id,$cour_data);
		$this->Order->save_payment($id);
		redirect('courier');
	}
	public function delivered_order(){
		$this->check_access();
		$cour_data=$this->session->userdata('courier_id');
		$data['cour_details']=$this->Order->view_delivered_order_by_courier($cour_data);
		$data['pagename'] = 'Login';
		$data['contents'] = 'contents/courier/delivered_order';
		$this->load->view('templates/main', $data);
	}	

	public function register_supplier(){
		$this->check_access();
		$data['pagename'] = 'Supplier Registration';
		$data['contents'] = 'contents/admin/supplier_registration';
		$this->load->view('templates/sbadmin', $data);
	}

	public function order_details(){
		$orderid = $this->input->get('order');
		$data['ord_det']=$this->Order->view_order_details($orderid);
		$data['pagename'] = 'Order Details';
		$data['contents'] = 'contents/courier/order_details';		
		$this->load->view('templates/main', $data);
	}  	


	public function registration(){

		$data = $this->input->post(); // return $_POST global array

		$result = $this->validate($data); // return array of error messages

		$this->setFlashData(array('alertType' => 'danger'));

		if(count($result) == 0){
			$result=$this->user->create_supp($data);
			if($this->user->create_supplier($data,$result)){
				$this->setFlashData(array('alertType' => 'success'));
				$this->setFlashData(array('system_msg' => array("Wait for admin approval!")));
			}else{
				$this->setFlashData(array('system_msg' => array("Failed to create!")));
			}
		}else{
			$this->setFlashData(array('system_msg' => $result));
		}
		
		redirect('Supplier/register_supplier');
	}

	private function setSession($data){
		$sessionData = array(
		    'username'  => $data[0]->username,
		    'accesslevel' => $data[0]->accesslevel,
		    'logged_in' => TRUE
		);

		$this->session->set_userdata($sessionData);
	}

	private function setFlashData($data){
		$this->session->set_flashdata($data);
	}

	private function check_access(){
		if($this->session->has_userdata('logged_in')){
			if($this->session->userdata('accesslevel') == 5){
				return true;
			}
		}else{
			redirect('app');
		}
	}


}