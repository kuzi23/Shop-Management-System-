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
              
                
                <div class="card" id="month_history_accessories_sold">
                  
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
           url:'../php/monthly_sold_accessories_history.php',
            type:'GET',
            data:queryString,
             // beforeSend: function () {
             //        $('#Refresh').show();
             //    },
            success: function(data) {
                $('#month_history_accessories_sold').html(data);

            },
     });
};

function update_product_sold(data){
        $.ajax({
                url: '../php/manager-update-product-sold-form.php',
                type: 'POST',
                data: {
                  data:data
                },
              success: function(dataResult){
             $('#form_sold_product_update').html(dataResult);

              },
               
            });
     
     };


     function delete_product_sold(data){
        $.ajax({
                url: '../php/manager_delete_product_sold.php',
                type: 'POST',
                data: {
                  data:data
                },
              dataType:"json",
              beforeSend:function(){
                return confirm('Are You Sure You Want To Delete This Product Sold ?');
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
          $("#form_sold_product_update").validate({
            rules: {
              pso_code:{
                    required: true,
                },
                p_id:{
                    required: true,
                },
                type_id:{
                    required: true,
                },
                sp_id:{
                    required: true,
                },
                fullname:{
                    required: true,
                },
                phone_number:{
                    required: true,
                },
                sold_quantity:{
                    required: true,
                },
                mode_of_payment:{
                    required: true,
                },
                account:{
                    required: true,
                },
            },
            messages: {
              pso_code:{
                    required: "",
                },
                p_id:{
                    required: "",
                },
                type_id:{
                    required: "",
                },
                sp_id:{
                    required: "",
                },
                fullname:{
                    required: "",
                },
                phone_number:{
                    required: "",
                },
                sold_quantity:{
                    required: "",
                },
                mode_of_payment:{
                    required: "",
                },
                account:{
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
             var f = $("#form_sold_product_update")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/manager_update_product_sold.php',
                type: 'post',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#update_sold_product').html('Updating<i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#update_sold_product').attr("disabled", true);
                },
              success: function(dataResult){
                alert(dataResult);
                 if(dataResult == 1){
                  $("#error-displays").show();
                  $("#error-displays").removeClass('alert-success');
                  $("#error-displays").addClass('alert-success');
                  $("#error-displays").html("Product Purchase Well Updated !!");
                  fetch();
                }
                else {
                  $("#error-displays").show();
                  $("#error-displays").removeClass('alert-success');
                  $("#error-displays").addClass('alert-danger');
                  $("#error-displays").html("Product  Purchase Failed To Be Updated !!");
                  fetch();
                }
                

              },
               
                 complete: function () {
                    setTimeout(function () {
                        $('#update_sold_product').html('Update');
                        $('#update_sold_product').attr("disabled", false);
                    }, 200);
                },


            });

}

});
        });
     
</script>

        
  </body>
</html>
