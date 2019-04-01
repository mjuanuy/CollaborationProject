<!DOCTYPE html>
<html>
<head>
	<title>E-Commerce Couriers | LOG IN</title>
</head>

<body>
	<div class="container">
		<form action="<?php echo base_url();?>Cour/lbc_validation" method="POST">
			<div class="form-group">
				<label>Enter Username:</label>
				<input type="text" name="acc_uname" class="form-control" />
				<span class="text-danger"><?php echo form_error('acc_uname'); ?></span>
			</div>
			<div class="form-group">
				<label>Enter Password:</label>
				<input type="password" name="acc_pword" class="form-control" />
				<span class="text-danger"><?php echo form_error('acc_pword'); ?></span>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="LOG IN" />
				<?php
				echo $this->session->flashdata("error");
				?>
			</div>
		</form>
	</div>
</body>
</html>