<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search Extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('SearchModel');
    }

    function search_keyword()
    {
        $keyword =  $this->input->post('keyword');
        $data['products'] = $this->SearchModel->search($keyword);
        //$data['products'] = $this->prod->read_all_products();
        $data['pagename'] = 'Shop';
        $data['contents'] = 'contents/shop/homesearch';       
        $this->load->view('templates/header');      
        $this->load->view('templates/main', $data);
        $this->load->view('templates/footer');
    }

}