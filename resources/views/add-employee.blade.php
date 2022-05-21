<!doctype html>
<html lang="en" class="light-theme">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- loader-->
	  <link href="assets/css/pace.min.css" rel="stylesheet" />
	  <script src="assets/js/pace.min.js"></script>

    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
    <link href="assets/plugins/datetimepicker/css/classic.css" rel="stylesheet" />
	<link href="assets/plugins/datetimepicker/css/classic.time.css" rel="stylesheet" />
	<link href="assets/plugins/datetimepicker/css/classic.date.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!--Theme Styles-->
    <link href="assets/css/dark-theme.css" rel="stylesheet" />
    <link href="assets/css/semi-dark.css" rel="stylesheet" />
    <link href="assets/css/header-colors.css" rel="stylesheet" />

    <title>HT</title>
  </head>
  <body>
    

 <!--start wrapper-->
    <div class="wrapper">
       
       <!--start sidebar -->
       <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
          <div>
            <img src="assets/images/logo.png" class="logo-icon" alt="logo">
          </div>
          <div>
            <h4 class="logo-text">HT</h4>
          </div>
          <!--<div class="toggle-icon ms-auto"><ion-icon name="menu-sharp"></ion-icon>
          </div>-->
        </div>
        <!--navigation-->


        <ul class="metismenu" id="menu">
          <li>
            <a href="{{route('index.dashboard')}}" class="has-arrow">
              <div class="parent-icon"><ion-icon name="home-sharp"></ion-icon>
              </div>
              <div class="menu-title">Dashboard</div>
            </a>
          </li>
          <li>
            <a href="{{route('generate-slip.dashboard')}}">
              <div class="parent-icon"><ion-icon name="document"></ion-icon>
              </div>
              <div class="menu-title">Generate Payslip</div>
            </a>
          </li>
          <li>
            <a href="{{route('employees.dashboard')}}">
              <div class="parent-icon"><ion-icon name="people"></ion-icon>
              </div>
              <div class="menu-title">Employees</div>
            </a>
          </li>
          <li>
            <a href="{{route('locations.dashboard')}}">
              <div class="parent-icon"><ion-icon name="storefront"></ion-icon>
              </div>
              <div class="menu-title">Locations</div>
            </a>
          </li>
          <li>
            <a href="{{route('payment-history.dashboard')}}">
              <div class="parent-icon"><ion-icon name="documents"></ion-icon>
              </div>
              <div class="menu-title">Payment History</div>
            </a>
          </li>
        </ul>







        <!--end navigation-->
     </aside>
     <!--end sidebar -->

        <!--start top header-->
          <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
              <div class="mobile-menu-button"><ion-icon name="menu-sharp"></ion-icon></div>
              
             <div class="top-navbar-right ms-auto">

              <ul class="navbar-nav align-items-center">
                <li class="nav-item mobile-search-button">
                  <a class="nav-link" href="javascript:;">
                    <div class="">
                      <ion-icon name="search-sharp"></ion-icon>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link dark-mode-icon" href="javascript:;">
                    <div class="mode-icon">
                      <ion-icon name="moon-sharp"></ion-icon> 
                    </div>
                  </a>
                </li>
                <li class="nav-item dropdown dropdown-user-setting">
                  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                    <div class="user-setting">
                      <img src="assets/images/avatars/06.png" class="user-img" alt="">
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                       <a class="dropdown-item" href="javascript:;">
                         <div class="d-flex flex-row align-items-center gap-2">
                            <img src="assets/images/avatars/06.png" alt="" class="rounded-circle" width="54" height="54">
                            <div class="">
                              <h6 class="mb-0 dropdown-user-name">David Archer</h6>
                            </div>
                         </div>
                       </a>
                     </li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                             <div class=""><ion-icon name="settings-outline"></ion-icon></div>
                             <div class="ms-3"><span>Change Password</span></div>
                            </div>
                         </a>
                      </li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item" href="javascript:;">
                           <div class="d-flex align-items-center">
                             <div class=""><ion-icon name="log-out-outline"></ion-icon></div>
                             <div class="ms-3"><span>Logout</span></div>
                           </div>
                         </a>
                      </li>
                  </ul>
                </li>

               </ul>

              </div>
            </nav>
          </header>
        <!--end top header-->
        
<!-- start page content wrapper-->
     <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">   
    <div class="row">
    <div class="col-lg-8 mx-auto">
      <div class="card radius-10">
        <div class="card-body">
         <h4 class="mb-3">Add Employee</h4>
         <br><br>
          <form action="{{route("add.employee")}}" method="POST">
            @csrf
          <!--<div class="mb-4 d-flex flex-column gap-3 align-items-center justify-content-center">
            <div class="user-change-photo shadow">
              <img src="assets/images/avatars/06.png" alt="...">
            </div>
            <button type="button" class="btn btn-outline-primary btn-sm radius-30 px-4"><ion-icon name="image-sharp"></ion-icon>Change Photo</button>
          </div>-->
          <div class="row g-3">
            <div class="col-md-6 col-lg-4">
               <label class="form-label">Staff ID</label>
               <input type="number" name="staffId" class="form-control" id="staff-id">
            </div>
            <div class="col-md-6 col-lg-4">
             <label class="form-label">Work Location</label>
             <select name="workLocation" class="single-select" id="work-location">

               @foreach ($locations as $location)
               <option value="{{$location->name}}">{{$location->name}}</option>
               @endforeach
                
              </select>
           </div>
           <div class="col-md-6 col-lg-4">
            <label class="form-label">Designation</label>
            <input name="designation" type="text" class="form-control" id="designation">
         </div>
           </div>
          <h5 class="mb-0 mt-4">Personal Details</h5>
          <hr>
          <div class="row g-3">
            <div class="col-lg-12">
               <label class="form-label">Full Name</label>
               <input name="fullName" type="text" class="form-control" id="full-name">
            </div>
            <div class="col-md-6 col-lg-6">
                <label class="form-label">Name with Initials</label>
                <input name="nameWithInitials" type="text" class="form-control" id="full-name">
             </div>
            <div class="col-md-6 col-lg-6">
                <label class="form-label">Date of Birth</label>
                <input name="dateOfBirth" class="result form-control" type="text" id="birthdate" placeholder="Pick Date">
           </div>
             <div class="col-md-6 col-lg-6">
                <label class="form-label">Gender</label>
                <select name="gender" class="form-select mb-3" aria-label="Default select example" id="gender-select">
                    <option selected="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
           </div>
           <div class="col-md-6 col-lg-6">
               <label class="form-label">NIC/Driving License #</label>
               <input name="nic" type="text" class="form-control" id="nic">
           </div>
         </div>
         <br>
         <h5 class="mb-0 mt-4">Contact Details</h5>
         <hr>
         <div class="row g-3">
            <div class="col-md-12 col-lg-12">
                <label class="form-label">Address</label>
                <input name="address" type="text" class="form-control" id="address">
            </div>
            <div class="col-md-6 col-sm-12 col-lg-4">
                <label class="form-label">Phone</label>
                <input name="phone" type="tel" class="form-control" id="phone">
            </div>
            <div class="col-md-6 col-sm-12 col-lg-4">
                <label class="form-label">Home Phone</label>
                <input name="homePhone" type="tel" class="form-control" id="home-phone">
            </div>
            <div class="col-md-6 col-sm-12 col-lg-4">
                <label class="form-label">Email Address</label>
                <input name="emailAddress" type="email" class="form-control" id="email">
            </div>
          </div>
        <br>
         <h5 class="mb-0 mt-4">Salary Details</h5>
         <hr>
         <div class="row g-3">
            <div class="col-md-6 col-lg-4">
                <label class="form-label">Basic Salary</label>
                <input name="basicSalary" type="number" class="form-control" id="basic-salary">
            </div>
            <div class="col-md-6 col-lg-4">
              <label class="form-label">Attendance Allowance</label>
              <input name="attendanceAllowance" type="number" class="form-control" id="basic-salary">
          </div>
          <div class="col-md-6 col-lg-4">
            <label class="form-label">F&B Allowance</label>
            <input name="fAndBAllowance" type="number" class="form-control" id="basic-salary">
        </div>
            
          </div>
          <br>
          <h5 class="mb-0 mt-4">Bank Details</h5>
          <hr>
          <div class="row g-3">
             <div class="col-md-6 col-lg-6">
                 <label class="form-label">Account Name</label>
                 <input name="accountName" type="text" class="form-control" id="acc-name">
             </div>
             <div class="col-md-6 col-lg-6">
                <label class="form-label">Account Number</label>
                <input name="accountNumber" type="number" class="form-control" id="acc-num">
            </div>
            <div class="col-md-6 col-lg-6">
                <label class="form-label">Bank Name</label>
                <input name="bankName" type="text" class="form-control" id="bank-name">
            </div>
            <div class="col-md-6 col-lg-6">
                <label class="form-label">Bank Branch</label>
                <input name="bankBranch" type="text" class="form-control" id="bank-branch">
            </div>
             
           </div>
          <br>
          <h5 class="mb-0 mt-4">Emergency Contact Details</h5>
          <hr>
          <div class="row g-3">
             <div class="col-md-6 col-lg-6">
                 <label class="form-label">Name of the Person</label>
                 <input name="nameOfThePerson" type="text" class="form-control" id="emergency-name">
             </div>
             <div class="col-md-6 col-lg-6">
                <label class="form-label">Relationship</label>
                <input name="relationship" type="text" class="form-control" id="relationship">
            </div>
            <div class="col-md-6 col-lg-6">
                <label class="form-label">Phone</label>
                <input name="phoneOfThePerson" type="tel" class="form-control" id="emergency-phone">
            </div>
            <div class="col-md-6 col-lg-6">
                <label class="form-label">Address</label>
                <input name="addressOfThePerson" type="text" class="form-control" id="emergency-address">
            </div>
            </div>
            <br>
          <div class="text-start mt-3">
            <button type="submit" class="btn btn-primary px-4">Add Employee</button>
          </div>
        </div>
       </form>
      </div>
    </div>
  </div><!--end row-->
  </div>
  </div>

<!-- JS Files-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<!--plugins-->
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="assets/plugins/chartjs/chart.min.js"></script>
<script src="assets/js/index.js"></script>
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/table-datatable.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/js/form-select2.js"></script>
<script src="assets/plugins/datetimepicker/js/legacy.js"></script>
<script src="assets/plugins/datetimepicker/js/picker.js"></script>
<script src="assets/plugins/datetimepicker/js/picker.time.js"></script>
<script src="assets/plugins/datetimepicker/js/picker.date.js"></script>
<script src="assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js"></script>
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js"></script>
<script src="assets/js/form-date-time-pickes.js"></script>

<!-- Main JS-->
<script src="assets/js/main.js"></script>


</body>
</html>