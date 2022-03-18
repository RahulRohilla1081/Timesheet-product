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
@extends('layouts.sideBar')



  <div class="wrapper">


  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create Authorization</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Authorization</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-----------------------------------Screen Main content------------------->
  <!-- Main content Staring  -->



 
                   <div class ="card">
                <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
               <td>  <div class="row"><div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="example1_length">
                <label>
                Show 
                
                <select name="example1_length" aria-controls="example1" class="form-control-sm">
                
                <option value="10">
                5
                </option>
                
                
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
               
                </select> 
                
                entries &ensp; 
               
                  <td>
                    <dialog id="form-dialog" style="border:0px;background:none;width:66%;">
                    <div class="card card-info">
                    <div class="card-header">
                <h3 class="card-title">Create Authorization</h3>
                   </div>
                  <form class="form-horizontal" style="font-size:15px;">
                      <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Authorization Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                    </div>
                  </div>
                
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Screen Name</label>
                   
                    <div class="col-sm-10">
                      
                      <select name="example1_length" aria-controls="example1" class="form-control" >
                        <option>Select Screen </option>
                         <option>Screen 1</option>
                      </select>
                    </div>
                  </div>
                  <!--dropdown menu starting -->
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Module Name</label>
                   
                    <div class="col-sm-10">
                      
                      <select name="example1_length" aria-controls="example1" class="form-control" >
                        <option>Select Module</option>
                         <option>Module 1</option>
                      </select>
                    </div>
                  </div>
             
                <!--dropdown menu ending-->

                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Description">
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="button" id="close-button" class="btn btn-info">Cancle</button>
                  <button type="submit" class="btn btn-info default float-right ">Create</button>
                </div>
                </form>
                </div>
                    </dialog>
                      <button  type="button" id="fill-form-button"  class="btn btn-info"><i class="ion-person-add"></i>Create</button>
                    </td>     
                    
                </label>
                
                 
                </div>
                </div>
                </td>
                <td>
                <div class="col-sm-12 col-md-6">
                <div style="float:right;" id="example1_filter" class="dataTables_filter form-inline">
                  <label>Search: &ensp; 

                    <input type="search" class="form-control" placeholder="" aria-controls="example1">&emsp;
                    <button type="button" class="btn btn-info"><i class="fa fa-download" style="font-size:15px"></i></button>
                  </label>
                
                </div>
                </div></td>
                </div>


                <!-- uppr page hading ending-->
                <div class="row"><div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
           <!--       <thead>
                  <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Browser</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Engine version</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="">CSS grade</th></tr>
                  </thead> -->



<!--table staring-------------------------------------------->


<div class="card-body p-0">
          <table class="table table-bordered table-striped dataTable dtr-inline">
              <thead>
                  <tr >
                      <th style="width: 20%" >
                        Name
                      </th>
                      <th style="width: 30%">
                          Description
                      </th>
                      <th style="width: 10%">
                          Screen
                      </th>
                      <th style="width:10%">
                         Module
                      </th>
                      <th style="width: 10%" class="text-center">
                          Action
                      </th>
                     
                      <th style="width: 20%" class="text-center">
                      Status
                      </th>
                  </tr>
              </thead>
                <!--------------Table starting---------->
        
              <tbody> 
              @foreach($collection as $item)
              <tr>
                      <td>
                          <a>
                             {{$item['AUTH_NAME']}} 
                          </a>
                          <br>
                         
                      </td>
                      <td>
                          <a>
                              {{$item['DESCRIPTION']}} 
                          </a>
                          <br>
                         
                      </td>
                      <td class="project_progress">
                           <a>
                              {{$item['SCREEN_ID']}} 
                          </a>
                          <br>
                          
                      </td>
                     <td class="project_progress">
                           <a>
                            
                          </a>
                          <br>
                          
                      </td>
                      <td class="text-center">
                         <button type="button" class="btn btn-warning">
                         <i class="fas fa-edit" >
                         </i>
                         </button>
                      </td>
                       <td class="text-center">
                          <span class="badge badge-success" >Activated</span>
                      </td>
                         <!--------------Table ending---------->
                  </tr>
                  @endforeach
              </tbody>
              
          </table>
        </div>








<!--table ending-------------------------------------------->


                  

        
                  
                  
                  </table>
                </div>
                </div>
                <div  class="row"><div  class="col-sm-12 col-md-5">
                <div   class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                Showing 1 to 1 of 1 entries
                </div>
                </div>
                <div  class="col-sm-12 col-md-7">
                <div  style="float:right; class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                <ul class="pagination">
                <li class="paginate_button page-item previous disabled" id="example1_previous">
                <a  href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous
                </a>
                </li>
                <li  class="paginate_button page-item active">
                <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">
                1
                </a>
                </li>
                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">
                2
                </a>
                </li>
                <li class="paginate_button page-item ">
                <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">
                3
                </a>
                </li>
                <li class="paginate_button page-item ">
                <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">
                4
                </a></li><li class="paginate_button page-item ">
                <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">
                5
                </a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">
                6
                </a></li>
                <li   class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">
                Next
                </a>
                </li>
                </ul>
                </div>
                </div>
                </div>
                </div>
              </div>

              </div>
              
             
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


</body>
</html>
