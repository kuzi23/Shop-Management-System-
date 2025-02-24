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
  function quantity_stock(str){
    if (str == '') {
      document.getElementById("accessories_stock_dispaly").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("accessories_stock_dispaly").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_accessories_stock.php?subtype_id="+str ,true);
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
                <h5 class="card-header">Accessories Sell form</h5>
                <form id="product_add_list">
                <div class="row">
                                    <div class="col-md-6" id="show_accessories_sell_codes">
                                    
                                    </div>
                                    <div class="col-md-6">
                                    <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Accessories Name</label>
                                    <select name="accessories_name" id="accessories_name" class="form-control" onclick="show_accessories_type(this.value)">
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
                                    <label for="nameBasic"class="form-label">Type Name</label>
                                    <select name="type_name" id="type_name" class="form-control">
                                    <option selected disabled>Select Accessories Type</option>

                                    </select>
                                  </div>
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="row" id="display_Accessories_sub_type">
                                  <div class="col mb-3">
                                    <label for="nameBasic"  class="form-label">Sub Type Name</label>
                                    <select name="subtype_id" id="subtype_id" class="form-control">
                                    <option selected disabled>Select Accessories Sub Type</option>

                                    </select>
                                  </div>
                                </div>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                  <div class="row" id="accessories_stock_dispaly">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Quantity In Stock</label>
                                    <input type="number" class="form-control" readonly>
                                  </div>
                                </div>
                                  </div>
                                  <div class="col-md-6">
                                  <div class="row" id="price_per_dispay">
                                  <div class="col mb-3">
                                    <label for="nameBasic"  class="form-label">Sell Quantity</label>
                                    <input type="text" name="sold_quantity" id="sold_quantity" class="form-control" >
                                  </div>
                                </div>
                                  </div>
                                </div>
                                
                                <div class="row">
                            <div class="col-md-6">
                            <button class="btn btn-info" type="button" id="add_sell">Add</button>
                            </div>
                                </div>
                                </form>

              <!--/ Bootstrap modals -->
            </div>
                
                <div class="card" >
                <div class="row">
                    <div class="col-6"><h5 class="card-header">Product Soled</h5></div>
                    <div class="col-6">
                      
                    </div>
                  </div>
                
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped" >
                  <thead>
                <tr>
                    <th>Sell code</th>
                    <th>Accessories Name</th>
                    <th>Type Name</th>
                    <th>Sub Type Name</th>
                    <th>Sold Quantity</th>
                    <th>Price</th>
                    <th>Total Price</th>
                </tr>
            </thead>
                      <tbody id="display_quantity_sell">
                         
                    </tbody>
                    <tfoot>
                <tr>
                    <th colspan="4">Total</th>
                    <th id="total_quantity">0</th>
                    <th></th>
                    <th id="total_amount">0</th>
                </tr>
            </tfoot>
            
                    </table>
                    <button type="button" id="save_sell" class="btn btn-info">Confirm</button>
                </div>
                  
              </div>  
                
              </div>
    <!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmModalLabel">Confirm Total Amounts</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="modalContent">
          <!-- Dynamically generated input fields will be inserted here -->
        </div>
        <div id="paymentDetails">
          <!-- Additional payment details will be inserted here -->
        </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="confirmSubmit">Submit</button>
      </div>
    </div>
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
  show_code();

  $('#add_sell').click(function () {
    const aso_code = $('#aso_code').val();
    const accessories_name = $('#accessories_name').val();
    const type_name = $('#type_name').val();
    const subtype_id = $('#subtype_id').val();
    const sold_quantity = $('#sold_quantity').val();

    if (accessories_name && type_name && subtype_id && sold_quantity) {
      $.ajax({
        url: '../php/accessories_real_names.php',
        type: 'POST',
        data: {
          accessories_name: accessories_name,
          type_name: type_name,
          subtype_id: subtype_id
        },
        success: function (response) {
          const data = JSON.parse(response);

          $.ajax({
            url: '../php/get_accessories_price.php',
            type: 'POST',
            data: {
              accessories_name: accessories_name,
              type_name: type_name,
              subtype_id: subtype_id
            },
            success: function (priceResponse) {
              const priceData = JSON.parse(priceResponse);
              const amount = priceData.amount;
              const totalamount = sold_quantity * amount;

              let exists = false;
              $('#display_quantity_sell tr').each(function () {
                const currentProduct = $(this).find('td:nth-child(2)').text();
                const currentType = $(this).find('td:nth-child(3)').text();
                const currentSubType = $(this).find('td:nth-child(4)').text();

                if (currentProduct === data.accessories_name && currentType === data.type_name && currentSubType === data.sub_type_name) {
                  exists = true;
                  const currentQty = parseInt($(this).find('td:nth-child(5)').text());
                  const newQty = currentQty + parseInt(sold_quantity);
                  $(this).find('td:nth-child(5)').text(newQty);

                  const currentTotalamount = parseFloat($(this).find('td:nth-child(7)').text());
                  const newTotalamount = currentTotalamount + totalamount;
                  $(this).find('td:nth-child(7)').text(newTotalamount.toFixed(2));
                }
              });

              if (!exists) {
                const newRow = `<tr>
                  <td>${aso_code}</td>
                  <td data-id="${accessories_name}">${data.accessories_name}</td>
                  <td data-id="${type_name}">${data.type_name}</td>
                  <td data-id="${subtype_id}">${data.sub_type_name}</td>
                  <td>${sold_quantity}</td>
                  <td>${amount.toFixed(2)}</td>
                  <td>${totalamount.toFixed(2)}</td>
                </tr>`;
                $('#display_quantity_sell').append(newRow);
              }

              updateTotals();
              $('#product_add_list')[0].reset();
            },
            error: function () {
              alert('Error fetching product price.');
            }
          });
        },
        error: function () {
          alert('Error fetching real names.');
        }
      });
    }
  });

  function show_code() {
    const queryString = window.location.search;
    $.ajax({
      url: '../php/show_accessories_sell_code.php',
      type: 'GET',
      data: queryString,
      success: function (data) {
        $('#show_accessories_sell_codes').html(data);
      }
    });
  }

  $('#save_sell').click(function () {
    let modalContent = '';
    let paymentDetails = `
      <div class="row">
        <div class="col-md-6">
          <div class="row" id="product_stock_dispaly">
            <div class="col mb-3">
              <label for="nameBasic" class="form-label">Mode Of Payment</label>
              <select name="m_id" id="m_id" class="form-control" onclick="show_mode_account(this.value)">
                <option selected disabled>Select Product</option>
                <?php
                $select_product="SELECT * FROM mode_of_payment";
                $cselect_product=$connect->prepare($select_product);
                $cselect_product->execute();
                foreach($cselect_product as $row_ccselect_product){
                ?>
                <option value="<?php echo $row_ccselect_product['m_id']?>"><?php echo $row_ccselect_product['mode_name'];?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col mb-3" id="mode_pay_account">
              <label for="nameBasic" class="form-label">Account</label>
              <select name="a_id" id="a_id" class="form-control">
                <option selected disabled>Select Account</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="row" id="product_stock_dispaly">
            <div class="col mb-3">
              <label for="nameBasic" class="form-label">Payment Status</label>
              <select name="Payment_Status" id="Payment_Status" class="form-control">
                <option selected disabled>Select Status</option>
                <?php
                $select_status="SELECT * FROM client_payment_status";
                $cselect_status=$connect->prepare($select_status);
                $cselect_status->execute();
                foreach ($cselect_status as $row_cselect_status){
                ?>
                <option><?php echo $row_cselect_status['name']?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
        </div>
      </div>
    `;

    $('#display_quantity_sell tr').each(function (index) {
      const aso_code = $(this).find('td:nth-child(1)').text();
      const accessories_name = $(this).find('td:nth-child(2)').text();
      const type_name = $(this).find('td:nth-child(3)').text();
      const sub_type_name = $(this).find('td:nth-child(4)').text();
      const sold_quantity = $(this).find('td:nth-child(5)').text();
      const price = $(this).find('td:nth-child(6)').text();
      const totalamount = $(this).find('td:nth-child(7)').text();
      

      modalContent += `
        <div class="form-group">
          <label for="totalMoney${index}">${accessories_name} (${type_name} - ${sub_type_name}) - Total Amount: ${totalamount}</label>
          <input type="number" class="form-control" id="totalMoney${index}" value="${totalamount}" data-row="${index}">
        </div>
        `;
    });

    $('#modalContent').html(modalContent);
    $('#paymentDetails').html(paymentDetails);
    $('#confirmModal').modal('show');
  }); 
  $('#confirmSubmit').click(function () {
    const tableData = [];
    $('#display_quantity_sell tr').each(function (index) {
      const totalMoney = $(`#totalMoney${index}`).val();

      const row = {
        aso_code: $(this).find('td:nth-child(1)').text(),
        accessories_id: $(this).find('td:nth-child(2)').data('id'),
        accessoriestype_id: $(this).find('td:nth-child(3)').data('id'),
        subtype_id: $(this).find('td:nth-child(4)').data('id'),
        sold_quantity: $(this).find('td:nth-child(5)').text(),
        price: $(this).find('td:nth-child(6)').text(),
        totalamount: totalMoney,
        mode_of_payment: $('#m_id').val(),
        account: $('#a_id').val(),
        payment_status: $('#Payment_Status').val()

      };
      tableData.push(row);
    });

    const urlParams = new URLSearchParams(window.location.search);
    const additionalData = {
      categorie: urlParams.get('categorie')
    };

    $.ajax({
      url: '../php/manage_sell_accessories.php',
      type: 'POST',
      data: {
        tableData: tableData,
        additionalData: additionalData
      },
      success: function (response) {
        alert(response);
        $('#confirmModal').modal('hide');
        show_code();
        clearTable();
      },
      error: function () {
        alert('Error saving data.');
      }
    });
  });

  function clearTable() {
    $('#display_quantity_sell').empty();
    $('#total_quantity').text('0');
    $('#total_amount').text('0.00');
  }

  function updateTotals() {
    let totalQuantity = 0;
    let totalamount = 0;

    $('#display_quantity_sell tr').each(function () {
      totalQuantity += parseInt($(this).find('td:nth-child(5)').text());
      totalamount += parseFloat($(this).find('td:nth-child(7)').text());
    });

    $('#total_quantity').text(totalQuantity);
    $('#total_amount').text(totalamount.toFixed(2));
  }
});

</script>


  </body>
</html>
