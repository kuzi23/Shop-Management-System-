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
       xmlhttp.open("GET","../php/xml_accessories_type.php?accessories_name="+str ,true);
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
       xmlhttp.open("GET","../php/xml_accessories_sub_type.php?type_name="+str ,true);
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
       xmlhttp.open("GET","../php/xml_accessories_type1.php?accessories_id="+str ,true);
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
       xmlhttp.open("GET","../php/xml_accessories_sub_type1.php?accessoriestype_id="+str ,true);
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
                <h5 class="card-header">Register Accessories Purchase</h5>
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
                                <h5 class="modal-title" id="exampleModalLabel1">Accessories Purchase</h5>
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
                                    <div class="col-md-6" id="show_accessories_purchase_code">
                                    
                                    </div>
                                        <div class="col-md-6">
                                        <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Accessories Name</label>
                                    <select name="accessories_name" class="form-control" onclick="show_accessories_type(this.value)">
                                    <option selected disabled>Select Accessories</option>
                                    <?php
                                    $select_product="SELECT DISTINCT(accessories_name) FROM accessories";
                                    $cselect_product=$connect->prepare($select_product);
                                    $cselect_product->execute();
                                    foreach($cselect_product as $row_ccselect_product){
                                    ?>
                                    <option value="<?php echo $row_ccselect_product['accessories_name']?>"><?php echo $row_ccselect_product['accessories_name'];?></option>
                                    <?php
                                    }
                                    ?>
                                    </select>
                                  </div>
                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="row" id="display_Accessories_types">
                                  <div class="col mb-3">
                                    <label for="nameBasic"  class="form-label">Accessory Type Name</label>
                                    <select name="accessoriestype_id" class="form-control">
                                    <option selected disabled>Select Accessories Type</option>

                                    </select>
                                  </div>
                                </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="row" id="display_Accessories_sub_type">
                                  <div class="col mb-3">
                                  <label for="nameBasic" class="form-label">Accessory Sub Type Name</label>
                                    <select name="subtype_id" class="form-control">
                                    <option selected disabled>Select Accessories Sub Type</option>

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
                                        <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Location</label>
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
                                     ?>>
                                    
                                    </select>
                                  </div>
                                </div>
                                        </div>
                                    </div>
                                
                                
                              
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" id="register_accessories_purchase" class="btn btn-primary">Register</button>
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
       xmlhttp.open("GET","../php/xml_accessories_purchase_total.php?price_per="+str ,true);
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
       xmlhttp.open("GET","../php/xml_accessories_purchase_total1.php?price_per="+str ,true);
       xmlhttp.send();
       

    }
  }
</script>

                         <div class="modal fade" id="myModalUpdateaccessories_purchased" tabindex="-1" aria-hidden="true">
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
    
                        <form method="POST" id="form_accessoris_purchased_update" enctype="multipart/form-data">

                          </form>  
                              </div>
                            
                            </div>
                          </div>
                        </div>

                        <div class="modal fade" id="myModalUpdateaccessories_damaged" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Record Accessories Damaged</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
    <div class="alert alert-secondary" role="alert" id="error-displayss" style="display:none;"></div>
    
                        <form method="POST" id="form_accessoris_damaged" enctype="multipart/form-data">

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
                
                <div class="card" id="accessories_purchase_display">
                  
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
           url:'../php/manager-display-accessories-purchase.php',
            type:'GET',
            data:queryString,
             // beforeSend: function () {
             //        $('#Refresh').show();
             //    },
            success: function(data) {
                $('#accessories_purchase_display').html(data);

            },
     });
};
function show_code(){
      const queryString=window.location.search;
    $.ajax({ 
           url:'../php/manager-display-accessoris-purchase-code.php',
            type:'GET',
            data:queryString,
             // beforeSend: function () {
             //        $('#Refresh').show();
             //    },
            success: function(data) {
                $('#show_accessories_purchase_code').html(data);

            },
     });
};
     function product_purchase(data){
        $.ajax({
                url: '../php/manager-update-accessoriest-purchased-form.php',
                type: 'POST',
                data: {
                  data:data
                },
              success: function(dataResult){
             $('#form_accessoris_purchased_update').html(dataResult);

              },
               
            });
     
     };

     function accessories_damageds(data){
        $.ajax({
                url: '../php/manager-record-accessoriest-damaged-form.php',
                type: 'POST',
                data: {
                  data:data
                },
              success: function(dataResult){
             $('#form_accessoris_damaged').html(dataResult);

              },
               
            });
     
     };

     function delete_accessoris_purchase(data){
        $.ajax({
                url: '../php/manager_delete_accessory_purchase.php',
                type: 'POST',
                data: {
                  data:data
                },
              dataType:"json",
              beforeSend:function(){

                return confirm('Are You Sure You Want To Delete This Accessory Purchased ?');
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
          $("#form_accessoris_damaged").validate({
            rules: {
                accessories_id:{
                    required: true,
                },
                accessoriestype_id:{
                    required: true,
                },
                subtype_id:{
                    required: true,
                },
                quantity:{
                    required: true,
                },
                damaged_quantity:{
                    required: true,
                },
                
                
                
            },
            messages: {
                accessories_id:{
                    required: "",
                },
                accessoriestype_id:{
                    required: "",
                },
                subtype_id:{
                    required: "",
                },
                quantity:{
                    required: "",
                },
                damaged_quantity:{
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
             var f = $("#form_accessoris_damaged")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/manager_record_accessories_damaged.php',
                type: 'post',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#Record_accessories_damaged').html('Recording<i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#Record_accessories_damaged').attr("disabled", true);
                },
              success: function(dataResult){
                
                 if(dataResult == 1){
                  $("#error-displayss").show();
                  $("#error-displayss").removeClass('alert-success');
                  $("#error-displayss").addClass('alert-warning');
                  $("#error-displayss").html("Accessory Damaged Already Recorded !!");
                  fetch();
                }
                else if(dataResult == 2){
                  $("#error-displayss").show();
                  $("#error-displayss").removeClass('alert-success');
                  $("#error-displayss").addClass('alert-success');
                  $("#error-displayss").html("Accessory Damaged Well Recorded !!");
                  fetch();
                }
                else if(dataResult == 3){
                  $("#error-displayss").show();
                  $("#error-displayss").removeClass('alert-success');
                  $("#error-displayss").addClass('alert-danger');
                  $("#error-displayss").html("Accessory Damaged Failed To Be Recorded!!");
                  fetch();
                }
                
                else {
                  $("#error-displayss").show();
                  $("#error-displayss").removeClass('alert-success');
                  $("#error-displayss").addClass('alert-danger');
                  $("#error-displayss").html("Your Recording More Than Purchased!!");
                  fetch();
                }
                

              },
               
                 complete: function () {
                    setTimeout(function () {
                        $('#Record_accessories_damaged').html('Record');
                        $('#Record_accessories_damaged').attr("disabled", false);
                    }, 200);
                },


            });

}

});
        });
     
</script>
<script>
        $(document).ready(function () {
          $("#form_accessoris_purchased_update").validate({
            rules: {
                accessories_id:{
                    required: true,
                },
                accessoriestype_id:{
                    required: true,
                },
                subtype_id:{
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
                accessories_id:{
                    required: "",
                },
                accessoriestype_id:{
                    required: "",
                },
                subtype_id:{
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
             var f = $("#form_accessoris_purchased_update")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/manager_update_accessories_purchased.php',
                type: 'post',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#Update_accessories_purchase').html('Updating<i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#Update_accessories_purchase').attr("disabled", true);
                },
              success: function(dataResult){
                
                 if(dataResult == 1){
                  $("#error-displays").show();
                  $("#error-displays").removeClass('alert-success');
                  $("#error-displays").addClass('alert-success');
                  $("#error-displays").html("Accessory Purchased Well Updated!!");
                  fetch();
                }
                
                else {
                  $("#error-displays").show();
                  $("#error-displays").removeClass('alert-success');
                  $("#error-displays").addClass('alert-danger');
                  $("#error-displays").html("Accessory  Purchased Failed To Be Updated !!");
                  fetch();
                }
                

              },
               
                 complete: function () {
                    setTimeout(function () {
                        $('#Update_accessories_purchase').html('Update ');
                        $('#Update_accessories_purchase').attr("disabled", false);
                    }, 200);
                },


            });

}

});
        });
     
</script>

        <script>
        $(document).ready(function () {
          $("#accessory_purchase_form").validate({
            rules: {
                accessories_id:{
                    required: true,
                },
                accessoriestype_id:{
                    required: true,
                },
                subtype_id:{
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
                accessories_id:{
                    required: "",
                },
                accessoriestype_id:{
                    required: "",
                },
                subtype_id:{
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
             var f = $("#accessory_purchase_form")[0];
              var form = new FormData(f);
              $.ajax({
                url: '../php/manager-regsiter-accessories-purchase.php',
                type: 'post',
                data: form,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('#register_accessories_purchase').html('Registering  <i class="fa fa-solid fa-spinner fa-spin"></i>');
                    $('#register_accessories_purchase').attr("disabled", true);
                },
              success: function(dataResult){
                
                if(dataResult == 1){
                  $("#error-display").show();
                  $("#error-display").removeClass('alert-success');
                  $("#error-display").addClass('alert-warning');
                  $("#error-display").html("Accessory Purchased Already Exist !!");
                }
                else if(dataResult == 2){
                  $("#error-display").show();
                  $("#error-display").removeClass('alert-warning');
                  $("#error-display").addClass('alert-success');
                  $("#error-display").html("Accessory Purchased Well Recorded !!");
                  fetch();
                  show_code();
                }
                else {
                  $("#error-display").show();
                  $("#error-display").removeClass('alert-success');
                  $("#error-display").addClass('alert-danger');
                  $("#error-display").html("Accessory Purchased Failed To Be Recorded!!");
                  fetch();
                  show_code();
                }
                

              },
                 complete: function () {
                    setTimeout(function () {
                        // $("form[name='loginform']").trigger("reset");
                        $('#register_accessories_purchase').html('Register');
                        $('#register_accessories_purchase').attr("disabled", false);
                    }, 200);
                },


            });

}

});
        });
     
</script>
  </body>
</html>
