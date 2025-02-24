<?php
include 'php/connection.php';

?>
<!DOCTYPE html>
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    /> 

    <title>Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="#" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="#" class="app-brand-link gap-2">
                  
                  <span class="app-brand-text demo text-body fw-bolder">#</span>
                </a>
              </div>
              <!-- /Logo -->
              
<div id="error-display" class="alert alert-dismissible alert-warning " style="display:none;"></div>
              <form id="user_login_form" class="mb-3" method="POST">
                <div class="mb-3">
                  <label class="form-label">Email or Username</label>
                  <input
                    type="text"
                    class="form-control"
                    name="email"
                    placeholder="Enter your email"
                    
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="forget_password.php">
                      <small>Forgot Password?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      
                      class="form-control"
                      name="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit" id="login_button">Sign in</button>
                </div>
              </form>
              <a href="index.php">Back To Blessed Web</a>

              
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <script src="assets/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
        $(document).ready(function () {
          $("#user_login_form").validate({
            rules: {
                email:{
                    required: true,
                },
               
                password:{
                  required: true,
                },
            //   terms: {
            //     required: true
            //   },
            },
            messages: {
               email:{
                    required: "",
                },
                password:{
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
             var f = $("#user_login_form")[0];
              var form = new FormData(f);
              $.ajax({
                url: 'php/user_login.php',
                type: 'post',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#login_button').html('Login  <i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#login_button').attr("disabled", true);
                },
                success: function(dataResult){
                var resl = JSON.parse(dataResult);
                // console.log(dataResult);
                  if(resl[0][0] == 'success'){
                    // console.log(resl[0][1])
                    window.location.href=resl[0][1];
                    // console.log(resl[0][1]);
                  }
                  else{
                    $("#error-display").html(resl[0][1]);

                    $("#error-display").addClass('alert-warning');
                    $("#error-display").show();
                  } 
                 



              },
                 complete: function () {
                    setTimeout(function () {
                        // $("form[name='loginform']").trigger("reset");
                        $('#login_button').html('Login <i class="fas fa-sign-in-alt" ></i>');
                        $('#login_button').attr("disabled", false);
                    }, 200);
                },


            });

}

});
        });
     
</script>
  </body>
</html>
