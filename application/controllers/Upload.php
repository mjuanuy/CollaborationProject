<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('form');
                $this->load->model('Product','prod');           
        }
        public function file_upload()
        {
             
             $config['upload_path'] ='./uploads';
             $config['allowed_types'] ='*';
             $this->load->library('upload',$config);
             $this->upload->do_upload('file_name');
             $file_name=$this->upload->data();
             $data=array('file_name'=>$file_name['file_name']);
             $result = $this->prod->File_upload($data);
             if($result){
            $this->session->set_flashdata('success_msg','Successfully Added to Record');
             }
             else{
            $this->session->set_flashdata('error_msg','Fail to add record');
             }
            redirect(base_url('shop/add'));

        }
    }

?>