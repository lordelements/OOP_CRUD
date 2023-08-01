<?php 
     require_once 'includes/header.php';
     $pageTitle = "ADMIN PANEL";
?>

 <!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="d-xl-flex justify-content-between align-items-start">
              <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
              <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
                <div class="btn-group bg-white p-3" role="group" aria-label="Basic update">
                  <button type="button" class="btn btn-link text-gray py-0 border-right">7 Days</button>
                  <button type="button" class="btn btn-link text-dark py-0 border-right">1 Month</button>
                  <button type="button" class="btn btn-link text-gray py-0">3 Month</button>
                </div>
                <div class="dropdown ms-0 ml-md-4 mt-2 mt-lg-0">
                  <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-calendar me-1">
                  </i>24 Mar 2019 - 24 Mar 2019 </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                    <h6 class="dropdown-header">Settings</h6>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                  <ul class="nav nav-tabs tab-transparent" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="business-tab" data-bs-toggle="tab" href="#business-1" role="tab" aria-selected="false">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="users-tab" data-bs-toggle="tab" href="#users" role="tab" aria-selected="true">Users</a>
                    </li>
                  </ul>
                  <div class="d-md-block d-none">
                    <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                    <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                  </div>
                </div>
                <div class="tab-content tab-transparent-content">
                  <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Orders</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">932.00</h2>
                            <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">Completed</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">5443</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Unique Visitors</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">756,00</h2>
                            <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">Increased since yesterday</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">50%</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Impressions</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">100,38</h2>
                            <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">Increased since yesterday</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Followers</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">4250k</h2>
                            <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">Decreased since yesterday</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">25%</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="row">
                      <div class="col-12 grid-margin">
                        <div class="card">
                          <div class="card-body">
                            <div class="row">
                              <table class="table table-dark table-striped">
                                <thead>
                                  <tr>
                                      <th  scope="col">#</th>
                                      <th  scope="col">Fullname</th>
                                      <th  scope="col">Email</th>
                                      <th  scope="col">Password</th>
                                      <th  scope="col">Actions</th>
                                  </tr>
                                </thead>

                                <?php 
                                  session_start();
                                  require_once '../private/functions.php';
                                    
                                    if (isset($_GET['deleteid'])) {
                                      $deluserid = $_GET['deleteid'];
                                      $del = new class_delete();
                                      $del->deleteuser($deluserid);
                                      if ($del) {
                                        header('location:public/index.php');
                                      }else{
                                        echo "Error ";
                                      }
                                  }//deleete data 
                                
                                    $record = $data->display_userlist();
                                    $users = 1;
                                    foreach($record as $rows) : 
                                ?>

                                <tbody>
                                 <tr>
                                    <td><?php echo $users++ ?></td>
                                    <td><p><?php echo $fullname = $rows['firstname']." ".$rows['surename']." ".$rows['lastname'] ?></p></td>
                                    <td><p><?php echo  $rows['email'] ?></p></td>
                                    <td><p><?php echo  $rows['password'] ?></p></td>
                                    <td>
                                     <a  class="btn btn-success" href="edituser.php? userid= <?php echo  $rows['id'] ?>"><i class="fa fa-edit"></i></a>
                                     <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this entry?')"
                                      href="? deleteid= <?php echo  $rows['id'] ?>">
                                          <i class="fa fa-trash"></i></a>
                                      <a class="btn btn-primary" href="viewuser.php? viewuserid= <?php echo  $rows['id'] ?>">
                                      <i class="fa fa-eye"></i></a>
                                    </td>
                                 </tr>
                                 <?php endforeach; ?>
                                </tbody>
                                
                                </li>

                              </table>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->
                  
                  </div>

                  <div class="tab-pane fade show active" id="users" role="tabpanel" aria-labelledby="users-tab">
                   
                    <div class="row">
                      <div class="col-12 grid-margin">
                        <div class="card">
                          <div class="card-body">
                            <div class="row">
                              <table class="table table-dark table-striped">
                                <thead>
                                  <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Fullname</th>
                                      <th scope="col">Username</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Password</th>
                                      <th scope="col">Usertype</th>
                                      <th scope="col">Actions</th>
                                  </tr>
                                </thead>

                                <?php 
                                  // require_once '../private/functions.php';
                                    
                                    if (isset($_GET['deleteid'])) {
                                      $deluserid = $_GET['deleteid'];
                                      $del = new class_delete();
                                      $del->deleteuser($deluserid);
                                      if ($del) {
                                        $_SESSION["alert_msg"] = '<div class="alert alert-success alert-dismissible fade show col-md-12 mb-3" role="alert">
                                          Record is deleted successfully
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                                        
                                      }else{
                                        $_SESSION["alert_msg"] = '<div class="alert alert-danger alert-dismissible fade show col-md-12 mb-3" role="alert">
                                        <strong>Hey!</strong> Woops! Failed to delete record!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                                        
                                      }
                                  }//delete userdata 

                                    $record = $data->display_userlist();//display data into table
                                    $users = 1;
                                    foreach($record as $rows) : 
                                ?>

                                <tbody>
                                 <tr>
                                    <td><?php echo $users++ ?></td>
                                    <td><p><?php echo $fullname = $rows['firstname']." ".$rows['surename']." ".$rows['lastname'] ?></p></td>
                                    <td><p><?php echo  $rows['username'] ?></p></td>
                                    <td><p><?php echo  $rows['email'] ?></p></td>
                                    <td><p><?php echo  $rows['password'] ?></p></td>
                                    <td><p><?php echo  $rows['usertype'] ?></p></td>
                                    <td>
                                     <!-- <a  class="btn btn-success" href="update.php? userid= <?= $rows['id'] ?>"> -->
                                     <a  class="btn btn-success" href="? userid= <?= $rows['id'] ?>" 
                                     data-bs-toggle="modal" data-bs-target="#updateModal">
                                     <i class="fa fa-edit"></i></a>

                                     <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this entry?')"
                                      href="? deleteid= <?php echo  $rows['id'] ?>">
                                          <i class="fa fa-trash"></i></a>
                                    </td>
                                 </tr>
                                 <?php endforeach; ?>
                                </tbody>
                                
                                </li>

                              </table>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                    
          <!-- ======================================================= Start Of Update Modal =========================================================== -->

                    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                      <div class="modal-dialog  modal-md">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="updateModalLabel">Update Registered Account</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="card-body">
                    
                                  <?php
                                    // require_once '../private/functions.php';   
                                    
                                    // Edit student record in registrationform
                                    if(isset($_GET['userid']) && !empty($_GET['userid'])) {
                                      $userid = $_GET['userid'];
                                      $fetchdata = new class_updatesingledata();
                                      $userdata = $fetchdata->fetchSingleuserById($userid);
                                    }
                                    // Update Record in registrationform table
                                    if(isset($_POST['update'])) {
                                      $fetchdata = new class_update_userdata();
                                      $fetchdata->updateuserRecord($_POST);
                                    }  

                                    
                                  ?>

                                  <form actions="" method="post">
                                      <div class="col-md-12 mb-4">
                                          <label for="updateInputFirstname" class="form-label">First Name</label>
                                          <input type="text" class="form-control form-control-sm"
                                              name="firstname" id="updateInputFirstname" 
                                              placeholder="Enter your Firstname" autocomplete="off"
                                              value="<?php echo $userdata['firstname']; ?>">
                                      </div>
                                      <div class="col-md-12 mb-4">
                                          <label for="updateInputSurename" class="form-label">SureName</label>
                                          <input type="text" class="form-control form-control-sm"
                                              name="surename" id="updateInputSurename"
                                              placeholder="Enter your Surename" autocomplete="off"
                                                value="<?php echo $userdata['surename']; ?>">
                                      </div>
                                      <div class="col-md-12 mb-3">
                                          <label for="updateInputLastname" class="form-label">Last Name</label>
                                          <input type="text" class="form-control form-control-sm"
                                              name="lastname" id="updateInputLastname" 
                                              placeholder="Enter your Lastname" autocomplete="off"
                                              value="<?php echo $userdata['lastname']; ?>">
                                      </div>
                                      <div class="col-md-12 mb-3">
                                          <label for="updateInputEmail1" class="form-label">Username</label>
                                          <input type="text" class="form-control form-control-sm"
                                              name="username" id="updateInputUsername"
                                              placeholder="Enter your Username" autocomplete="off"
                                                value="<?php echo $userdata['username']; ?>">
                                      </div>
                                      <div class="col-md-12 mb-3">
                                          <label for="updateInputEmail1" class="form-label">Email</label>
                                          <input type="email" class="form-control form-control-sm"
                                              name="email" id="updateInputEmail1"
                                              placeholder="Enter your Email" autocomplete="off"
                                                value="<?php echo $userdata['email']; ?>">
                                      </div>
                                      <div class="col-md-12 mb-3">
                                          <label for="updateInputPassword1" class="form-label">Password</label>
                                          <input type="password" class="form-control form-control-sm" 
                                          name="password" id="updateInputPassword1" 
                                          placeholder="Password" autocomplete="off"
                                          value="<?php echo $userdata['password']; ?>">
                                      </div>
                                      <div class="col-md-12 mb-3">
                                          <label for="updateInputPassword1" class="form-label">Confirm Password</label>
                                          <input type="password" class="form-control form-control-sm"
                                          name="cpassword" id="updateInputPassword1" 
                                          placeholder="Confrim Password" autocomplete="off"
                                          value="<?php echo $userdata['password']; ?>">
                                      </div>
                                      <div class="col-md-12 mb-3">
                                          <label class="form-label">Usertype</label>
                                          <select class="form-control form-control-sm" name="usertype" id="usertype">
                                            <option value="<?php echo $userdata['usertype']; ?>" >Select Options</option>
                                            <option value="staff">Staff</option>
                                            <option value="administrator">Admin</option>
                                            <label for="Usertype">Usertype</label>
                                        </select>
                                      </div>
                                      <div class="modal-footer">
                                        <input type="hidden" name="id" value="<?php echo $userdata['id']; ?>">
                                        <input type="submit" name="update" class="btn btn-block btn-primary btn-lg " value="UPDATE">
                                      </div>
                                  </form>
                              </div>
                           
                            
                            </div> 
                          </div>
                      </div>
                    </div>

           <!-- ======================================================= End Of Update Modal =========================================================== -->
                    
                  </div>

                </div>
              </div>
            </div>
          </div>

          
    <?php include_once 'includes/footer.php'; ?>

