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
        <a href="" class="nav-link">Home</a>
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
          <li class="nav-item has-treeview menu-open">
            <a href="./createRole" class="nav-link ">
              <i class="ion-person-add"></i>  
              <p>
                 Employees
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./addEmployee" class="nav-link active">
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
   
    <!-- /.content-header -->
<!-----------------------------------Screen Main content------------------->
  <!-- Main content Staring  -->

            
<div class="card-header">
 <li class="nav-item d-none d-sm-inline-block">
      <h6>Add Employee</h6>
      </li>
       <li class="nav-item d-none d-sm-inline-block">
        <a href="/viewEmployee" class="nav-link">View Employees</a>
      </li>
</div>

<!--/.card-header -->

<div class="card-body">
  <form  id="quickForm" method="POST"  class="form-horizontal">
  @csrf
  <!-- <div class="form-group form-inline">
            <label for="inputEmail3" class="control-label">Employee ID :  &ensp; </label>
           <input name="EMPLOYEE_ID" type="text" class="form-control" id="inputEmail" value ="" placeholder="">               
        <a href="/viewEmployee" class="nav-link">Edit</a>  -->
   

           <!--  <div class="card-body">
                
                <input type="checkbox" name="my-checkbox" value="1" checked data-bootstrap-switch data-off-color="warning" data-on-color="primary">
              </div> -->
                        
           <!--  <button  onclick="window.location.href='./addProjectButton';" type="button" class="btn btn-info"> Edit</button>
           </div> -->
  
      <div class="row">
        <div class="col-md-6">
         
          
          <!-- /.form-group -->
           
          <div class="form-group">
        
            <label  for="inputEmail3" class="col-form-label">Basic Details</label>
            
     
          </div>
          
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
       
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row"> <! row 1-->
        <div class="col-md-6">
          <div class="form-group">
            <label for="inputEmail3" class="control-label">First Name </label>
            <input name="EMPLOYEE_FIRST_NAME" type="text" class="form-control" id="firstName" value="" placeholder="First Name">
          </div>
          <div class="form-group">
            <label name="inputEmail3" class="control-label">Last Name </label>
            <input NAME="EMPLOYEE_LAST_NAME" type="text" class="form-control" id="lastName" value="" placeholder="Last Name">
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="control-label">Address </label>
            <input name="ADDRESS" type="text" class="form-control" id="address" value="" placeholder="Address">
          </div>
          <!--Hello -->
          <div class="form-group ">
                        <div class="custom-control custom-checkbox">
                       
                          <input  name="is_RM"  value="1" class="custom-control-input"  type="checkbox" id="customCheckbox1">
                          <label  for="customCheckbox1"   class="custom-control-label">is Employee Reporting Manager?</label>
                        </div>         
                      
          </div>
          <!--Hello -->
          
          <!-- /.form-group -->
          <div class="form-group">
        
            <label id="inputPassword3" class=" col-form-label">Manager Details</label>
           
           
    
          </div>
          
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label for="inputEmail3" class="control-label">Middle Name</label>
            <input name="EMPLOYEE_MIDDLE_NAME" type="text" class="form-control" id="middleName"  value="" placeholder="Middle  Name">
          </div>
            <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="EMPLOYEE_EMAIL" class="form-control" id="email"  value="" placeholder="Email ID">
                  </div>
          
          
           <div class="form-group">
            <label for="inputEmail3" class="control-label">Contact Number </label>
            <input name="CONTACT" type="text" class="form-control" id="contact" placeholder="Contact Number">
          </div>
          
          
          <!-- /.form-group -->
        
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="inputEmail3" class="control-label">Reporting Manager</label>

            <select name="input123"  aria-controls="example1" id="input123" onChange="getEmail()" class="form-control" >
                        <option  value="">Reporting Manager </option>
                        @foreach($collection as $item)
                        <option  value="{{$item['EMP_FULLNAME']}}_{{$item['EMPLOYEE_EMAIL']}}" > {{$item['EMP_FULLNAME']}}   </option>

                             @endforeach
                      </select>
          
          </div>
          <!-- /.form-group -->
         
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label for="inputEmail3" class="control-label">RM Email</label>  
         
            <select DISABLED name="input1234"  aria-controls="" id="input1234" class="form-control" >
                        <option  value="">RM Email </option>
                        @foreach($collection as $item)
                        <option value="{{$item['EMP_FULLNAME']}}_{{$item['EMPLOYEE_EMAIL']}}" > {{$item['EMPLOYEE_EMAIL']}}   </option>
                       
                             @endforeach
                      </select>
          </div>
          <!-- /.form-group -->
        
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
       <input  type="hidden" name="REPORTING_MANAGER" type="text" class="form-control" id="REPORTING_MANAGER" placeholder="Contact Number">
        <input type="hidden"  name="REPORTING_MANAGER_EMAIL_ID" type="text" class="form-control" id="REPORTING_MANAGER_EMAIL_ID" placeholder="Contact Number">
       
      <!-- /.row -->
     <div class="footer float-right"
            <div class="col-ms-6 float-right">
              <button type="button" id="close-button" class="btn btn-danger">Cancel</button>
              &emsp;
             <button type="submit" onclick="myFunction()" class="btn btn-success ">
                  Add Employee
                </button>
            </div>
          
         
  </form>
  <!--/.form-->
</div>
<!-- /.card-body-->

         

          <div class="wrapper">
   <div class="card-body">
    
               
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









<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../../plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->

<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>





<script>
function getEmail(){
  
      
  var x=document.getElementById("input123").value;
  document.getElementById("input1234").value=x;


   console.log(x);
   var MyArray = x.split('_');
   console.log(MyArray[0]);
  
  document.getElementById("REPORTING_MANAGER").value=MyArray[0];
  document.getElementById("REPORTING_MANAGER_EMAIL_ID").value=MyArray[1];
}
</script>


<!-- Bootstrap 4 -->

<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>


<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>

<script>
function myFunction(){
     @foreach($employeeID as $item)
  alert("Generated Employee ID is "+{{$item['EMPLOYEE_ID']}});
   @endforeach
}

</script>










</body>
</html>
