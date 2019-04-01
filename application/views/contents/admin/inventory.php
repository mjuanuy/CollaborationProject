<div class="container-fluid">
	<h4>SIS INVENTORY PAGE</h4>
	<!--a href="<!?= base_url('app/logout'); ?>">Logout</a-->
	<hr>
	<div class="panel">
		<div class="container-fluid">
			<table class="table table-striped">
				<tr>
			      <th scope="col">Icon</th>
			      <th scope="col">Product Name</th>
			      <th scope="col">Selling Price</th>
			      <th scope="col">Beginning</th>
			      <th scope="col">Deliveries</th>
			      <th scope="col">Sold</th>
                  <th scope="col">Ending</th>
                  <th scope="col">Option</th>
			    </tr>
                <?php foreach ($products as $sp) { ?>
                    <!--div class="panel-body well" style=" float:left;padding:20px;margin:10px;background-color:#DCDCDC;"-->
                <tr>
                    <td><a  href="<?php echo base_url('inventory/product_history?product='.$sp->product_id);?>"><img style="height:50px" src="<?php echo base_url('uploads/'.$sp->product_image)?>" ></a></td>
                    <td><p><?php echo $sp->product_name?></p></td>
                    <td><p><span class="price"><?php echo $this->cart->format_number($sp->sell_price) ?> PHP</span></p></td>
                    <td><p><span class="price"><?php echo $this->cart->format_number($sp->stocks_qnty) ?> pcs.</span></p></td>
                    <td><p><span class="price"><?php echo $this->cart->format_number($sp->supplied_stock) ?> pcs.</span></p></td>
                    <td><p><span class="price"><?php echo $this->cart->format_number($sp->quantity) ?> pcs.</span></p></td>
                    <td><p><span class="price"><?php echo $this->cart->format_number($sp->stocks_qnty+$sp->supplied_stock-$sp->quantity) ?> pcs.</span></p></td>
                    <td><div class="button"><span><a href="#" class="btn btn-primary"  alt=""   data-toggle="modal" data-target="#myModal"/>Details</a></span></div></td>
                    <!--/div-->
                <?php } ?>
            	</tr>
           </table>
        </div>
	</div>

	<div class="modal container-fluid" id="myModal">
        <div class="panel">
        <div class="container-fluid">
        Cres
        </div></div>
    </div>


</div>