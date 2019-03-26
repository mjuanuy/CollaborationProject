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
	<div class="form-group">
	
	<?php echo form_open_multipart('Upload/file_upload');?>

            <img id="preview" style = "width: 200px; height: 200px;">
            <input type="file" name = "file_name" id="input">
            <input type="submit" value="upload" name="upload" />
    </div>
     </form>
	
	<form action ="<?php echo base_url('Shop/submit');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
		<div class="form-group">
		<label for="product_id" class="col-md-2 text-right">Product ID:</label>
			<div class="col-md-10">
				<input type="text" name="txt-product_id" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
		<label for="product_name" class="col-md-2 text-right">Product Name:</label>
			<div class="col-md-10">
				<input type="text" name="txt-product_name" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
		<label for="purchase_price" class="col-md-2 text-right">Purchase Price:</label>
			<div class="col-md-10">
				<input type="text" name="txt-purchase_price" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
		<label for="sell_price" class="col-md-2 text-right">Purchase sell price:</label>
			<div class="col-md-10">
				<input type="text" name="txt-purchase_sell" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
		<label for="short_desc" class="col-md-2 text-right">Short description:</label>
			<div class="col-md-10">
				<textarea name="txt-short_description" class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group">
		<label for="description" class="col-md-2 text-right">Description:</label>
			<div class="col-md-10">
				<textarea name="txt_description" class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group">
		<label for="category_id" class="col-md-2 text-right">Category:</label>
			<select name="txt-category_id">
				  <option value="1">Smartphone</option>
				  <option value="2">Laptop</option>
			</select>

		</div>
		<div class="form-group">
		<label class="col-md-2 text-right"></label>
			<div class="col-md-10">
				<input type="submit" name="BtnSave" class="btn btn-primary" value="Save">
				<a href="<?php echo base_url('Shop/tab');?>" class="btn btn-default">Back</a>
			</div>
		</div>

	</form>