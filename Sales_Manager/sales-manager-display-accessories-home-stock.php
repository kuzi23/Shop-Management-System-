<div class="row">
                    <div class="col-6"><h5 class="card-header">Accessories Stock Quantity</h5></div>
                    <div class="col-6">
                      
                    </div>
                  </div>
                
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped" id="dataTable">
                      <thead>
                        <tr>
                          <tr>
                          <th>ID</th>
                          <th>Accessory Name</th>
                          <th>Accessory Type Name</th>
                          <th>Accessory Sub Type name</th>
                          <th>Quantity</th>
                          
                        </tr>                         
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
include 'connection.php';
$i=1;
$select_production_year="SELECT * FROM whole_accessories_home_stock";
$cselect_production_year=$connect->prepare($select_production_year);
$cselect_production_year->execute();
foreach($cselect_production_year as $row_cselect_production_year){



 ?>
            <tr>
                 <td><?php echo $i++; ?></td>
                 <td><?php echo $row_cselect_production_year['accessories_name']; ?></td>
                 <td><?php echo $row_cselect_production_year['type_name']; ?></td>
                 <td><?php echo $row_cselect_production_year['sub_type_name']; ?></td>
                 <td><?php echo $row_cselect_production_year['quantity']; ?></td>
                 
                </tr> 
            <?php } ?>  
                    </tbody>
                    </table>
                </div>


    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../js/demo/datatables-demo.js"></script>