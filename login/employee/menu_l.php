<!-- Main Sidebar Container -->
<!-- http://fordev22.com/ -->
  <aside class="main-sidebar sidebar-light-navy elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link bg-navy">
      <img src="assets/dist/img/car2.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MB Car Care-เอ็มบี คาร์แคร์ </span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/emp.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">พนักงาน: <?php echo $_SESSION['name'] ?></a>
        </div>
      </div>

       


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <!-- nav-compact -->
        <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">เมนู</li>

          <!-- <li class="nav-item">
            <a href="index.php" class="nav-link <?php if($menu=="customer"){echo "active";} ?> ">
              <i class="nav-icon fas fa-address-card"></i>
              <p>Customer</p>
            </a>
          </li> -->

          <li class="nav-item">
            <a href="index.php" class="nav-link <?php if($menu=="Employee"){echo "active";} ?> ">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>จัดการข้อมูลพนักงาน</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="services.php" class="nav-link <?php if($menu=="Services"){echo "active";} ?> ">
              <i class="nav-icon fas fa-car"></i>
              <p>บริการ</p>
            </a>
          </li>


      <div class="user-panel mt-2 pb-3 mb-2 d-flex">
  
      </div>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link text-danger">
              <i class="nav-icon fas fa-power-off"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li>
  


          
        </ul>
      </nav>
      
      <!-- /.sidebar-menu -->
      <!-- http://fordev22.com/ -->
    </div>
    <!-- /.sidebar -->
  </aside>