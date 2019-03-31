<div class="container-fluid">
	<h4>Inventory by Category page</h4>
    <hr>

<table class="table table-responsive">
    <tbody>
      <tr>
        <td>Display Inventory by:</td>
        <td><a class="btn btn-danger navbar-btn" href="<?php echo base_url('inventory');?>">Products</a></td>
        <td><a class="btn btn-warning navbar-btn" href="<?php echo base_url('inventory/manage_inventory_by_category');?>">Category</a></td>
        <td><a class="btn btn-danger navbar-btn" href="<?php echo base_url('inventory/manage_inventory_by_supplier');?>">Supplier</a></td>
      </tr>
    </tbody>
  </table>

	<!--a href="<!?= base_url('app/logout'); ?>">Logout</a-->
	<hr>
	<div class="panel">
		<div class="container-fluid"> 
			<table class="table table-striped">
				<tr>
                  <th scope="col">Category Name</th>
                  <th scope="col"> </th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Beginning</th>
                  <th scope="col">Deliveries</th>
                  <th scope="col">Sold</th>
                  <th scope="col">Ending</th>
                  <th scope="col">Option</th>
                </tr>

                <?php foreach ($view_history as $sp) { ?>
                <tr>
                    <td><?php echo $sp->category_name; ?></td>
                    <td><a href="<?= base_url('Shop/details?product='.$sp->product_id)?>"><img style="height:50px" src="<?php echo base_url('uploads/'.$sp->product_image)?>" alt=""   data-toggle="modal" data-target="#myModal"/></a></td>
                    <td><?php echo $sp->product_name; ?></td>
                    <td><?php echo $sp->product_name; ?></td>
                    <td><?php echo $sp->quantity; ?></td>
                    <td><?php echo $sp->product_image; ?></td>
                    <td><?php echo $sp->product_image; ?></td>
                    <td><div class="button"><span><a href="<?php echo base_url('Shop/details?product='.$sp->product_id);?>" class="btn btn-primary">Details</a></span></div></td>

                <?php } ?>
            	</tr>

           </table>
        </div>
	</div>

	<!--div class="modal container-fluid" id="myModal">
        <?php foreach ($product_info as $single_products) { ?>
            <div class="panel-body well" style=" float:left;padding:20px;margin:10px;background-color:#DCDCDC;">
                <a  href="<?= base_url('Shop/details?product='.$single_products->product_id)?>" ><img style="height:160px" src="<?php echo base_url('uploads/'.$single_products->product_image)?>" alt="" /></a>
                <h4><?php echo $single_products->product_name?></h4>
                <p><?php echo $single_products->short_desc?></p>
                <p><span class="price"><?php echo $this->cart->format_number($single_products->sell_price) ?> PHP</span></p>
                <div class="button"><span><a href="<?php echo base_url('Shop/details?product='.$single_products->product_id);?>" class="btn btn-primary">Details</a></span></div>
            </div>
            <?php
        }
        ?>
    </div-->


</div>