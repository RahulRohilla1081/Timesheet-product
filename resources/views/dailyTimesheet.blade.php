<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Timesheet</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


</head>
<body class="hold-transition sidebar-mini layout-fixed">




  <div class="wrapper">


  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="createAuthorization" class="nav-link">Home</a>
      </li>
     
    </ul>

    <!--------------------------------- SEARCH FORM -------------------------->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!------------------------ Right navbar links ---------------------->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-question"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!------------------------------- Message End -------------------------------->

          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!------------------------------ Message End ------------------------------->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
           <!------------------------------ Message End ------------------------------->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-bullhorn"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button">
          <i class="fas fa-user-alt"></i>
        </a>
           <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> Profile
           
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> register 
          
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> Logout
          
          </a>
          
        
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
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
          <li class="nav-item has-treeview ">
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
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="fas fa-user-lock"></i>
              <p>
                Timesheet
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dailyTimesheet" class="nav-link active  ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daily TImesheet</p>
                </a>
              </li>
              </ul>
               <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/viewTimesheet" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Timesheet  </p>
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


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark">Daily Timesheet</h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Rahul</li>
              <li class="breadcrumb-item ">E123456789</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-----------------------------------Screen Main content------------------->
  <!-- Main content Staring  -->

   
   
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="myTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th style="width: 10%">Date</th>
                    <th style="width: 20%">Customer Name</th>
                    <th style="width: 20%">Project Name</th>
                    <th style="width: 20%">Phase</th>
                    <th style="width: 20%">Activity</th>
                    <th style="width: 20%">Description</th>
                    <th style="width: 20%">Hours </th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Sun Apr 10 2022</td>
                    <td>Rahul</td>
                    <td>Timesheet</td>
                    <td>Training</td>
                    <td >Development</td>
                    <td> dailyTimesheet Screen</td>
                    <td> 8 Hrs</td>
                  </tr>
                 
                  </tbody>
                 
                </table>
              </div>
             
              <!-- /.card-body -->
            </div>
             <form action="{{route('viewTimesheet.store')}}"  id="timesheet" method="POST"  class="form-horizontal">
  @csrf
<input type="hidden"  name="DATE" type="text" class="form-control" id="input1" placeholder="Contact Number">
<input type="hidden" name="CUSTOMER_NAME" type="text" class="form-control" id="input2" placeholder="Contact Number">
<input type="hidden"  name="PROJECT_NAME" type="text" class="form-control" id="input3" placeholder="Contact Number">
<input  type="hidden" name="PHASE" type="text" class="form-control" id="input4" placeholder="Contact Number">
<input type="hidden"  name="ACTIVITY" type="text" class="form-control" id="input5" placeholder="Contact Number">
<input type="hidden" name="DESCRIPTION" type="text" class="form-control" id="input6" placeholder="Contact Number">
<input  type="hidden"  name="HOURS" type="text" class="form-control" id="input7" placeholder="Contact Number">
  <div class="card-footer">
            <div class="col-ms-6 float-bottom">
              <button type="button" id="close-button" onclick="myFunction()" class="btn btn-info">New Entry</button>
              &emsp;
              &emsp;
               <button type="button" id="close-button" class="btn btn-info">Save</button>
              &emsp;
              &emsp;
             <button type="submit" id="close-button"  class="btn btn-info">Submit</button>
            </div>
          </div>  

          
            
        </form>
    



             
            <!--------------------------main content ending-------------------------------------->

           
               
                  
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Samishti Infotech private Ltd. <a href="http://adminlte.io">All rights reserved</a></strong>
    <!-- All rights reserved.-->
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>

var SHOW_FORM_BUTTON = document.querySelector("#fill-form-button"),
	DIALOG = document.querySelector("#form-dialog"),
	FORM_SUBMIT_BUTTON = document.querySelector("#submit-button"),
	FORM_CANCEL_BUTTON = document.querySelector("#close-button"),
	FORM_STATUS = document.querySelector("#form-status");

// show dialog
SHOW_FORM_BUTTON.addEventListener('click', function() {
	DIALOG.showModal();
});

// form submission is cancelled
FORM_CANCEL_BUTTON.addEventListener('click', function() {
	DIALOG.close('CANCELLED');
});

// when form is submitted
FORM_SUBMIT_BUTTON.addEventListener('click', function() {
	// write code here for form submission with ajax

	// when ajax form submission is successful
	DIALOG.close('SUBMITTED');
});

// fired when dialog is closed
DIALOG.addEventListener('close', function() {
	if(DIALOG.returnValue === 'SUBMITTED')
		FORM_STATUS.textContent = 'Form is submitted';
	else if(DIALOG.returnValue === 'CANCELLED')
		FORM_STATUS.textContent = 'Form submission is cancelled';
});

// cancel effect of ESC key
DIALOG.addEventListener('cancel', function(e) {
	e.preventDefault();
});

</script>




<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->

<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->

<script>
function myFunction() {
  var table = document.getElementById("myTable");
  var row = table.insertRow(1);
  var cell0 = row.insertCell(0);
  var cell1 = row.insertCell(1);
  var cell2 = row.insertCell(2);
  var cell3 = row.insertCell(3);
  var cell4 = row.insertCell(4);
  var cell5 = row.insertCell(5);
  var cell6 = row.insertCell(6);
  var cell7 = row.insertCell(7);
  cell0.innerHTML = "<input type=\"date\" name=\"date\" id=\"date\" onChange=\"getEmail()\" style=\"width:100%;border:none\"/>";
  cell1.innerHTML = "<select type=\"text\" name=\"customerName\" id=\"customerName\" onChange=\"getEmail()\"  style=\"width:100%;border:none\"/>><option>Select Customer</option> @foreach($client as $item)<option> {{$item['CUSTOMER_FULL_NAME']}} </option>@endforeach</select> ";
  cell2.innerHTML = "<select type=\"text\" name=\"projectName\" id=\"projectName\" onChange=\"getEmail()\" style=\"width:100%;border:none\"/>><option>Select Project</option> @foreach($project as $item)<option> {{$item['PROJECT_NAME']}} </option>@endforeach</select> ";
  cell3.innerHTML = "<select type=\"text\" name=\"phase\"  id=\"phase\" onChange=\"getEmail()\"style=\"width:100%;border:none\"/>><option>Select Phase</option><option> Project Preparation</option><option>Business Blueprint</option><option>Realization</option><option>Final Preparation</option><option>Go-Live</option><option>Hypercare Support</option><option>Training</option><option>Design</option><option>Discover</option><option>Landscape Transformation</option><option>Support</option><option>Organizational Activities</option><option>No Work</option></select> ";
  cell4.innerHTML = "<select type=\"text\" name=\"activity\"  id=\"activity\" onChange=\"getEmail()\" style=\"width:100%;border:none\"/>><option>Select Activity</option><option>Meeting</option><option>Development</option><option>Testing</option><option>Go-Live</option><option>Service Request</option><option>Incident</option><option>Change Request</option><option>Customer Visit</option><option>Training</option><option>Project Training</option><option>Absent</option></select> ";
  cell5.innerHTML = "<input type=\"text\" name=\"Description\" id=\"Description\" onChange=\"getEmail()\" style=\"width:100%;border:none\"/>";
  cell6.innerHTML = "<input type=\"text\" name=\"hour\"  id=\"hour\" onChange=\"getEmail()\"  style=\"width:100%;border:none\"/>";
  cell7.innerHTML = "<button type=\"submit\" name=\"edit\"  style=\"width:100%;border:none\">Edit</button";




}
</script>


<script>
function getEmail(){
  
      var a=document.getElementById("date").value;
  document.getElementById("input1").value=a;

  var b=document.getElementById("customerName").value;
  document.getElementById("input2").value=b;
  
  var c=document.getElementById("projectName").value;
  document.getElementById("input3").value=c;

  var d=document.getElementById("phase").value;
  document.getElementById("input4").value=d;

  var e=document.getElementById("activity").value;
  document.getElementById("input5").value=e;

  var f=document.getElementById("Description").value;
  document.getElementById("input6").value=f;

  var g=document.getElementById("hour").value;
  document.getElementById("input7").value=g;
  


}
</script>


</body>
</html>
