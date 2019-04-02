<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()."assets/assets";?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url()."assets/assets";?>/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()."assets/assets";?>/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top" style="background-color:#E8E8E8;">
<div class="container-fluid" text-align="center" style="width:90%;background-color:#FFFFFF">
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
<div class="panel-body well">
  <a href="<?= base_url('shop'); ?>">
      <img style="width:100px;height:68px" src="<?php echo base_url('uploads/r1.png')?>" />
  </a></div>
    
  <div class="container-fluid" style="margin-left:2%;width:100%;">

        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
    <div style="margin-left:20px;">
              <a href="<?= base_url('shop/cart'); ?>" class="btn btn-info btn-lg" >
          <span class="glyphicon glyphicon-shopping-cart" style="margin:0px;"></span>
          <span>(<?php echo $this->cart->total_items();?> Items)</span>
        </a>   
    </div>          
       
    <div style="margin-left:5%;">



 <?php 
  $customer_id=$this->session->userdata('cus_id');
  if($customer_id){?>
    <div>
      <h3 class="navbar-brand mr-1" >Welcome, <?= $this->session->userdata('username'); ?>!</h3>
    <ul class="navbar-nav ml-auto ml-md-0">
      <li><a href="<?= base_url('shop/view_orders'); ?>" class="nav-link">Order History</a></li>
<!--       <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
        </a>
      </li> -->
      <li>
          <a class="nav-link" href="<?= base_url('app/logout'); ?>">Logout</a><

    </ul>
 <?php }else{?> 
      <a href="<?= base_url('app/'); ?>" class="btn btn-primary"> Login</a>
 <?php } ?>



  <!--   <a href="<?= base_url('app/logout'); ?>">Logout</a> -->


    </div>
  </nav>
