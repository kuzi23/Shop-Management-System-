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
       xmlhttp.open("GET","../php/xml_stock_product_type.php?product_name="+str ,true);
       xmlhttp.send();
       

    }
  }
</script>

<script>
  function quantity_stock(str){
    if (str == '') {
      document.getElementById("product_stock_dispaly").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("product_stock_dispaly").innerHTML = this.responseText;
      }
       };
       xmlhttp.open("GET","../php/xml_product_stock.php?producttype_id="+str ,true);
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
                <h5 class="card-header">Product Sell form</h5>
                <form id="product_add_list">
                <div class="row">
                                    <div class="col-md-6" id="show_product_sell_code">
                                    
                                    </div>
                                    <div class="col-md-6">
                                    <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Product Name</label>
                                    <select name="product_name" id="product_name" class="form-control" onclick="show_product_type(this.value)">
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
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="row" id="display_types">
                                  <div class="col mb-3">
                                    <label for="nameBasic"class="form-label">Type Name</label>
                                    <select name="type_name" id="type_name" class="form-control">
                                    <option selected disabled>Select Product Type</option>

                                    </select>
                                  </div>
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="row" id="product_stock_dispaly">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Quantity In Stock</label>
                                    <input type="number" class="form-control" readonly>
                                  </div>
                                </div>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                  <div class="row" id="price_per_dispay">
                                  <div class="col mb-3">
                                    <label for="nameBasic"  class="form-label">Sell Quantity</label>
                                    <input type="text" name="sold_quantity" id="sold_quantity" class="form-control" >
                                  </div>
                                </div>
                                  </div>
                                  <div class="col-md-6">
                                  
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
                    <th>Product Name</th>
                    <th>Type Name</th>
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

  // Add product to the list on button click
  $('#add_sell').click(function () {
    const pso_code = $('#pso_code').val();
    const product_name = $('#product_name').val();
    const producttype_id = $('#producttype_id').val();
    const sold_quantity = $('#sold_quantity').val();

    if (product_name && producttype_id && sold_quantity) {
      $.ajax({
        url: '../php/prduct_real_names.php',
        type: 'POST',
        data: {
          product_name: product_name,
          producttype_id: producttype_id,
        },
        success: function (response) {
          const data = JSON.parse(response);

          $.ajax({
            url: '../php/get_product_price.php',
            type: 'POST',
            data: {
              product_name: product_name,
              producttype_id: producttype_id,
            },
            success: function (priceResponse) {
              const priceData = JSON.parse(priceResponse);
              const amount = priceData.amount;
              const totalamount = sold_quantity * amount;

              let exists = false;
              $('#display_quantity_sell tr').each(function () {
                const currentProduct = $(this).find('td:nth-child(2)').text();
                const currentType = $(this).find('td:nth-child(3)').text();

                if (currentProduct === data.product_name && currentType === data.type_name) {
                  exists = true;
                  const currentQty = parseInt($(this).find('td:nth-child(4)').text());
                  const newQty = currentQty + parseInt(sold_quantity);
                  $(this).find('td:nth-child(4)').text(newQty);

                  const currentTotalamount = parseFloat($(this).find('td:nth-child(6)').text());
                  const newTotalamount = currentTotalamount + totalamount;
                  $(this).find('td:nth-child(6)').text(newTotalamount.toFixed(2));
                }
              });

              if (!exists) {
                const newRow = `<tr>
                  <td>${pso_code}</td>
                  <td data-id="${product_name}">${data.product_name}</td>
                  <td data-id="${producttype_id}">${data.type_name}</td>
                  <td>${sold_quantity}</td>
                  <td>${amount.toFixed(2)}</td>
                  <td>${totalamount.toFixed(2)}</td>
                  <td><button type="button" class="btn btn-danger remove-sell">Remove</button></td>
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
    } else {
      alert("Please fill all fields before adding.");
    }
  });

  // Remove product from the list on button click
  $(document).on('click', '.remove-sell', function () {
    $(this).closest('tr').remove();
    updateTotals();
  });

  // Function to update total quantities and amounts
  function updateTotals() {
    let totalQuantity = 0;
    let totalAmount = 0;

    $('#display_quantity_sell tr').each(function () {
      totalQuantity += parseInt($(this).find('td:nth-child(4)').text());
      totalAmount += parseFloat($(this).find('td:nth-child(6)').text());
    });

    $('#total_quantity').text(totalQuantity);
    $('#total_amount').text(totalAmount.toFixed(2));
  }

  // Show product codes
  function show_code() {
    const queryString = window.location.search;
    $.ajax({
      url: '../php/manager-display-product-sell-code.php',
      type: 'GET',
      data: queryString,
      success: function (data) {
        $('#show_product_sell_code').html(data);
      }
    });
  }

  // Save sell details and open the confirmation modal
  $('#save_sell').click(function () {
    let modalContent = '';
    let paymentDetails = `
      <div class="row">
        <div class="col-md-6">
          <div class="row" id="product_stock_dispaly">
            <div class="col mb-3">
              <label for="nameBasic" class="form-label">Mode Of Payment</label>
              <select name="m_id" id="m_id" class="form-control">
                <option selected disabled>Select Payment Mode</option>
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
      const pso_code = $(this).find('td:nth-child(1)').text();
      const product_name = $(this).find('td:nth-child(2)').text();
      const type_name = $(this).find('td:nth-child(3)').text();
      const sold_quantity = $(this).find('td:nth-child(4)').text();
      const price = $(this).find('td:nth-child(5)').text();
      const totalamount = $(this).find('td:nth-child(6)').text();

      modalContent += `
        <div class="form-group">
          <label for="totalMoney${index}">${product_name} (${type_name}) - Total Amount: ${totalamount}</label>
          <input type="number" class="form-control" id="totalMoney${index}" value="${totalamount}" data-row="${index}">
        </div>
      `;
    });

    $('#modalContent').html(modalContent);
    $('#paymentDetails').html(paymentDetails);
    $('#confirmModal').modal('show');
  });

  // Submit the sell details and save them to the database
  $('#confirmSubmit').click(function () {
    const tableData = [];
    $('#display_quantity_sell tr').each(function (index) {
      const totalMoney = $(`#totalMoney${index}`).val();

      const row = {
        pso_code: $(this).find('td:nth-child(1)').text(),
        product_id: $(this).find('td:nth-child(2)').data('id'),
        producttype_id: $(this).find('td:nth-child(3)').data('id'),
        sold_quantity: $(this).find('td:nth-child(4)').text(),
        price: $(this).find('td:nth-child(5)').text(),
        totalamount: totalMoney,
        mode_of_payment: $('#m_id').val(),
        payment_status: $('#Payment_Status').val()
      };
      tableData.push(row);
    });

    const urlParams = new URLSearchParams(window.location.search);
    const additionalData = {
      categorie: urlParams.get('categorie')
    };

    $.ajax({
      url: '../php/manage_sell_products.php',
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

  // Clear the product table and reset totals
  function clearTable() {
    $('#display_quantity_sell').empty();
    $('#total_quantity').text('0');
    $('#total_amount').text('0.00');
  }
});
</script>



  </body>
</html>
