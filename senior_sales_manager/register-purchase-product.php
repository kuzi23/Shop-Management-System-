<?php
session_start();
include'../php/server.php';
?>
<script>
  function show_product_type(str){
    if (str == '') {
      document.getElementById("display_types").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("display_types").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_product_type.php?product_name="+str ,true);
       xmlhttp.send();
       

    }
  }
</script>
<!-- <script>
  function show_product_sub_type(str){
    if (str == '') {
      document.getElementById("display_sub_type").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("display_sub_type").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_product_Sub_type.php?type_name="+str ,true);
       xmlhttp.send();
       

    }
  }
</script> -->
<script>
  function show_product_type1(str){
    if (str == '') {
      document.getElementById("display_types1").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("display_types1").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_product_type1.php?p_id="+str ,true);
       xmlhttp.send();
       

    }
  }
</script>
<!-- <script>
  function show_product_sub_type1(str){
    if (str == '') {
      document.getElementById("display_sub_type1").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("display_sub_type1").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_product_Sub_type1.php?type_id="+str ,true);
       xmlhttp.send();
       

    }
  }
</script> -->
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
       xmlhttp.open("GET","../php/xml_product_purchase_priceper.php?quantity="+str ,true);
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
       xmlhttp.open("GET","../php/xml_product_purchase_priceper1.php?quantity="+str ,true);
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
                <h5 class="card-header">Register Purchase Product </h5>
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
                                <h5 class="modal-title" id="exampleModalLabel1">Product Purchase</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="alert alert-secondary" role="alert" id="error-display" style="display:none;"></div>
                                <form method="POST" id="accessory_purchase_form">
                                    <div class="row">
                                      <div class="col-md-6">
                                      <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Product Name</label>
                                    <select name="product_name" class="form-control" onclick="show_product_type(this.value)">
                                    <option selected disabled>Select Product</option>
                                    <?php
                                    $select_product="SELECT DISTINCT(product_name) FROM product";
                                    $cselect_product=$connect->prepare($select_product);
                                    $cselect_product->execute();
                                    foreach($cselect_product as $row_ccselect_product){
                                    ?>
                                    <option value="<?php echo $row_ccselect_product['product_name']?>"><?php echo $row_ccselect_product['product_name'];?></option>
                                    <?php
                                    }
                                    ?>
                                    </select>
                                  </div>
                                      </div>
                                      <div class="col-md-6">
                                      <div class="row" id="display_types">
                                  <div class="col mb-3">
                                    <label for="nameBasic"  class="form-label">type name</label>
                                    <select name="producttype_id" class="form-control">
                                      <option selected disabled>Select Subtype</option>
                                    </select>
                                  </div>
                                </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                      <div class="row" >
                                  <div class="col mb-3">
                                    <label for="nameBasic"  class="form-label">Quantity</label>
                                    <input type="number" name="quantity" class="form-control" oninput="open_price_per(this.value)">
                                  </div>
                                </div>
                                      </div>
                                      <div class="col-md-6">
                                      <div class="row" id="price_per_dispay">
                                  <div class="col mb-3">
                                    <label for="nameBasic"  class="form-label">Price Per</label>
                                    <input type="number" name="price_per" class="form-control" readonly>
                                  </div>
                                </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                      <div class="row" id="total_payed_dispay">
                                  <div class="col mb-3">
                                    <label for="nameBasic"  class="form-label">Total Payed</label>
                                    <input type="number" name="total_payed" class="form-control" readonly>
                                  </div>
                                </div>
                                      </div>
                                      <div class="col-md-6">
                                    <div class="row" >
                                  <div class="col mb-3">
                                    <label for="nameBasic"  class="form-label">Stock Location</label>
                                    <select name="stock_location" class="form-control">
                                     <option selected disabled>Select Location</option>
                                     <?php
                                     $select_status="SELECT * FROM stock_location";
                                     $cselect_status=$connect->prepare($select_status);
                                     $cselect_status->execute();
                                     foreach($cselect_status as $row_cselect_status){
                                     ?>
                                     <option value="<?php echo $row_cselect_status['name']?>"><?php echo $row_cselect_status['name']?></option>
                                     <?php
                                     }
                                     ?>
                                    </select>
                                  </div>
                                </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" id="register_purchased_product" class="btn btn-primary">Register</button>
                              </div>
                            </form>
                            </div>
                            </div>
                          </div>
                        </div>
                        <script>
  function open_payed_totalxxx(str){
    if (str == '') {
      document.getElementById("total_payed_dispay").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("total_payed_dispay").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_product_purchase_total.php?price_per="+str ,true);
       xmlhttp.send();
       

    }
  }
</script>
<script>
  function open_payed_totalxxx1(str){
    if (str == '') {
      document.getElementById("total_payed_dispay1").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("total_payed_dispay1").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_product_purchase_total1.php?price_per="+str ,true);
       xmlhttp.send();
       

    }
  }
</script>

                         <div class="modal fade" id="myModalUpdateproduct_purchased" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Product Purchased Detail</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
    <div class="alert alert-secondary" role="alert" id="error-displays" style="display:none;"></div>
    
                        <form method="POST" id="form_product_purchesd_update" enctype="multipart/form-data">

                          </form>  
                              </div>
                            
                            </div>
                          </div>
                        </div>


                        <div class="modal fade" id="myModalUpdateproduct_damaged" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Product Damaged Detail</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
    <div class="alert alert-secondary" role="alert" id="error-displayss" style="display:none;"></div>
    
                        <form method="POST" id="form_product_purchesd_damaged_update" enctype="multipart/form-data">

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
                
                <div class="card" id="product_purchasedd_display">
                  
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
           url:'../php/manager-display-product-purchased.php',
            type:'GET',
            data:queryString,
             // beforeSend: function () {
             //        $('#Refresh').show();
             //    },
            success: function(data) {
                $('#product_purchasedd_display').html(data);

            },
     });
};

function show_code(){
      const queryString=window.location.search;
    $.ajax({ 
           url:'../php/manager-display-product-purchase-code.php',
            type:'GET',
            data:queryString,
             // beforeSend: function () {
             //        $('#Refresh').show();
             //    },
            success: function(data) {
                $('#show_product_purchase_code').html(data);

            },
     });
};

     function product_purchase(data){
        $.ajax({
                url: '../php/manager-update-product-purchased-form.php',
                type: 'POST',
                data: {
                  data:data
                },
              success: function(dataResult){
             $('#form_product_purchesd_update').html(dataResult);

              },
               
            });
     
     };
     function product_damaged(data){
        $.ajax({
                url: '../php/manager-record-product-purchased-damaged-form.php',
                type: 'POST',
                data: {
                  data:data
                },
              success: function(dataResult){
             $('#form_product_purchesd_damaged_update').html(dataResult);

              },
               
            });
     
     };

     function delete_product_purchase(data){
        $.ajax({
                url: '../php/manager_delete_product_purchase.php',
                type: 'POST',
                data: {
                  data:data
                },
              dataType:"json",
              beforeSend:function(){
                return confirm('Are You Sure You Want To Delete This Product Purchased?');
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
          $("#form_product_purchesd_update").validate({
            rules: {
              ppo_code:{
                    required: true,
                },
                producttype_id:{
                    required: true,
                },
                quantity:{
                    required: true,
                },
                price_per:{
                    required: true,
                },
                total_payed:{
                    required: true,
                },
                stock_location:{
                    required: true,
                },
            },
            messages: {
              ppo_code:{
                    required: "",
                },
                producttype_id:{
                    required: "",
                },
                
                quantity:{
                    required: "",
                },
                price_per:{
                    required: "",
                },
                total_payed:{
                    required: "",
                },
                stock_location:{
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
             var f = $("#form_product_purchesd_update")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/manager_update_product_purchase.php',
                type: 'post',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#update_purchased_product').html('Updating<i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#update_purchased_product').attr("disabled", true);
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
                        $('#update_purchased_product').html('Update');
                        $('#update_purchased_product').attr("disabled", false);
                    }, 200);
                },


            });

}

});
        });
     
</script>
<script>
        $(document).ready(function () {
          $("#form_product_purchesd_damaged_update").validate({
            rules: {
              ppo_code:{
                    required: true,
                },
                producttype_id:{
                    required: true,
                },
                quantity:{
                    required: true,
                },
                price_per:{
                    required: true,
                },
                total_payed:{
                    required: true,
                },
                stock_location:{
                    required: true,
                },
            },
            messages: {
              ppo_code:{
                    required: "",
                },
                producttype_id:{
                    required: "",
                },
                
                quantity:{
                    required: "",
                },
                price_per:{
                    required: "",
                },
                total_payed:{
                    required: "",
                },
                stock_location:{
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
             var f = $("#form_product_purchesd_damaged_update")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/manager_record_product_damaged.php',
                type: 'post',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#record_damaged_product').html('Recording<i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#record_damaged_product').attr("disabled", true);
                },
              success: function(dataResult){
                alert(dataResult);
                 if(dataResult == 1){
                  $("#error-displayss").show();
                  $("#error-displayss").removeClass('alert-success');
                  $("#error-displayss").addClass('alert-warning');
                  $("#error-displayss").html("Product Damaged already Recorded!!");
                  fetch();
                }
                else if(dataResult == 2){
                  $("#error-displayss").show();
                  $("#error-displayss").removeClass('alert-success');
                  $("#error-displayss").addClass('alert-success');
                  $("#error-displayss").html("Product Damaged Well Recorded !!");
                  fetch();
                }
                else{
                  $("#error-displayss").show();
                  $("#error-displayss").removeClass('alert-success');
                  $("#error-displayss").addClass('alert-danger');
                  $("#error-displayss").html("Product Damaged Failed To Be Recorded !!");
                  fetch();
                }
                
                

              },
               
                 complete: function () {
                    setTimeout(function () {
                        $('#record_damaged_product').html('Record');
                        $('#record_damaged_product').attr("disabled", false);
                    }, 200);
                },


            });

}

});
        });
     
</script>
        <script>
        $(document).ready(function () {
          $("#product_purchase_form").validate({
            rules: {
              ppo_code:{
                    required: true,
                },
                product_id:{
                    required: true,
                },
                quantity:{
                    required: true,
                },
                price_per:{
                    required: true,
                },
                total_payed:{
                    required: true,
                },
                stock_location:{
                    required: true,
                },
            },
            messages: {
              ppo_code:{
                    required: "",
                },
                product_id:{
                    required: "",
                },
                quantity:{
                    required: "",
                },
                price_per:{
                    required: "",
                },
                total_payed:{
                    required: "",
                },
                stock_location:{
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
             var f = $("#product_purchase_form")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/manager-regsiter-product-purchased.php',
                type: 'post',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#register_purchased_product').html('Registering  <i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#register_purchased_product').attr("disabled", true);
                },
              success: function(dataResult){
                alert(dataResult);
                if(dataResult == 1){
                  $("#error-display").show();
                  $("#error-display").removeClass('alert-success');
                  $("#error-display").addClass('alert-warning');
                  $("#error-display").html("Product Purchased Already Recorded !!");
                }
                else if(dataResult == 2){
                  $("#error-display").show();
                  $("#error-display").removeClass('alert-warning');
                  $("#error-display").addClass('alert-success');
                  $("#error-display").html("Product Purchased Well Recorded!!");
                  fetch();
                  show_code();
                }
                else {
                  $("#error-display").show();
                  $("#error-display").removeClass('alert-success');
                  $("#error-display").addClass('alert-danger');
                  $("#error-display").html("Product Purchased Failed To Be Recorded!!");
                  fetch();
                  show_code();
                }
                

              },
                 complete: function () {
                    setTimeout(function () {
                        // $("form[name='loginform']").trigger("reset");
                        $('#register_purchased_product').html('Register');
                        $('#register_purchased_product').attr("disabled", false);
                    }, 200);
                },


            });

}

});
        });
     
</script>
  </body>
</html>
