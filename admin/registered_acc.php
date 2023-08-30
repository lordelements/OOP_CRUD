<?php
  require_once '../private/functions.php';
  $pageTitle = "ADMIN PANEL";
  session_start();
?>


<?php require_once 'includes/header.php'; ?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="d-xl-flex justify-content-between align-items-start">
      <h2 class="text-dark font-weight-bold mb-2"> Users Account dashboard </h2>
      <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
        <div class="btn-group bg-white p-3" role="group" aria-label="Basic update">
          <input type="datetime-local" name="" id="">
        </div>
        <div class="dropdown ms-0 ml-md-4 mt-2 mt-lg-0">
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
        <div class="tab-content tab-transparent-content">
          <div class="tab-pane fade show active" id="users" role="tabpanel" aria-labelledby="users-tab">
            <div class="row">

              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <!-- Search Panel -->
                      <div class="search-field d-none d-xl-block">
                        <form class="d-flex align-items-center" action="#" method="$_POST">
                          <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                              <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input type="text" name="search" class="form-control bg-transparent border-0" placeholder="Search here...">
                          </div>
                        </form>
                      </div>

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
                        require_once '../private/functions.php';

                        if (isset($_GET['deleteid'])) {
                          $deluserid = $_GET['deleteid'];
                          // $del = new class_delete();
                          $del->deleteuser($deluserid);
                          if ($del) {
                            $_SESSION["alert_msg"] = '<div class="alert alert-success alert-dismissible fade show col-md-12 mb-3" role="alert">
                                          Record is deleted successfully
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                          } else {
                            $_SESSION["alert_msg"] = '<div class="alert alert-danger alert-dismissible fade show col-md-12 mb-3" role="alert">
                                        <strong>Hey!</strong> Woops! Failed to delete record!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                          }
                        } //delete userdata 

                        $record = $data->display_userlist(); //display data into table
                        $users = 1;
                        if ($record) {
                          foreach ($record as $rows) {

                        ?>

                            <tbody>
                              <tr>
                                <td><?php echo $users++ ?></td>
                                <td>
                                  <p><?php echo $fullname = $rows['firstname'] . " " . $rows['surename'] . " " . $rows['lastname'] ?></p>
                                </td>
                                <td>
                                  <p><?php echo  $rows['username'] ?></p>
                                </td>
                                <td>
                                  <p><?php echo  $rows['email'] ?></p>
                                </td>
                                <td>
                                  <p><?php echo  $rows['password'] ?></p>
                                </td>
                                <td>
                                  <p><?php echo  $rows['usertype'] ?></p>
                                </td>
                                <td>
                                  <a  class="btn btn-success" href="update.php? userid= <?= $rows['id'] ?>"><i class="fa fa-edit"></i></a>
                                  <!-- <a class="btn btn-success" href="? userid= <?= $rows['id'] ?>" data-bs-toggle="modal" data-bs-target="#updateModal">
                                    <i class="fa fa-edit"></i></a> -->

                                  <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this entry?')" href="? deleteid= <?php echo  $rows['id'] ?>">
                                    <i class="fa fa-trash"></i></a>

                                  <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewModal" href="? viewuserid= <?php echo  $rows['id'] ?>">
                                    <i class="fa fa-eye"></i></a>
                                </td>
                              </tr>

                            </tbody>

                        <?php
                          }
                        } else {
                          echo '<div class="alert alert-danger alert-dismissible fade show col-md-12 mb-3" role="alert">
                                      <h6>No data found</h6>
                                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>';
                        }

                        ?>

                        </li>

                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- ======================================================= Start Of Update Modal =========================================================== -->
            <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Update Registered Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="card-body">
                        <?php   
                          require_once '../class/class_updatesingledata.php';
                          require_once '../class/class_update_userdata.php';
                        
                        if (isset($_GET['userid']) && !empty($_GET['userid'])) { // Edit student record in registrationform
                          $edituserid = $_GET['userid'];
                          $singledata = new class_updatesingledata();
                          $userdata = $singledata->fetchSingleuserById($edituserid);
                        }
                        ?>
                          <form actions="" method="post">
                            <div class="col-md-12 mb-2">
                              <!-- <label for="updateInputFirstname" class="form-label">First Name</label> -->
                              <input type="text" class="form-control form-control-sm" name="firstname" id="updateInputFirstname" placeholder="Enter your Firstname" autocomplete="off" value="<?php echo $userdata['firstname']; ?>">
                            </div>
                            <div class="col-md-12 mb-2">
                              <!-- <label for="updateInputSurename" class="form-label">SureName</label> -->
                              <input type="text" class="form-control form-control-sm" name="surename" id="updateInputSurename" placeholder="Enter your Surename" autocomplete="off" value="<?php echo $userdata['surename']; ?>">
                            </div>
                            <div class="col-md-12 mb-2">
                              <!-- <label for="updateInputLastname" class="form-label">Last Name</label> -->
                              <input type="text" class="form-control form-control-sm" name="lastname" id="updateInputLastname" placeholder="Enter your Lastname" autocomplete="off" value="<?php echo $userdata['lastname']; ?>">
                            </div>
                            <div class="col-md-12 mb-2">
                              <!-- <label for="updateInputEmail1" class="form-label">Username</label> -->
                              <input type="text" class="form-control form-control-sm" name="username" id="updateInputUsername" placeholder="Enter your Username" autocomplete="off" value="<?php echo $userdata['username']; ?>">
                            </div>
                            <div class="col-md-12 mb-2">
                              <!-- <label for="updateInputEmail1" class="form-label">Email</label> -->
                              <input type="email" class="form-control form-control-sm" name="email" id="updateInputEmail1" placeholder="Enter your Email" autocomplete="off" value="<?php echo $userdata['email']; ?>">
                            </div>
                            <div class="col-md-12 mb-2">
                              <!-- <label for="updateInputPassword1" class="form-label">Password</label> -->
                              <input type="password" class="form-control form-control-sm" name="password" id="updateInputPassword1" placeholder="Password" autocomplete="off" value="<?php echo $userdata['password']; ?>">
                            </div>
                            <div class="col-md-12 mb-2">
                              <!-- <label for="updateInputPassword1" class="form-label">Confirm Password</label> -->
                              <input type="password" class="form-control form-control-sm" name="cpassword" id="updateInputPassword1" placeholder="Confrim Password" autocomplete="off" value="<?php echo $userdata['password']; ?>">
                            </div>
                            <div class="col-md-12 mb-2">
                              <!-- <label class="form-label">Usertype</label> -->
                              <select class="form-control form-control-sm" name="usertype" id="usertype">
                                <option value="<?php echo $userdata['usertype']; ?>">Select Options</option>
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
                        <?php   
                             // Update Record in registrationform table
                             if (isset($_POST['update'])) {
                              $fetchdata = new class_update_userdata();
                              $fetchdata->updateuserRecord($_POST);
                            }
                        ?>
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