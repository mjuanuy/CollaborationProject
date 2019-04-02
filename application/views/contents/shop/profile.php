<div class="container">
    <div class="card" style="width: 200%; margin-left: -225px">
      <div class="card-header" align="center">ACCOUNT PROFILE</div>
     <div class="card-body" style="width: 200%">
    <form action="<?= base_url('app/edit_profile'); ?>" method="POST">
                   <?php
                $i=0;
                  foreach ($order as $key):
                    $i++;
                      ?>



                <div class="form-group">
                    <table>
                    <tr>
                    <td style="padding-left: 100px"> 
                    <table>
                        <tr>
                            <td><label>Last Name</label></td>
                            <td><input type="text" class="form-control" name="lastname" value="<?php echo $key->last_name?>"></td>
                            <td><input type="hidden" name="ID" value="<?php echo $key->userid; ?>"></td>
                        </tr>
                        <tr><td> </td></tr>
                        <tr>
                            <td><label>First Name</label></td>
                            <td><input type="text" class="form-control" name="firstname" value="<?php echo $key->first_name?>"></td>
                        </tr>
                        <tr><td> </td></tr>
                        <tr>
                            <td><label>Middle Name&nbsp;&nbsp;</label></td>
                            <td><input type="text" class="form-control" name="middlename" value="<?php echo $key->middle_name?>"></td>
                        </tr>
                        <tr><td> </td></tr>
                        <tr>
                            <td><label>Contact #</label></td>
                            <td><input type="text" class="form-control" name="contact" value="<?php echo $key->contact_num?>"></td>
                        </tr>
                        <tr><td> </td></tr>
                        <tr>
                            <td><label>Email</label></td>
                            <td><input type="text" class="form-control" name="email" value="<?php echo $key->cus_email?>"></td>
                        </tr>
                    </table>
                    </td>
                    <td style="padding-left: 100px"> 
                    <table>
                        <tr>
                            <td><label>Street Add</label></td>
                            <td><input type="text" class="form-control" name="street" value="<?php echo $key->cus_street?>"></td>
                        </tr>
                        <tr><td> </td></tr>
                        <tr>
                            <td><label>City Add</label></td>
                            <td><input type="text" class="form-control" name="city" value="<?php echo $key->cus_city?>"></td>
                        </tr>
                        <tr><td> </td></tr>
                        <tr>
                            <td><label>Province Add&nbsp;&nbsp;</label></td>
                            <td><input type="text" class="form-control" name="province" value="<?php echo $key->cus_province?>"></td>
                        </tr>
                        <tr><td> </td></tr>
                        <tr>
                            <td><label>Postal #</label></td>
                            <td><input type="text" class="form-control" name="postal" value="<?php echo $key->cus_postal?>"></td>
                        </tr>
                        <tr><td> </td></tr>
                        <tr>
                          <td>
                            <button type="submit" class="btn btn-success">Edit</button>
                          </td>
                        </tr>
                    </table>
                    </td>
                    </tr>
                    </table>
                </div>
                <?php
                  endforeach;
                  ?>
    </form>
</div>
</div>

</div>
<br>
<br>
<h4>Orders</h4> 
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Order</th>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Payment</th>
          <th>Delivery</th>

        </tr>
      </thead>
      <tbody>
      <?php
        $i=0;
          foreach ($details as $key1):
            $i++;
              ?>
                <tr>

                  <td ><?php echo $i;?> </td>
                  <td ><?php echo $key1->product_name?></td>
                  <td ><?php echo $key1->quantity?></td>
                  <td ><?php echo $key1->payment_status?></td>
                  <td><?php echo $key1->isDeliver?></td>
                
                </tr>

              <?php
          endforeach;
          ?>
      </tbody>
    </table>
  </div>