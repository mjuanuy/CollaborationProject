
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
	<h3>ProductList</h3>
	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<td>ID</td>
				<td>Product Name</td>
				<td>Purchase Price</td>
				<td>Sell Price</td>
				<td>ProductImage</td>
				<td>Short Description</td>
				<td>Description</td>
				<td>Category Id</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
		<?php
			if($blogs){
				foreach($blogs as $blog){
			
		?>
			<tr>
				<td><?php echo $blog->product_id; ?></td>
				<td><?php echo $blog->product_name; ?></td>
				<td><?php echo $blog->purchase_price; ?></td>
				<td><?php echo $blog->sell_price; ?></td>
				<td><img style="height: 70px;" src="<?php echo base_url('uploads/'.$blog->file_name); ?>"></td>
				<td><?php echo $blog->short_desc; ?></td>
				<td><?php echo $blog->description; ?></td>
				<td><?php echo $blog->category_id; ?></td>
				
				
				<td>
					<a href="<?php echo base_url(); ?>" class="btn btn-info">Update</a>
					<a href="" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		<?php
				}
			}
		?>
		</tbody>
	</table>
	<div class="text-center">
			<a href="<?php echo base_url('Shop/add');?>" class="btn btn-primary">Add New</a>
	</div>
