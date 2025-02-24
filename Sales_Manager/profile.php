<?php
session_start();
include'../php/server.php';
?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Blessed-Worries</title>

    <meta name="description" content="" />

    <!-- Favicon --><link rel="icon" type="image/x-icon" href="../company_logo/eddy.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>
  <?php
if(empty($_SESSION['user_info'])){
  header('Location:../login.php');
}

?>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <?php include 'sidebar.php'; ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php include 'topbar.php'; ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <div class="alert alert-warning alert-dismissible" id="error-display-upload" style="display:none;"></div>
                <div class="alert alert-warning alert-dismissible" id="error-display-remove" style="display:none;"></div>
                <?php 
                $adminData=$_SESSION['user_info'];
$select_profile="SELECT * FROM system_users where user_id='".$adminData['user_id']."'";
$cselect_profile=$connect->prepare($select_profile);
$cselect_profile->execute();
$row_cselect_profile=$cselect_profile->fetch(PDO::FETCH_ASSOC);
                   ?>   
                <form id="Upload_form" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <div id="profile_display">
                     
                        </div>
                        <div class="button-wrapper">
                          
                          <input
                              type="file"
                              class="form-control"
                              name="profile"
                            />
                            <input type="hidden" name="user_id" value="<?php echo $row_cselect_profile['user_id']; ?>">
                            <input type="hidden" name="delete_profile_admin" value="<?php echo $row_cselect_profile['profile']; ?>">
                            <button  class="btn btn-primary me-2 mb-4 mt-2" type="submit" id="upload_admin_profile">
                            Upload Profile
                          </button>
                           </form>
                           <form id="delete_profile_form" enctype="multipart/form-data">
            <input type="hidden" name="user_id" value="<?php echo $row_cselect_profile['user_id']; ?>">
                            <input type="hidden" name="delete_profile_admin" value="<?php echo $row_cselect_profile['profile']; ?>">

                          <button type="submit" id="remove" class="btn btn-outline-secondary account-image-reset mb-4">
                            Remove Profile
                          </button>
                          </form>

                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K   </p>
                        </div>
                      </div>
                    </div>
                    <div class="nav-align-top mb-4">
                    <ul class="nav nav-tabs nav-fill" role="tablist">
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link active"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-justified-student"
                          aria-controls="navs-justified-student"
                          aria-selected="true"
                        >
                          <i class="tf-icons bx bx-user"></i>Profile
                          
                        </button>
                      </li>
                      
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-justified-password"
                          aria-controls="navs-justified-password"
                          aria-selected="false"
                        >
                          <i class="tf-icons bx bx-user"></i> Password
                        </button>
                      </li>
                    </ul>
                    <div class="tab-content">
                <div class="tab-pane fade show active" id="navs-justified-student" role="tabpanel">
                <div class="card-body">
                      <div class="alert alert-warning alert-dismissible" id="error-displays" style="display:none;"></div>
                      <?php
                       $adminData=$_SESSION['user_info'];
                      
                       $select_admin="SELECT * FROM system_users WHERE user_id='".$adminData['user_id']."'";
                       $cselect_admin=$connect->prepare($select_admin);
                       $cselect_admin->execute();
                       $row_cselect_admin=$cselect_admin->fetch(PDO::FETCH_ASSOC);
                      
                      
                      ?>
                      <form id="form_user_update" method="POST" >
                      
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label  class="form-label">First Name</label>
                            <input
                              class="form-control"
                              type="text"
                              name="first_name"
                              value="<?php echo $row_cselect_admin['first_name']?>"
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label  class="form-label">Last Name</label>
                            <input class="form-control" type="text" name="last_name" value="<?php echo $row_cselect_admin['last_name']?>">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              value="<?php echo $row_cselect_admin['email']?>"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Gender</label>
                            <select class="form-control" name="gender">
                              <option selected disabled>Select Gender</option>
                              <?php
                              $select_gender="SELECT * FROM gender";
                              $cselect_gender=$connect->prepare($select_gender);
                              $cselect_gender->execute();
                              while($row_cselect_gender=$cselect_gender->fetch(PDO::FETCH_ASSOC)){
                                if($row_cselect_admin['gender'] == $row_cselect_gender['name']){
                              ?>
                              <option selected="selected"><?php echo $row_cselect_gender['name']?></option>
                              <?php }
                              else
                              {
                              ?>
                              <option><?php echo $row_cselect_gender['name']?></option>
                              <?php
                            }
                          }
                            ?>
                            </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" >Phone Number</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                name="telephone"
                                class="form-control"
                                value="<?php echo $row_cselect_admin['telephone']?>"
                              />
                            </div>
                          </div>
                          
                          <input type="hidden" name="user_id" value="<?php echo $row_cselect_admin['user_id']?>">
                          
                          
                          
                          
                          
                          
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2" id="update_user">Update</button>
                        </div>
                      </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="navs-justified-password" role="tabpanel">
                <div class="card-body">
                      <div class="alert alert-warning alert-dismissible" id="error-display-password" style="display:none;"></div>
                      <?php
                       $adminData=$_SESSION['user_info'];
                      
                       $select_admin="SELECT * FROM system_users WHERE user_id='".$adminData['user_id']."'";
                       $cselect_admin=$connect->prepare($select_admin);
                       $cselect_admin->execute();
                       $row_cselect_admin=$cselect_admin->fetch(PDO::FETCH_ASSOC);

                      ?>
                      <form id="admin_update_password" method="POST" >
                      
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label  class="form-label">Current Password</label>
                            <input
                              class="form-control"
                              type="password"
                              name="current_password"
                             
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label  class="form-label">New Password</label>
                            <input class="form-control" type="password" name="new_password" >
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Confirm Password</label>
                            <input
                              class="form-control"
                              type="password"
                              name="confirm_password"
                              
                            />
                          </div>
                          </div>
                          
                          <input type="hidden" name="user_id" value="<?php echo $row_cselect_admin['user_id']?>">
                          
                          <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2" id="update_password">Update Password</button>
                        </div>
                      </form>
                          
                          
                          
                          
                        </div>
                </div>
              
                    <hr class="my-0" />
                    
                    <!-- /Account -->
                  </div>
                
                <!-- Total Revenue -->
                
                <!--/ Total Revenue -->
                
              </div>
              
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  copyright©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  
                  
                </div>
                
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>
    <script>
  $(document).ready(function () {
fetch();
   }); 

  function fetch(){
      const queryString=window.location.search;
    $.ajax({ 
           url:'../php/user-display-profile.php',
            type:'GET',
            data:queryString,
             // beforeSend: function () {
             //        $('#Refresh').show();
             //    },
            success: function(data) {
                $('#profile_display').html(data);

            },
     });
};
$(document).ready(function () {
          $("#admin_update_password").validate({
            rules: {
              current_password: {
                    required: true,
                },
                new_password: {
                    required: true,
                },
                confirm_password: {
                    required: true,
                },
               
            //   terms: {
            //     required: true
            //   },
            },
            messages: {
              current_password: {
                    required: "",
                },
                new_password:{
                    required: "",
                },
                confirm_password:{
                    required: "",
                },
                
              
            //   terms: "Please accept our terms"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
              error.addClass('invalid-feedback');
              element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
              $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
              $(element).removeClass('is-invalid');
            },


              submitHandler: function () {
             var f = $("#admin_update_password")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/update_user_account_password.php',
                type: 'post',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#update_password').html('Progress <i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#update_password').attr("disabled", true);
                },
              success: function(dataResult){
                if(dataResult == 1){
                  $("#error-display-password").show();
                  $("#error-display-password").removeClass('alert-success');
                  $("#error-display-password").addClass('alert-success');
                  $("#error-display-password").html("Password Changed successfully");
                }else if(dataResult == 2){
                  $("#error-display-password").show();
                  $("#error-display-password").removeClass('alert-warning');
                  $("#error-display-password").addClass('alert-warning');
                  $("#error-display-password").html("Password Failed to Update");
                }
                else{
                  $("#error-display-password").show();
                  $("#error-display-password").removeClass('alert-danger');
                  $("#error-display-password").addClass('alert-warning');
                  $("#error-display-password").html("Incorrect Password");
                }

              },
                 complete: function () {
                    setTimeout(function () {
                        // $("form[name='loginform']").trigger("reset");
                        $('#update_password').html('Update Password');
                        $('#update_password').attr("disabled", false);
                    }, 200);
                },


            });

}

});
        });
        $(document).ready(function () {
          $("#form_user_update").validate({
            rules: {
                first_name:{
                    required: true,
                },
                last_name:{
                    required: true,
                },
                gender:{
                    required: true,
                },
                telephone:{
                    required: true,
                },
                email:{
                    required: true,
                },
                
                
                
            },
            messages: {
                first_name:{
                    required: "",
                },
                last_name:{
                    required: "",
                },
                gender:{
                    required: "",
                },
                telephone:{
                    required: "",
                },
                email:{
                    required: "",
                },
                
                

            //   terms: "Please accept our terms"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
              error.addClass('invalid-feedback');
              element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
              $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
              $(element).removeClass('is-invalid');
            },


              submitHandler: function () {
             var f = $("#form_user_update")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/user_update_profile.php',
                type: 'post',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#update_user').html('Updating Profile<i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#update_user').attr("disabled", true);
                },
              success: function(dataResult){
                alert(dataResult);
                if(dataResult == 1){
                  $("#error-display").show();
                  $("#error-display").removeClass('alert-success');
                  $("#error-display").addClass('alert-warning');
                  $("#error-display").html("email already exists");
                
                }
                else if(dataResult == 2){
                  $("#error-display").show();
                  $("#error-display").removeClass('alert-success');
                  $("#error-display").addClass('alert-success');
                  $("#error-display").html("Profile Well Updated");
                
                }
                else {
                  $("#error-display").show();
                  $("#error-display").removeClass('alert-success');
                  $("#error-display").addClass('alert-danger');
                  $("#error-display").html("Profile Failed To Be Update !!");

                }
                
                

              },
               
                 complete: function () {
                    setTimeout(function () {
                        // $("form[name='loginform']").trigger("reset");
                        $('#update_user').html('Update Profile');
                        $('#update_user').attr("disabled", false);
                    }, 200);
                },


            });

}

});
        });

        $(document).ready(function () {
          $("#Upload_form").validate({
            rules: {
                profile:{
                    required: true,
                },
                
            },
            messages: {
                profile:{
                    required: "",
                },
                
               
            //   terms: "Please accept our terms"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
              error.addClass('invalid-feedback');
              element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
              $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
              $(element).removeClass('is-invalid');
            },


              submitHandler: function () {
             var f = $("#Upload_form")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/user_upload_profile.php',
                type: 'post',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#upload_admin_profile').html('Uploading Profile<i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#upload_admin_profile').attr("disabled", true);
                },
              success: function(dataResult){
                alert(dataResult);
                if(dataResult == 1){
                  $("#error-display-upload").show();
                  $("#error-display-upload").removeClass('alert-success');
                  $("#error-display-upload").addClass('alert-warning');
                  $("#error-display-upload").html("Profile Well Uploaded.");
                  fetch();
                }
                else {
                  $("#error-display-upload").show();
                  $("#error-display-upload").removeClass('alert-success');
                  $("#error-display-upload").addClass('alert-danger');
                  $("#error-display-upload").html("Profile Failed To Be Uploaded !!");
                  fetch();
                }
                
                

              },
               
                 complete: function () {
                    setTimeout(function () {
                        // $("form[name='loginform']").trigger("reset");
                        $('#upload_admin_profile').html('Upload Profile');
                        $('#upload_admin_profile').attr("disabled", false);
                    }, 200);
                },


            });

}

});
        });

$(document).ready(function () {
          $("#delete_profile_form").validate({
            rules: {
                delete_profile_admin:{
                    required: true,
                },
                
            },
            messages: {
                delete_profile_admin:{
                    required: "",
                },
                
               
            //   terms: "Please accept our terms"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
              error.addClass('invalid-feedback');
              element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
              $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
              $(element).removeClass('is-invalid');
            },


              submitHandler: function () {
             var f = $("#delete_profile_form")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/user_delete_uploaded_profile.php',
                type: 'post',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#remove').html('Removing Profile<i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#remove').attr("disabled", true);
                },
              success: function(dataResult){
                if(dataResult == 1){
                  $("#error-display-remove").show();
                  $("#error-display-remove").removeClass('alert-success');
                  $("#error-display-remove").addClass('alert-warning');
                  $("#error-display-remove").html("Profile Well Removed");
                  fetch();
                }
                else {
                  $("#error-display-remove").show();
                  $("#error-display-remove").removeClass('alert-success');
                  $("#error-display-remove").addClass('alert-danger');
                  $("#error-display-remove").html("Profile Failed To Be Removed !!");
                  fetch();
                }
                
                

              },
               
                 complete: function () {
                    setTimeout(function () {
                        // $("form[name='loginform']").trigger("reset");
                        $('#remove').html('Remove Profile');
                        $('#remove').attr("disabled", false);
                    }, 200);
                },


            });

}

});
        });
        
     
</script>
  </body>
</html>
