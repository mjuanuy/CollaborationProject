<div class="container-fluid">
	<h4>Inventory by Category page</h4>
    <hr>
    <?php 
        $i=0;
        foreach($view_product as $vp){
            $i++;
            ?>
            <td><?php echo $vp->product_name?></td>

                <!--a href="#>"><img style="height:50px" src="<?php echo base_url('uploads/'.$sp->product_image)?>" alt=""   data-toggle="modal" data-target="#myModal"/></a>
                <!--a class="btn btn-danger" href="<?php echo base_url('inventory/products/'.$vp->product_id);?>">View product</a-->


        <?php }?>

        <div class="modal container-fluid" id="myModal">
        <div class="panel">
        <div class="container-fluid">
        Cres
        </div></div>
    </div>
</div>