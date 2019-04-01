<!DOCTYPE html>
<html>
<head>
	<title>E-Commerce <?php echo $this->session->userdata('acc_uname').' Dasboard'?></title>
</head>
<body>
	<form action="" method="POST">

	<?php
	echo '<h2>Welcome, ' . $this->session->userdata('acc_uname').'</h2>';
	?>
	<?php
	echo '<label><a href="'.base_url().'Cour/logout">Log Out</a></label';
	?>
	<br><br><br>
	<table border="2">
		<tr>
			<th>Order</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		<tr>
			<td>asd</td>
			<td>
				<select>
					<option>Pending</option>
					<option>In-Transit</option>
					<option>Shipped</option>
					<option>Delivered Successfully</option>
					<option>Delivered Unsuccessfully; Returned</option>
				</select>
			</td>
			<td><button>Update</button></td>
		</tr>
	
	</table>
</form>

</body>
</html>