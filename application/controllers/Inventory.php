<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Inventaryo','inv');		
	}	

	public function index(){
		$this->check_access();
		$data= array();
	//	$productid = $this->input->get('product');
	//	$products = $this->inv->view_product_history();
    //    $prod_id = $products[0]->product_id;

    //    $data['stocks'] = $this->inv->view_stock($prod_id);
    //    $data['orders'] = $this->inv->view_orders($prod_id);
		$data['products'] = $this->inv->read_all_products();
	//	echo var_dump($data);
		$data['pagename'] = 'Inventory';
		$data['contents'] = 'contents/admin/inventory';		
		$this->load->view('templates/sbadmin', $data);
	}

	public function product_history(){
		$this->check_access();
		$data= array();
		$productid = $this->input->get('product');
		$products = $this->inv->view_product_history1($productid);
        $prod_id = $products[0]->product_id;

        $data['view_orders'] = $this->inv->view_product_by_date($prod_id);
        $data['product_by_date'] = $this->inv->view_product_by_date($prod_id);
        $data['stocks'] = $this->inv->view_stock($prod_id);
        $data['orders'] = $this->inv->view_orders($prod_id);
		$data['product_detail'] = $this->inv->view_product_history1($productid);
	//	echo var_dump($data);
		$data['pagename'] = 'Details';
		$data['contents'] = 'contents/admin/product_history';
		$this->load->view('templates/sbadmin', $data);
	}


	
	public function product_history1(){
		$this->check_access();
        $data= array();
		$productid = $this->input->get('product');
		$products = $this->inv->view_product_history();
        $prod_id = $products[0]->product_id;

        $data['stocks'] = $this->inv->view_stock($prod_id);
        $data['orders'] = $this->inv->view_orders($prod_id);
        $data['view_history'] =$this->inv->view_product_history();
        $data['contents']= $this->load->view('contents/admin/category',$data,true);
        echo var_dump($data);
        $this->load->view('templates/sbadmin',$data);
    }
    




    public function product(){
        $data= array();
        $products = $this->inv->view_product_history();
        $prod_id = $products[0]->product_id;
        $data['stocks'] = $this->inv->view_stock($prod_id);
        $data['view_product'] =$this->inv->view_product_history();
        $data['contents']= 'contents/admin/test';
        echo var_dump($data);
        $this->load->view('templates/sbadmin',$data);

    }


	public function disable(){

		$userid = $this->input->get('userid');

		if($this->user->disable($userid)){
			redirect('dashboard');
		}else{
			echo "Failed to disable! <a href='".base_url('dashboard')."'>Go back</a>";
		}

	}

	private function check_access(){
		if($this->session->has_userdata('logged_in')){
			if($this->session->userdata('accesslevel') == 1){
				return true;
			}else{
				redirect('app');
			}
	    }else{
	    	redirect('app');
	    }
    }
}