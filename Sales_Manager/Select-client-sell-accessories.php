<?php
session_start();
include'../php/server.php';
?>

<script>
  function open_special_detail(str){
    if (str == '') {
      document.getElementById("show_special_detail").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("show_special_detail").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_special_client_detail.php?spc_id="+str ,true);
       xmlhttp.send();
       

    }
  }
</script>
<script>
  function show_clients_a(str){
    if (str == '') {
      document.getElementById("display_client").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("display_client").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_show_client_categories_a.php?categorie="+str ,true);
       xmlhttp.send();
       

    }
  }
</script>
<script>
  function show_mode_account(str){
    if (str == '') {
      document.getElementById("mode_pay_account").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("mode_pay_account").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/mode_of_payment_account.php?m_id="+str ,true);
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
                <h5 class="card-header">Client</h5>
                <div class="container">
                    <form id="client_procced_accessories" method="POST">
                <div class="row">
                    <div class="col-md-3">
                        <label>Client Categories</label>
                        <select name="categorie" class="form-control" onclick="show_clients_a(this.value)">
                            <option selected disabled>Client Categories</option>
                            <option value="New">New Client</option>
                            <option value="Special">Special Client</option>
                        </select>
                    </div>
                    <div class="col-md-9">
                        <div id="display_client">

                        </div>
                    </div>
                </div>
                </form>
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
    $("#client_procced_accessories").validate({
        rules: {
            categorie: {
                required: true
            },
            fullname: {
                required: true
            },
            phone_number: {
                required: true
            },
            spc_id: {
                required: true
            }
        },
        messages: {
            categorie: {
                required: ""
            },
            fullname: {
                required: ""
            },
            phone_number: {
                required: ""
            },
            spc_id: {
                required: ""
            }
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
        submitHandler: function (form) {
            var formData = new FormData(form);
            $.ajax({
                url: '../php/manager_Progress_client_accessoris.php',
                type: 'post',
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#new_client').html('Progressing <i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#new_client').attr("disabled", true);
                },
                success: function (dataResult) {
                    window.location.href = dataResult;
                },
                complete: function () {
                    setTimeout(function () {
                        $('#new_client').html('Progress');
                        $('#new_client').attr("disabled", false);
                    }, 200);
                }
            });
        }
    });
});

</script>

     
  </body>
</html>
