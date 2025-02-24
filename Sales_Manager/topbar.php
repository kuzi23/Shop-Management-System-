<script>
  function display_production_year(str){
    if (str == '') {
      document.getElementById("display_year").innerHTML = "";
    } else {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
      if (this.readyState  == 4 && this.status == 200) {
        document.getElementById("display_year").innerHTML = this.responseText;
        location.reload();
      }
       };
       xmlhttp.open("GET","../php/show_production_year.php?production_year="+str ,true);
       xmlhttp.send();
    }
  }
</script>
<nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="row " id="display_year">
                        <label  class="col-md-5 col-form-label">Production Year</label>
                        <div class="col-md-7">
                          <select class="form-control" onchange='display_production_year(this.value)'>
                            <option selected disabled>Select Production Year</option>
                            
<?php 
$adminData=$_SESSION['current_production_year'];
$select_production_year="SELECT * FROM production_year WHERE id='".$adminData['id']."'";
$cselect_production_year=$connect->prepare($select_production_year);
$cselect_production_year->execute();
$row_cselect_production_year=$cselect_production_year->fetch(PDO::FETCH_ASSOC);
$_SESSION['production_year']=$row_cselect_production_year['id'];


$select_year="SELECT * FROM production_year";
$cselect_year=$connect->prepare($select_year);
$cselect_year->execute();
while($row_cselect_year=$cselect_year->fetch(PDO::FETCH_ASSOC)){
  if ($row_cselect_production_year['id'] == $row_cselect_year['id']) {
                             ?>
                             <option selected="true" value="<?php echo $row_cselect_year['id']; ?>"><?php echo $row_cselect_year['name']; ?></option>
                           <?php }else{ ?>
                             <option value="<?php echo $row_cselect_year['id']; ?>"><?php echo $row_cselect_year['name']; ?></option>
                           <?php } }?>
                          </select>
                        </div>
                      </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../profile/<?php $adminData = $_SESSION['user_info']; echo $adminData['profile']?>" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../profile/<?php $adminData = $_SESSION['user_info']; echo $adminData['profile']?>" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php $adminData = $_SESSION['user_info']; echo $adminData['position']?></span>
                            <small class="text-muted"><?php $adminData = $_SESSION['user_info']; echo $adminData['position']?></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="profile.php">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    
                    
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="?user_logout='1'">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>