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



  
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
 
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

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
                <a href="./viewEmployee" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>  
                  <p>View Employee</p>
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
          <li class="nav-item has-treeview menu-open">
            <a href="./createRole" class="nav-link ">
              <i class="fa fa-tasks"></i>  
              <p>
                 Project
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./addProjectScreen" class="nav-link active">
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark">Add Project</h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="createAuthorization">Home</a></li>
              <li class="breadcrumb-item active">Add project</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-----------------------------------Screen Main content------------------->
  <!-- Main content Staring  -->







 <div class="card">
   @if(session('status'))
          <div class="alert alert-success" role="alert">
          {{session('status')}}
        </div>
        @endif
 <label>
                  <td>
               
                      <button  onclick="window.location.href='./project';"  type="button" id="fill-form-button"  style="margin-left:20px"   class="btn btn-info"><i class="ion-person-add"></i>Create Project</button>
                    </td>     
                    
                </label>
<!-- Allocation started -->
                 <form   method="POST" class="form-horizontal" style="font-size:15px;">
                  @csrf
                 <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
              <div class="row">
             
          <div class="col-12 col-sm-6 col-md-6">
          
              
                  
                  
                      <input type="hidden"  disabled name="PROJ_NAME" class="form-control" id="PROJ_NAME" placeholder="Employee Name">


                 <div class="form-group">
                    <label for="inputEmail3" class=" col-form-label">Employee Name</label>
                      <input type="text"  disabled name="ALLOC_EMP" class="form-control" id="ALLOC_EMP" placeholder="Employee Name">
                  </div>
                 
             
              <!-- /.info-box-content -->
           
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
          
             

              <div class="form-group">
                    <label for="inputEmail3" class=" col-form-label">Bench</label>
                  
                      <input disabled type="text"  name="ALLOC_PRCTG" class="form-control" id="ALLOC_PRCTG" placeholder="Bench">
                  
                  </div>
              <!-- /.info-box-content -->
           
            <!-- /.info-box -->
          </div>
         
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3" >
         
              
          <div class="form-group">
                    <label for="inputEmail3" class=" col-form-label">Allocation</label>
                  
                      <input type="number"  name="" class="form-control" id="" placeholder="Allocation">
                  
                  </div>
           
              <!-- /.info-box-content -->
         
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
         
          <!-- /.col -->
        </div>
             
             
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-info">Update</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
</form>

<!-- Allocation Ended -->




    <!-- Editing project start-->
                  <form  action= "{{route('addProjectScreen.store')}}" method="POST" class="form-horizontal" style="font-size:15px;">
                  @csrf
                 <div class="modal fade " id="editModel">
        <div class="modal-dialog">
          <div class="modal-content">
         
          <div class="card-header">
                <h3 class="card-title">Update Project Data</h3>
                  

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           

             <input type="hidden"  name="PROJECT_NAME" class="form-control" id="PROJECT_NAME" placeholder="Name">
             <input type="hidden"  name="PROJECT_DESCRIPTION" class="form-control" id="PROJECT_DESCRIPTION" placeholder="Name">
             <input type="hidden"  name="CLIENT_COMPANY" class="form-control" id="CLIENT_COMPANY" placeholder="Name">      
             <input type="hidden"  name="EST_BUDGET" class="form-control" id="EST_BUDGET" placeholder="Name">
             <input type="hidden"  name="EST_AMT_SPEND" class="form-control" id="EST_AMT_SPEND" placeholder="Name">
             <input type="hidden"  name="PROJECT_DURATION" class="form-control" id="PROJECT_DURATION" placeholder="Name">
             <input type="hidden"  name="START_DATE" class="form-control" id="START_DATE" placeholder="Start Date">
             <input type="hidden"  name="OVERDUE" class="form-control" id="OVERDUE" placeholder="Name">
               <div class="card-body">
              
                   
                   
                      <input type="hidden"  name="PROJECT_ID" class="form-control" id="PROJECT_ID" placeholder="Name">
                  
                 
                  <div class="form-group">
                    <label for="inputEmail3" class=" col-form-label">Project Leader </label>
                   
                      
                       <div class="search_select_box">
            <select name="PROJECT_LEADER" id="PROJECT_LEADER"  data-live-search="true" class="form-control"> 
             @foreach($employee as $item)
            <option >{{$item['EMP_FULLNAME']}}  </option>
               @endforeach
       </select>
          </div>
                   
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class=" col-form-label">Employee Name</label>
                   
                     
                       <div class="search_select_box">
         
            <select name="EMP_FULLNAME" id="EMP_FULLNAME" multiple data-live-search="true" class="form-control"> 
           
             @foreach($employee as $item)
            <option >   {{$item['EMP_FULLNAME']}}  </option>
               @endforeach
       </select>
          </div>
                 
                  </div>
                   <div class="form-group">
                    <label for="inputEmail3" class=" col-form-label">End Name</label>
                  
                      <input type="date"  name="END_DATE" class="form-control" id="END_DATE" placeholder="End Date">
                  
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class=" col-form-label">End Name</label>
                  
                    

                       <select  name="PROJECT_STATUS" aria-controls="example1"id="PROJECT_STATUS"  class="form-control" >
                        <option value="">Select Status </option>
                         <option value="On Hold" >On Hold</option>
                         <option value="Cancelled">Cancelled</option>
                         <option value="In Process">In Process</option>
                         <option value="Not Started Yet">Not Started Yet</option>
                      </select>
                   
                  </div>
                  </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-info ">Update</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</form>

<!--editing project ended -->
  
 
              
              <!-- /.card-header -->
             
<div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                 <thead>
                  <tr >
                      <th  >
                        Project Name
                      </th>
                      <th >
                          Project Description
                      </th>
                      <th>
                          Client
                      </th>
                      <th>
                          Project leader
                      </th>
                      <th>
                          Employees
                      </th>
                      <th >
                          Estimated Budget
                      </th>
                      <th >
                          Amount Spent
                      </th>
                      <th >
                          Project Duration(Months)
                      </th>
                      <th >
                          Start Date
                      </th>
                      <th >
                          End Date
                      </th>
                      <th >
                          overdue(Days)
                      </th>
                      <th  >
                          Edit
                      </th>
                      <th  >
                          Allocation
                      </th>
                     
                      <th >
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
                             {{$item['PROJECT_NAME']}} 
                          </a>
                          <br>
                         
                      </td>
                      <td>
                          <a>
                              {{$item['PROJECT_DESCRIPTION']}} 
                          </a>
                          <br>
                         
                      </td>
                      <td class="project_progress">
                           <a>
                              {{$item['CLIENT_COMPANY']}} 
                          </a>
                          <br>
                          
                      </td>
                        <td class="project_progress">
                           <a>
                              {{$item['PROJECT_LEADER']}} 
                          </a>
                          <br>
                          
                      </td>
                        <td class="project_progress">
                           <a>
                              {{$item['EMP_FULLNAME']}} 
                          </a>
                          <br>
                          
                      </td>
                        <td class="project_progress">
                           <a>
                              {{$item['EST_BUDGET']}} 
                          </a>
                          <br>
                          
                      </td>
                        <td class="project_progress">
                           <a>
                              {{$item['EST_AMT_SPEND']}} 
                          </a>
                          <br> 
                      </td>
                        <td class="project_progress">
                           <a>
                              {{$item['PROJECT_DURATION']}} 
                          </a>
                          <br> 
                      </td>
                        <td class="project_progress">
                           <a>
                              {{$item['START_DATE']}} 
                          </a>
                          <br> 
                      </td>
                        <td class="project_progress">
                           <a>
                              {{$item['END_DATE']}} 
                          </a>
                          <br> 
                      </td>
                        <td class="project_progress">
                           <a>
                              {{$item['OVERDUE']}} 
                          </a>
                          <br> 
                      </td>
                    
                      <td class="text-center">
                          <button type="button" id="btninfo" value= "{{$item['PROJECT_ID']}}_{{$item['PROJECT_LEADER']}}_{{$item['EMP_FULLNAME']}}_{{$item['PROJECT_STATUS']}}_{{$item['END_DATE']}}_{{$item['PROJECT_NAME']}}_{{$item['PROJECT_DESCRIPTION']}}_{{$item['CLIENT_COMPANY']}}_{{$item['EST_BUDGET']}}_{{$item['EST_AMT_SPEND']}}_{{$item['PROJECT_DURATION']}}_{{$item['START_DATE']}}_{{$item['OVERDUE']}}_"  class="btn btn-warning btninfo" data-toggle="modal" >
                  <i class="fas fa-edit" >  </i>
                </button>
                
                        
                      </td>
                       <td class="text-center">
                         <button type="button" id="updatebtn" value= "{{$item['PROJECT_NAME']}} "   class="btn btn-info updatebtn" data-target="#modal-lg" data-toggle="modal" >
              <span class="fas fa-clipboard"></span>
                </button>
               
                      </td>
                       <td class="text-center">
                          <span class="badge badge-success"  > {{$item['PROJECT_STATUS']}} </span>
                      </td>
                         <!--------------Table ending---------->
                  </tr>
                  @endforeach
              
              </tbody>
              
              
          </table>
              
                </table>
              </div>


              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>







I<script>
$(document).ready(function(){
$(document).on('click','.btninfo',function(){

    var project_id=$(this).val();

    var MyArray = project_id.split('_');

      document.getElementById("PROJECT_ID").value=MyArray[0];
      console.log("id"+MyArray[0]);
      document.getElementById("PROJECT_LEADER").value=MyArray[1];
      console.log("leader"+MyArray[1]);
      document.getElementById("EMP_FULLNAME").value=MyArray[2];
      console.log("emp"+MyArray[2]);
      document.getElementById("PROJECT_STATUS").value=MyArray[3];
      console.log("status"+MyArray[3]);
      document.getElementById("END_DATE").value=MyArray[4];
      console.log("end"+MyArray[4]);
      document.getElementById("PROJECT_NAME").value=MyArray[5];
      console.log("project_name"+MyArray[5]);
      document.getElementById("PROJECT_DESCRIPTION").value=MyArray[6];
      console.log("description"+MyArray[6]);
      document.getElementById("CLIENT_COMPANY").value=MyArray[7];
      console.log("client"+MyArray[7]);
      document.getElementById("EST_BUDGET").value=MyArray[8];
      console.log("budget"+MyArray[8]);
      document.getElementById("EST_AMT_SPEND").value=MyArray[9];
      console.log("spend"+MyArray[9]);
      document.getElementById("PROJECT_DURATION").value=MyArray[10];
      document.getElementById("START_DATE").value=MyArray[11];
      document.getElementById("OVERDUE").value=MyArray[12];
  


   
    $('#editModel').modal('show');
    
 

});
});

</script>


I<script>
$(document).ready(function(){
$(document).on('click','.updatebtn',function(){

    var project_id=$(this).val();

    var MyArray = project_id.split('_');

    $('#modal-lg').modal('show');

      document.getElementById("PROJ_NAME").value=MyArray[0];
    console.log("id"+MyArray[0]);
<!-- remove this if need-->
    $.ajax({
        type: "POST",
        url: 'http://localhost/timesheet_api/allocation/getEmpAlloc.php',
        data: { _token: "{{ csrf_token() }}"  },
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        cache: false,
        data: {
          '_method': 'POST',
          project_id:project_id
        },
        success: function (data) {
            console.log(data);
        },

        error: function (msg) {

            console.log("Error agya bhai");
        }
    });

    <-- yha tk-->
  

      
    
 

});
});

</script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script>

$(document).ready(function () {
  $('.search_select_box select').selectpicker();
});

</script>


</body>
</html>
