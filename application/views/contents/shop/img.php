<div class="container-fluid">

		<div class="form-group">
		<label for="product_image" class="col-md-2 text-right">Product Image:</label>
			<div class="col-md-10">
					<?php echo form_open_multipart('Upload/file_upload');?>
					<input type="file" name="file_name" size="20" />
					<input type="submit" name='upload' value="upload" />
			</div>
		</div>
</div>