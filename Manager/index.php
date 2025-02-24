<?php
session_start();
include '../php/server.php';
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Blessed-Worries</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../company_logo/eddy.png" />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />
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
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <i class="menu-icon fas fa-list"></i>
                            </div>
                          </div>
                          <span class="badge bg-primary">Product List</span>
                          <table class="table table-striped" id="dataTablee">
                            <thead>
                              <th>Product name</th>
                              <th>Type</th>
                            </thead>
                            <tbody>
                              <?php
                              $selet_product="SELECT * FROM whole_product_detail";
                              $cselet_product=$connect->prepare($selet_product);
                              $cselet_product->execute();
                              foreach($cselet_product as $row_cselet_product){
                                ?>
                                <tr>
                                  <td><?php echo $row_cselet_product['product_name']?></td>
                                  <td><?php echo $row_cselet_product['type_name']?></td>
                                </tr>

                                <?php
                              }
                              
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <i class="menu-icon fas fa-list"></i>
                            </div>
                          </div>
                          <span class="badge bg-primary">Product Menu</span>
                          <table class="table table-striped" id="dataTable">
                            <thead>
                              <th>Product name</th>
                              <th>Type</th>
                              <th>Price</th>
                            </thead>
                            <tbody>
                              <?php
                              $selet_product="SELECT * FROM whole_product_price";
                              $cselet_product=$connect->prepare($selet_product);
                              $cselet_product->execute();
                              foreach($cselet_product as $row_cselet_product){
                                ?>
                                <tr>
                                  <td><?php echo $row_cselet_product['product_name']?></td>
                                  <td><?php echo $row_cselet_product['type_name']?></td>
                                  <td><?php echo $row_cselet_product['amount'] ." Rwf"?></td>
                                </tr>

                                <?php
                              }
                              
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <i class="menu-icon fas fa-list"></i>
                            </div>
                          </div>
                          <span class="badge bg-primary">Product Home Stock</span>
                          <table class="table table-striped" id="dataTable1">
                            <thead>
                              <th>Product name</th>
                              <th>Type</th>
                              <th>Quantity</th>
                            </thead>
                            <tbody>
                              <?php
                              $selet_product="SELECT * FROM whole_product_home_stock";
                              $cselet_product=$connect->prepare($selet_product);
                              $cselet_product->execute();
                              foreach($cselet_product as $row_cselet_product){
                                ?>
                                <tr>
                                  <td><?php echo $row_cselet_product['product_name']?></td>
                                  <td><?php echo $row_cselet_product['type_name']?></td>
                                  <td><?php echo $row_cselet_product['quantity']?></td>
                                </tr>

                                <?php
                              }
                              
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <i class="menu-icon fas fa-list"></i>
                            </div>
                          </div>
                          <span class="badge bg-primary">Product Job Stock</span>
                          <table class="table table-striped" id="dataTable2">
                            <thead>
                              <th>Product name</th>
                              <th>Type</th>
                              <th>Quantity</th>
                            </thead>
                            <tbody>
                              <?php
                              $selet_product="SELECT * FROM whole_product_job_stock";
                              $cselet_product=$connect->prepare($selet_product);
                              $cselet_product->execute();
                              foreach($cselet_product as $row_cselet_product){
                                ?>
                                <tr>
                                  <td><?php echo $row_cselet_product['product_name']?></td>
                                  <td><?php echo $row_cselet_product['type_name']?></td>
                                  <td><?php echo $row_cselet_product['quantity']?></td>
                                </tr>

                                <?php
                              }
                              
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="row">
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
    <!-- / Layout wrapper -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>
    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Custom JS to initialize DataTables -->
    <script>
      $(document).ready(function() {
          $('#dataTable').DataTable();
          $('#dataTablee').DataTable();
          $('#dataTable1').DataTable();
          $('#dataTable2').DataTable();
      });
    </script>
  </body>
</html>
