	<?php
		if($this->session->flashdata('success_msg')){
	?>
		<div class="alert alert-success">
		<?php echo $this->session->flashdata('success_msg'); ?>
		</div>
	<?php

		}
	?>

	<?php
		if($this->session->flashdata('error_msg')){
	?>
		<div class="alert alert-success">
		<?php echo $this->session->flashdata('error_msg'); ?>
		</div>
	<?php

		}
	?>
	
	
	<form action ="<?php echo base_url('Shop/getstock');?>" method="post" class="form-horizontal">
		<div class="form-group">
		<label for="product_id" class="col-md-2 text-right">Product ID:</label>
			<div class="col-md-2">
				<input type="text" name="txt-product_id" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
		<label for="stock_id" class="col-md-2 text-right">Stock ID:</label>
			<div class="col-md-2">
				<input type="text" name="txt-stock" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
		<label for="quantity" class="col-md-2 text-right">Quantity:</label>
			<div class="col-md-2">
				<input type="text" name="txt-quantity" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
		<label for="supplier_id" class="col-md-2 text-right">Supplier ID:</label>
			<div class="col-md-2">
				<input type="text" name="txt-supplier" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 text-right"></label>
			<div class="col-md-10">
				<input type="submit" name="btnSave" class="btn btn-primary" value="Save">
				<a href="<?php echo base_url('Shop/add');?>" class="btn btn-default">Back</a>
			</div>
		</div>

	</form>