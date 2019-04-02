<!-- start: Content -->
<div id="content" class="span10">
    <ul class="breadcrumb">
        <li><i class="fas fa-home"></i>
            <a href="<?php echo base_url('Dashboard') ?>">Home </a> <i class="fas fa-angle-right"></i></li>
        <li><a href="<?php echo base_url('inventory') ?>"> Inventory</a>  <i class="fas fa-angle-right"></i> </li>
        <li><a href="<?php echo base_url('Shop/details?product='.$product_detail[0]->product_id);?>"><?php echo $product_detail[0]->product_name; ?></a></li>
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
                        <td width="60%"><h4>Product code: (00<?php echo $product_detail[0]->product_id; ?>)</h4>
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
                                    <td><?php echo $product_detail[0]->category_name; ?></td>
                                </tr>
                                <tr>
                                    <td>Supplier : </td>
                                    <td><?php echo $product_detail[0]->supplier_companyname; ?></td>
                                </tr>
                            </table>
                        </td>
                        <td width="40%"><h4>Product Image: </h4>
                            <table class="table table-striped table-bordered table-responsive">
                                <tr>
                                    <td><img style="height:180px" src="<?php echo base_url('uploads/'.$product_detail[0]->product_image)?>" ></td>
                                    
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>

             <table class="table table-striped table-bordered">
                    <thead>

                        <tr>
                            <th>Date</th>
                            <th>Prod ID</th>
                            <th>Product Name</th>
                            <th>Date Added</th>
                         </tr>
                    </thead>   
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($product_detail as $h) {
                            $i++;
                            ?>
                            <tr>
                                <td><?php echo ($i) ?></td>
                                <td>000<?php echo ($h->product_id) ?></td>
                                <td><?php echo ($h->product_name) ?></td>
                                <td><?php echo ($h->date_added) ?></td>
                            
                                <!--d><button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-primary">Edit</button> </td-->
                              </tr>
                        <?php } ?>
                    </tbody>
                </table>          
            </div>
        </div>

    </div>


<!-- end: Content -->