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


<!-- table fix data-->
  <style>
	.fixTableHead {
	overflow-y: auto;
	height: 110px;
	}
	.fixTableHead thead th {
	position: sticky;
	top: 0;
	}
	table {
	border-collapse: collapse;		
	width: 100%;
	}
	th,
	td {
	padding: 8px 15px;
	border: 2px solid #529432;
	}
	th {
	background: #ABDD93;
	}
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
@extends('layouts.sideBar')



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
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-user-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
</div>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- /.content-header -->
<!-----------------------------------Screen Main content------------------->
  <!-- Main content Staring  -->

            
<div class="card-header">
  <h3 class="card-title">Add Project</h3>
</div>
<!--/.card-header -->

<div class="card-body">
  <form  class="form-horizontal" style="font-size:15px;">
                 
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="inputEmail3" class="control-label">Project Name</label>
            <input name="PROJECT_NAME" type="text" class="form-control" id="inputEmail3" placeholder="Project Name">
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label  for="inputEmail3" class="col-form-label">Client</label>
            <input name="CLIENT_COMPANY" type="text" class="form-control" id="inputEmail3" placeholder="Client">
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label class=" control-label">Project Description</label>
            <textarea name="PROJECT_DESCRIPTION"id="inputDescription" class="form-control" rows="5"></textarea>
          </div>
          <!-- /.form-group -->
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="inputEmail3" class="control-label">Estimated Budget</label>
            <input name="EST_BUDGET" type="text" class="form-control" id="inputEmail3" placeholder="Estimated Budget ">
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label id="inputPassword3" class=" col-form-label">Estimated Duration</label>
            <input name="PROJECT_DURATION" type="text" class="form-control" id="inputPassword3" placeholder="Estimated Duration">
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label for="inputEmail3" class="control-label">Amount Spent</label>
            <input name="EST_AMT_SPEND" type="text" class="form-control" id="inputEmail3" placeholder="Amount Spent">
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label id="inputPassword3" class=" col-form-label">Start Date </label>
            
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input name="START_DATE"type="date" class="form-control" placeholder="Estimated Budget">
                  
              </div>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="inputEmail3" class="control-label">Project Leader</label>
            <input name="PROJECT_LEADER" type="text" class="form-control" id="inputEmail3" placeholder="Project Leader">
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label id="inputPassword3" class=" col-form-label">Employees</label>
            <input name="" type="text" class="form-control" id="inputPassword3" placeholder="Employees">
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
   
            
            <label id="inputPassword3" class=" col-form-label">End Date </label>
            
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input name="END_DATE" type="date" class="form-control" placeholder="">
                  
             
          </div>
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label id="inputPassword3" class=" col-form-label">Status</label>
             <select  name="PROJECT_STATUS" aria-controls="example1" class="form-control" >
                        <option value="">Select Status </option>
                         <option value="1" >On Hold</option>
                         <option value="2">Cancelled</option>
                         <option value="3">In Process</option>
                         <option value="4">On Hold</option>
                      </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
        <div class="card-footer">
            <div class="col-ms-6 float-right">
              <button type="button" id="close-button" class="btn btn-danger">Cancel</button>
              &emsp;
              <button type="submit" Background Color:#0a0a23 class="btn btn-success default float-right ">Create</button>
            </div>
          </div>        
      <!-- /.row -->
  </form>
  <!--/.form-->
</div>
<!-- /.card-body-->

            
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


</body>
</html>
