<h4>Delivered Orders</h4>
<div align="right"> <a  class='btn btn-sm btn-danger' href="<?= base_url('app/logout'); ?>">Logout</a></div>
<a href="<?php echo base_url('courier'); ?>" class='btn btn-sm btn-primary'>
                            <i class='fas fa-edit'>Pending Delivery</i></a>
<div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Order</th>
                  <th>Date Ordered</th>
                  <th>Date Shipped</th>
                  <th>Customer Name</th>
                  <th>Contact Number</th>
                  <th>Street</th>
                  <th>City</th>
                  <th>Province</th>
                  <th>Postal</th>
                  <th>Action</th>                  
                </tr>
              </thead>
              <tbody>
              <?php
                $i=0;
                  foreach ($cour_details as $key):
                    $i++;
                      ?>
                        <tr>
                          <td ><?php echo $key->order_id?></td>
                          <td ><?php echo $key->orderDate?></td>
                          <td ><?php echo $key->shippedDate?></td>
                          <td style="text-transform: capitalize;"><?php echo $key->last_name.", ".$key->first_name." ".$key->middle_name  ?></td>
                          <td><?php echo $key->contact_num?></td>
                          <td><?php echo $key->cus_street?></td>
                          <td><?php echo $key->cus_city?></td>
                          <td><?php echo $key->cus_province?></td>
                          <td><?php echo $key->cus_postal?></td>                         
                            
                          <td> <a href="<?php echo base_url('courier/order_details?order='.$key->order_id); ?>" class='btn btn-sm btn-primary'>
                            <i class='fas fa-edit'>View Details</i></a>
                         </td>                            
                        </tr>

                      <?php
                  endforeach;
                  ?>
              </tbody>
            </table>
          </div>