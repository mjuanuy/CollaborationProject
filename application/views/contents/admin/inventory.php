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
                  <th scope="col">Sold</th>
                  <th scope="col">Ending</th>
                  <th scope="col">Status</th>
                </tr>

                <?php foreach ($products as $sp) { 
                  
                  ?>
                <tr>
                    <td><a  href="<?php echo base_url('inventory/product_history?product='.$sp->product_id);?>"><img style="height:50px" src="<?php echo base_url('uploads/'.$sp->product_image)?>" ></a></td>
                    <td><p><?php echo $sp->product_name?></p></td>
                    <td><p><span class="price"><?php echo $this->cart->format_number($sp->sell_price) ?> PHP</span></p></td>
                    <td><p><span class="price"><?php echo ($sp->stocks_qnty) ?> pcs.</span></p></td>
                    <td><p><span class="price"><?php echo ($sp->qnty) ?> pcs.</span></p></td>
                    <td><p><span class="price"><?php echo ($sp->stocks_qnty-$sp->qnty) ?> pcs.</span></p></td>
                    <td><p><span class="price">
                      <?php if (($sp->stocks_qnty -  $sp->qnty ) < 5): ?>
                              <button type="button" class="btn btn-danger">Stocks Deplated</button>
                      <?php elseif (($sp->stocks_qnty -  $sp->qnty) < 5): ?>
                              <button type="button" class="btn btn-primary">Low Stocks Order now</button>
                      <?php elseif (($sp->stocks_qnty -  $sp->qnty) > 5): ?>
                              <button type="button" class="btn btn-warning">Warning Low Stocks</button>
                      <?php else: ?>
                              <button type="button" class="btn btn-success">Stocks OK Status</button>
                      <?php endif; ?>
                    </p></td>
                <?php } ?>
                </tr>
           </table>
        </div>
    </div>

    <div class="modal container-fluid" id="myModal">
            <div class="panel-body well" style=" float:left;padding:20px;margin:10px;background-color:#DCDCDC;">
                <a  href="<?= base_url('Shop/details?product='.$sp->product_id)?>" ><img style="height:160px" src="<?php echo base_url('uploads/'.$sp->product_image)?>" alt="" /></a>
                <h4><?php echo $sp->product_name?></h4>
                <p><?php echo $sp->short_desc?></p>
                <p><span class="price"><?php echo $this->cart->format_number($sp->sell_price) ?> PHP</span></p>
                <div class="button"><span><a href="<?php echo base_url('Shop/details?product='.$sp->product_id);?>" class="btn btn-primary">Details</a></span></div>
            </div>

    </div>


</div>