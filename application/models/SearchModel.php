<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SearchModel Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function search($keyword)
    {
        $this->db->like('product_name',$keyword);
        $query = $this->db->get('products');
        return $query->result();
    }
}   