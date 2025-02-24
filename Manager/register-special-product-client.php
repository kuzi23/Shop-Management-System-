<?php
session_start();
include'../php/server.php';
?>
<script>
  function show_accessories_type(str){
    if (str == '') {
      document.getElementById("display_Accessories_types").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("display_Accessories_types").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_accessories_type.php?ac_id="+str ,true);
       xmlhttp.send();
       

    }
  }
</script>
<script>
  function show_accessories_sub_type(str){
    if (str == '') {
      document.getElementById("display_Accessories_sub_type").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("display_Accessories_sub_type").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_accessories_sub_type.php?act_id="+str ,true);
       xmlhttp.send();
       

    }
  }
</script>
<script>
  function show_accessories_type1(str){
    if (str == '') {
      document.getElementById("display_Accessories_types1").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("display_Accessories_types1").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_accessories_type1.php?ac_id="+str ,true);
       xmlhttp.send();
       

    }
  }
</script>
<script>
  function show_accessories_sub_type1(str){
    if (str == '') {
      document.getElementById("display_Accessories_sub_type1").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("display_Accessories_sub_type1").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_accessories_sub_type1.php?act_id="+str ,true);
       xmlhttp.send();
       

    }
  }
</script>
<script>
  function open_price_per(str){
    if (str == '') {
      document.getElementById("price_per_dispay").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("price_per_dispay").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_accessories_purchase_priceper.php?quantity="+str ,true);
       xmlhttp.send();
       

    }
  }
</script>
<script>
  function open_price_per1(str){
    if (str == '') {
      document.getElementById("price_per_dispay1").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("price_per_dispay1").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_accessories_purchase_priceper1.php?quantity="+str ,true);
       xmlhttp.send();
       

    }
  }
</script>
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

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../company_logo/eddy.png" />

    <!-- Fonts -->
   

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

   <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page CSS -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
  <?php 
  if (empty($_SESSION['user_info'])){
     header("location:../login.php");
  } ?>
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
              

              <!-- Bootstrap modals -->
              <div class="card mb-4">
                <h5 class="card-header">Register Special Client</h5>
                <div class="card-body">
                  <div class="row gy-3">
                    <!-- Default Modal -->
                    <div class="col-lg-4 col-md-6">
                      <div >
                        <!-- Button trigger modal -->
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#basicModal"
                        >
                          Click To Register
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1"> Special Clients</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="alert alert-secondary" role="alert" id="error-display" style="display:none;"></div>
                                <form method="POST" id="special_client_register">
                                    <div class="row">
                                    <div class="col-md-6" >
                                    <div class="col mb-3">
                                    <label for="nameBasic"  class="form-label">First name</label>
                                    <input type="text" name="fullname" class="form-control" >
                                  </div>
                                    </div>
                                        <div class="col-md-6">
                                        <div class="col mb-3">
                                    <label for="nameBasic"  class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" >
                                  </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="col mb-3">
                                    <label for="nameBasic"  class="form-label">Telphone</label>
                                    <input type="text" name="phone_number" class="form-control" >
                                  </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="col mb-3">
                                    <label for="nameBasic"  class="form-label">Company Name</label>
                                    <input type="text" name="company_name" class="form-control" >
                                  </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        
                                        </div>
                                        <div class="col-md-6">
                                        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        
                                </div>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                
                                
                              
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" id="register_special_client" class="btn btn-primary">Register</button>
                              </div>
                            </form>
                            </div>
                            </div>
                          </div>
                        </div>
                        

                         <div class="modal fade" id="myModalUpdateclient" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Accessories Purchased Detail</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
    <div class="alert alert-secondary" role="alert" id="error-displays" style="display:none;"></div>
    
                        <form method="POST" id="form_special_client_update" enctype="multipart/form-data">

                          </form>  
                              </div>
                            
                            </div>
                          </div>
                        </div>




                      </div>
                    </div>
                    

                    
                    
                  </div>
                
                
                
              </div>


              <!--/ Bootstrap modals -->
            </div>
                
                <div class="card" id="client_display">
                  
              </div>  
                
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
    


    

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>


    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

  
    <script src="../assets/js/dashboards-analytics.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
fetch();
show_code();
   });   

    function fetch(){
      const queryString=window.location.search;
    $.ajax({ 
           url:'../php/manager-display-special-client.php',
            type:'GET',
            data:queryString,
             // beforeSend: function () {
             //        $('#Refresh').show();
             //    },
            success: function(data) {
                $('#client_display').html(data);

            },
     });
};

     function update_clients(data){
        $.ajax({
                url: '../php/manager-update-special-client-form.php',
                type: 'POST',
                data: {
                  data:data
                },
              success: function(dataResult){
             $('#form_special_client_update').html(dataResult);

              },
               
            });
     
     };

     function delete_speciail_client(data){
        $.ajax({
                url: '../php/manager_delete_special_client.php',
                type: 'POST',
                data: {
                  data:data
                },
              dataType:"json",
              beforeSend:function(){

                return confirm('Are You Sure You Want To Delete This Client?');
              },
              success: function(dataResult){

                if (dataResult == 1) {
                  fetch();
                  show_code();
                }
                else
                {
                  fetch();
                  show_code();
                }
           

              },
              

            });
     };
</script>
<script>
        $(document).ready(function () {
          $("#form_special_client_update").validate({
            rules: {
                fullname:{
                    required: true,
                },
                email:{
                    required: true,
                },
                phone_number:{
                    required: true,
                },
                company_name:{
                    required: true,
                },
                
                
                
            },
            messages: {
                fullname:{
                    required: "",
                },
                email:{
                    required: "",
                },
                phone_number:{
                    required: "",
                },
                company_name:{
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
             var f = $("#form_special_client_update")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/manager_update_special_client.php',
                type: 'post',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#update_special_client_button').html('Updating<i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#update_special_client_button').attr("disabled", true);
                },
              success: function(dataResult){
                 if(dataResult == 1){
                  $("#error-displays").show();
                  $("#error-displays").removeClass('alert-success');
                  $("#error-displays").addClass('alert-warning');
                  $("#error-displays").html("Email Already Taken!!");
                  fetch();
                }
                else if(dataResult == 2){
                  $("#error-displays").show();
                  $("#error-displays").removeClass('alert-success');
                  $("#error-displays").addClass('alert-success');
                  $("#error-displays").html("Cleint  Well Updated!!");
                  fetch();
                }
                else {
                  $("#error-displays").show();
                  $("#error-displays").removeClass('alert-success');
                  $("#error-displays").addClass('alert-danger');
                  $("#error-displays").html("Cleint Failed To Be Updated !!");
                  fetch();
                }
                

              },
               
                 complete: function () {
                    setTimeout(function () {
                        $('#update_special_client_button').html('Update ');
                        $('#update_special_client_button').attr("disabled", false);
                    }, 200);
                },


            });

}

});
        });
     
</script>
        <script>
        $(document).ready(function () {
          $("#special_client_register").validate({
            rules: {
                fullname:{
                    required: true,
                },
                email:{
                    required: true,
                },
                phone_number:{
                    required: true,
                },
                company_name:{
                    required: true,
                },
                
                
                
            },
            messages: {
                fullname:{
                    required: "",
                },
                email:{
                    required: "",
                },
                phone_number:{
                    required: "",
                },
                company_name:{
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
             var f = $("#special_client_register")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/manager-regsiter-special-client.php',
                type: 'post',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#register_special_client').html('Registering  <i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#register_special_client').attr("disabled", true);
                },
              success: function(dataResult){
                if(dataResult == 1){
                  $("#error-display").show();
                  $("#error-display").removeClass('alert-success');
                  $("#error-display").addClass('alert-warning');
                  $("#error-display").html("Client Already Exist !!");
                }
                else if(dataResult== 2){
                  $("#error-display").show();
                  $("#error-display").removeClass('alert-warning');
                  $("#error-display").addClass('alert-success');
                  $("#error-display").html("Client Well Recorded !!");
                  fetch();
                }
                else {
                  $("#error-display").show();
                  $("#error-display").removeClass('alert-success');
                  $("#error-display").addClass('alert-danger');
                  $("#error-display").html("Client Failed To Be Recorded!!");
                  fetch();
                }
                

              },
                 complete: function () {
                    setTimeout(function () {
                        // $("form[name='loginform']").trigger("reset");
                        $('#register_special_client').html('Register');
                        $('#register_special_client').attr("disabled", false);
                    }, 200);
                },


            });

}

});
        });
     
</script>
  </body>
</html>
