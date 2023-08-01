            
        
     
        <!-- ======================================================= Start Of Update Modal =========================================================== -->
           
        <div class="tab-pane fade show active" id="users" role="tabpanel" aria-labelledby="users-tab">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    
                            <?php
                              require_once '../private/functions.php';   
                              
                              // Update Record in registrationform table
                              if(isset($_POST['update'])) {
                                $fetchdata = new class_update_userdata();
                                $fetchdata->updateuserRecord($_POST);
                              }  

                                
                              // Edit student record in registrationform
                              if(isset($_GET['userid']) && !empty($_GET['userid'])) {
                                $userid = $_GET['userid'];
                                $fetchdata = new class_updatesingledata();
                                $userdata = $fetchdata->fetchSingleuserById($userid);
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
            </div>
                       

           <!-- ======================================================= End Of Update Modal =========================================================== -->
        
           <?php include('./includes/header.php');?>