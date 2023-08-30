             
                    
          <!-- ======================================================= Start Of Delete Modal =========================================================== -->

                    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                      <div class="modal-dialog  modal-md">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="updateModalLabel"> View Registered Account</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <div class="card-body">
                                    
                              <?php
                                // $data = new class_view();
                                $userdata = $data->view($userid);

                                if ($userdata) {
                                  foreach($userdata as $rows) {

                                 
                                ?>

                                   <h4>Name: <?php echo $fullname = $rows['firstname']." ".$rows['surename']." ".$rows['lastname'] ?></h4> 
                                   <h4>UserName: <?php  echo  $rows['username'] ?></h4> 
                                   <h4>Email: <?php echo  $rows['email'] ?></h4> 
                                   <h4>Password: <?php echo  $rows['password'] ?></h4> 
                                   <h4>Usertype: <?php echo  $rows['usertype'] ?></h4>

                                <?php
                                 }
                                }
                                else {
                                  echo '<div class="alert alert-danger alert-dismissible fade show col-md-12 mb-3" role="alert">
                                  <h6>No data found</h6>
                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div>';
                                }
                              ?>
                                 
                              </div>
                              <div class="card-footer">
                                <button type="submit" class="btn btn-block btn-primary btn-lg" >Delete</button>
                              </div>
                            </div> 
                          </div>
                      </div>
                    </div>

           <!-- ======================================================= End Of Delete Modal =========================================================== -->
                    