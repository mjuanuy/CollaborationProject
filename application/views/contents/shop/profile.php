<div class="container">
    <div class="card" style="width: 200%; margin-left: -225px">
      <div class="card-header" align="center">ACCOUNT PROFILE</div>
     <div class="card-body" style="width: 200%">
    <form action="<?= base_url('app/registration'); ?>" method="POST">
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
                            <td><input type="text" class="form-control" name="lastname" placeholder="<?php echo $key->last_name?>"></td>
                        </tr>
                        <tr><td> </td></tr>
                        <tr>
                            <td><label>First Name</label></td>
                            <td><input type="text" class="form-control" name="firstname" placeholder="<?php echo $key->first_name?>"></td>
                        </tr>
                        <tr><td> </td></tr>
                        <tr>
                            <td><label>Middle Name&nbsp;&nbsp;</label></td>
                            <td><input type="text" class="form-control" name="middlename" placeholder="<?php echo $key->middle_name?>"></td>
                        </tr>
                        <tr><td> </td></tr>
                        <tr>
                            <td><label>Contact #</label></td>
                            <td><input type="text" class="form-control" name="contact" placeholder="<?php echo $key->contact_num?>"></td>
                        </tr>
                        <tr><td> </td></tr>
                        <tr>
                            <td><label>Email</label></td>
                            <td><input type="text" class="form-control" name="email" placeholder="<?php echo $key->cus_email?>"></td>
                        </tr>
                    </table>
                    </td>
                    <td style="padding-left: 100px"> 
                    <table>
                        <tr>
                            <td><label>Street Add</label></td>
                            <td><input type="text" class="form-control" name="street" placeholder="<?php echo $key->cus_street?>"></td>
                        </tr>
                        <tr><td> </td></tr>
                        <tr>
                            <td><label>City Add</label></td>
                            <td><input type="text" class="form-control" name="city" placeholder="<?php echo $key->cus_city?>"></td>
                        </tr>
                        <tr><td> </td></tr>
                        <tr>
                            <td><label>Province Add&nbsp;&nbsp;</label></td>
                            <td><input type="text" class="form-control" name="province" placeholder="<?php echo $key->cus_province?>"></td>
                        </tr>
                        <tr><td> </td></tr>
                        <tr>
                            <td><label>Postal #</label></td>
                            <td><input type="text" class="form-control" name="postal" placeholder="<?php echo $key->cus_postal?>"></td>
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