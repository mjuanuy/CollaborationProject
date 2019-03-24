<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?= $pagename.' : '; ?>Student Information System</title>
		<link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome/css/all.min.css'); ?>">
		<link rel="stylesheet" href="<?= base_url('assets/plugins/pace/pace.css'); ?>">
		<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">		
		
	</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
  	<a class="navbar-brand" href="#">
    <img src="<?= base_url('assets/img/'); ?>small-globe.png" alt="Logo" style="width:40px;">
  </a>
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
      <li><a href="#">Shop</a></li>
      <li><a href="#">Cart</a></li>
      <li><a href="#">About us</a></li>
    </ul>
    <div class="navbar-header" style="padding-left: 20px;float: right;">
      <a class="navbar-brand glyphicon glyphicon-log-in" href="<?= base_url(); ?>app/pasokpo"> Login</a>
    </div>
    <form class="form-inline" action="/action_page.php" style="margin-top: 10px; float: right;">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
  </div>
</nav>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>My First Bootstrap 4 Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
<div class="container-fluid">  
		<?php 
			if(isset($contents)){
				$this->load->view($contents);
			}else{
				echo "No Page to Loads";
			}
		?>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
	
</div>
		<script type="text/javascript" src="<?= base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('assets/plugins/pace/pace.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('assets/js/script.js'); ?> "></script>
	</body>
</html>