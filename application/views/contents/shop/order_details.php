
<div class="container-fluid">
            <div align="center" style="width:100%"> <q></q>
                <h2 style="margin-right:64%;">Order Details for Order # <?php echo $ord_det[0]->order_id ?></h2>
                    <table class="tblone" style="height:60px;width:80%;">
                        <tr>
                            <th width="5%">Item</th>
                            <th width="30%">Product Name</th>
                            <th width="40%">Image</th>
                            <th width="15%">Price</th>
                            <th width="20%">Quantity</th>

                        </tr>
                        <?php
                        $i = 0;
                        $subtotal=0;
                        foreach ($ord_det as $key) {
                            $i++;
                            $subtotal+=$key->sell_price;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $key->product_name ?></td>
                                <td><img src="<?php echo base_url('uploads/' . $key->product_image) ?>" style="height:40px;"alt=""/></td>
                                <td>PHP. <?php echo $this->cart->format_number($key->sell_price) ?></td>
                                <td><?php echo $key->quantity ?></td>
                            </tr>
                        <?php } ?>


                    </table>
                    <br>
                    <table style="float:right;margin-right:19%" width="21%">
                        <tr>
                            <th>Total :</th>
                            <td>PHP. <?php echo $this->cart->format_number($key->amount); ?> </td>
                        </tr>
                        <tr>
                            <td>-----------------</td>
                            <td>----------------------</td>
                        </tr>
                        <tr>
                            <th> VAT SALES: </th>
                            <td>PHP <?php 
                             $vat=$key->amount / 1.12;
                             echo $this->cart->format_number($vat);   
                             ?> </td>
                        </tr>   
                        <tr>
                            <th>VAT (12%): </th>
                            <td>PHP <?php 
                            $tax=$key->amount - $vat;
                            echo $this->cart->format_number($tax);  
                            ?></td>
                        </tr> 
                        <tr>
                            <th>Amount Payable: </th>
                            <td>PHP <?php echo $this->cart->format_number($key->amount); ?> </td>
                        </tr>             
                    </table>
                </div>
            </div>
            <br>
            <br>
                        <div style="display:block;"align="center">
                            <td><a href="<?= base_url('shop/'); ?>" class="btn btn-info">Go back</a></td>
                        </tr>
                    </div>
                    <?php
                
                ?>
            </div>
        </div>

