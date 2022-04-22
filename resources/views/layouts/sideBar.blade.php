

<body class="hold-transition sidebar-mini layout-fixed">


<div class="wrapper">

<!------------------------ Main Sidebar Container ------------------------->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="createAuthorization" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Timesheet Project</span>
    </a>

    <!------------------------- Sidebar ------------------------------>
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Timesheet</a>
        </div>
      </div> 
<!---------------------------------- SideMenu Start--------------------------------------------------------------------->
      <!-- Sidebar Menu -->
     <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="fas fa-user-lock"></i>
              <p>
                Authorization
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/createAuthorization" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Authorization</p>
                </a>
              </li>
              </ul>
               <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/createScreenref" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Screen Reference  </p>
                </a>
              </li>
              </ul>
              </nav>



<!---------------create role----------------->
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="./createRole" class="nav-link ">
              <i class="fas fa-user-tag"></i>
              <p>
                 Role
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./createRole" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Role</p>
                </a>
              </li>
        </ul>
        </ul>
      </nav>

      <!------------create role end------------->

         
<!-- add Employee starting --------->
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="./createRole" class="nav-link ">
              <i class="ion-person-add"></i>  
              <p>
                 Employees
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./addEmployee" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>  
                  <p>Add Employee</p>
                </a>
              </li>
        </ul>
        </ul>
      </nav>
<!--- add Employee ending-->



<!-- add client starting --------->
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="./createRole" class="nav-link ">
             <i class="fas fa-address-card"></i>
              <p>
                 Client
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./addClient" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>  
                  <p>Add Client</p>
                </a>
              </li>
        </ul>
        </ul>
      </nav>
<!--- add client ending-->


   
<!-- add project--------->
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="./createRole" class="nav-link ">
              <i class="fa fa-tasks"></i>  
              <p>
                 Project
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./addProjectScreen" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>  
                  <p>Add project</p>
                </a>
              </li>
        </ul>
        </ul>
      </nav>
<!--- add project ending-->


<!-- dailyTimesheet starting-->

<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="fas fa-user-lock"></i>
              <p>
                Timesheet
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dailyTimesheet" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daily TImesheet</p>
                </a>
              </li>
              </ul>
               <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/weeklyTimesheet" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Weekly Timesheet  </p>
                </a>
              </li>
              </ul>
              </nav>

<!-- dailyTimesheet Ending-->
      <!-- /.sidebar-menu -->
    </div>
  </aside>
    <!-- /.sidebar -->
</div>
 
    
</body>


