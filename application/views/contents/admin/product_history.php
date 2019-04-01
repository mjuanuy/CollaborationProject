<!-- start: Content -->
<div id="content" class="span10">
    <ul class="breadcrumb">
        <li><i class="fas fa-home"></i>
            <a href="<?php echo base_url('Dashboard') ?>">Home </a> <i class="fas fa-angle-right"></i></li>
        <li><a href="<?php echo base_url('inventory') ?>"> Inventory</a>  <i class="fas fa-angle-right"></i> </li>
        <li><a href="<?php echo base_url('inventory') ?>"><?php echo $product_detail[0]->product_name; ?></a></li>
    </ul>

    <div class="row-fluid sortable">		
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Product History</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <table class="table table-bordered">
            	<tbody>
            		<tr>
            			<td width="50%"><h4>Product code: (00<?php echo $product_detail[0]->product_id; ?>)</h4>
		                    <table class="table table-striped table-bordered table-responsive">
		                        <tr>
		                            <td>Product Name : </td>
		                            <td><?php echo $product_detail[0]->product_name; ?></td>
		                        </tr>
		                        <tr>
		                            <td>Description : </td>
		                            <td><?php echo $product_detail[0]->short_desc; ?></td>
		                        </tr>
		                        <tr>
		                            <td>Category : </td>
		                            <td><?php echo $product_detail[0]->category_id; ?></td>
		                        </tr>
		                        <tr>
		                            <td>Supplier : </td>
		                            <td><?php echo $product_detail[0]->supplier_companyname; ?></td>
		                        </tr>
		                    </table>
		              	</td>
            			<td width="50%"><h4>Product Sales: </h4>
		                    <table class="table table-striped table-bordered table-responsive">
		                        <tr>
		                            <td>Available Stock : </td>
		                            <td><?php echo $product_detail[0]->supplied_stock; ?></td>
		                        </tr>
		                        <tr>
		                            <td>Deliveries : </td>
		                            <td><?php echo $product_detail[0]->stocks_qnty; ?></td>
		                        </tr>
		                        <tr>
		                            <td>Sold : </td>
		                            <td><?php echo $product_detail[0]->quantity; ?></td>
		                        </tr>
		                        <tr>
		                            <td>Price: </td>
		                            <td><?php echo $product_detail[0]->sell_price; ?></td>
		                        </tr>
		                    </table>
		                </td>
            		</tr>
            	</tbody>
            </table>

             <table class="table table-striped table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Product Qty</th>
                            <th>Product Subtotal</th>
                        </tr>
                    </thead>   
                    <tbody>
                        <!--?php
                        $i = 0;
                        foreach ($order_details_info as $single_order_details) {
                            $i++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $single_order_details->product_name ?></td>
                                <td><img src="<?php echo base_url('uploads/'.$single_order_details->product_image);?>" style="width:200px;height:100px"/></td>
                                <td><?php echo $this->cart->format_number($single_order_details->product_price)?> Tk</td>
                                <td><?php echo $single_order_details->product_sales_quantity ?></td>
                                <td><?php echo $this->cart->format_number($single_order_details->product_price * $single_order_details->product_sales_quantity) ?> Tk</td>
                            </tr-->
                        <!--?php } ?-->
                    </tbody>
                    <tfooter>
                        <!--td colspan="5">Total</td-->
                        <!--td>= <?php echo $this->cart->format_number($order_info->order_total)?> Tk</td-->
                    </tfooter>
                </table>            
            </div>
        </div></span-->

    </div>


<!-- end: Content -->