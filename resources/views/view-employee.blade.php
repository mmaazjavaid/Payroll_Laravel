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
    <link href="assets/plugins/OwlCarousel/css/owl.carousel.min.css" rel="stylesheet" />

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
                              <h6 class="mb-0 dropdown-user-name">jhon doe</h6>
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
                             <div class="ms-3">
                              <span 
                              style="display: inline;"
                              href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"

                             >Logout
                            </span>

                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                             </div>
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

                <!--start row-->
                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-12">
                      <div class="card overflow-hidden radius-10">
                        
                        <!--<div class="profile-cover bg-dark position-relative mb-4">
                          <div class="user-profile-avatar shadow position-absolute top-50 start-0 translate-middle-x">
                            <img src="assets/images/avatars/06.png" alt="...">
                          </div>
                        </div>-->
                        <div class="row pt-4 px-3 position-relative">
                        <h3 class="mb-2">{{$employee[0]->fullName}}</h3>
                      </div>
                        <div class="card-body">
                          <div class="d-flex align-items-start justify-content-between">
                            
                            
                          
                            <div class="col-lg-6">
                                <dl class="row">
                                  <dt class="col-sm-6">Designation</dt>
                                  <dd class="col-sm-6">{{$employee[0]->designation}}</dd>
                                  <dt class="col-sm-6">Work Location</dt>
                                  <dd class="col-sm-6">{{$employee[0]->workLocation}}</dd>
                                  <dt class="col-sm-6">Mobile</dt>
                                  <dd class="col-sm-6">{{$employee[0]->phone}}</dd>
                              </dl>
                            </div>
                            <div class="col-lg-6">
                              <dl class="row">
                                <dt class="col-sm-6">Basic Salary</dt>
                                <dd class="col-sm-6">{{$employee[0]->basicSalary}}</dd>
                                <dt class="col-sm-6">Attendance Allowance</dt>
                                <dd class="col-sm-6">{{$employee[0]->attendanceAllowance}}</dd>
                                <dt class="col-sm-6">F&B Allowance</dt>
                                <dd class="col-sm-6">{{$employee[0]->fAndBAllowance}}</dd>
                            </dl>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div><!--end row-->


                <!--start row-->
                <div class="row">
                <div class="col-12 col-lg-12 col-xl-12">
                <div class="card overflow-hidden radius-10">
                <div class="card-body">

                    <!--start product more info-->
                  <div class="product-more-info">
                    <ul class="nav nav-tabs mb-0" role="tablist">
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#personal-details" role="tab" aria-selected="true">
                          <div class="d-flex align-items-center">
                            <div class="tab-title text-uppercase fw-500">Personal Details</div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#contact-details" role="tab" aria-selected="false">
                          <div class="d-flex align-items-center">
                            <div class="tab-title text-uppercase fw-500">Contact Details</div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#bank-details" role="tab" aria-selected="false">
                          <div class="d-flex align-items-center">
                            <div class="tab-title text-uppercase fw-500">Bank Details</div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#emergency-contact" role="tab" aria-selected="false">
                          <div class="d-flex align-items-center">
                            <div class="tab-title text-uppercase fw-500">Emergency Contact</div>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <div class="tab-content pt-3">
                      <div class="tab-pane fade" id="personal-details" role="tabpanel">
                        <dl class="row">
                            <dt class="col-sm-3">Full Name</dt>
                            <dd class="col-sm-9">{{$employee[0]->fullName}}</dd>
                            <dt class="col-sm-3">Date of Birth</dt>
                            <dd class="col-sm-9">{{$employee[0]->dateOfBirth}}</dd>
                            <dt class="col-sm-3">Gender</dt>
                            <dd class="col-sm-9">{{$employee[0]->gender}}</dd>
                            <dt class="col-sm-3">NIC/Driving License #</dt>
                            <dd class="col-sm-9">{{$employee[0]->nic}}</dd>
                        </dl>
                      </div>
                      <div class="tab-pane fade" id="contact-details" role="tabpanel">
                        <dl class="row">
                            <dt class="col-sm-3">Address</dt>
                            <dd class="col-sm-9">{{$employee[0]->address}}</dd>
                            <dt class="col-sm-3">Home Phone</dt>
                            <dd class="col-sm-9">{{$employee[0]->homePhone}}</dd>
                            <dt class="col-sm-3">Email Address</dt>
                            <dd class="col-sm-9">{{$employee[0]->emailAddress}}</dd>
                        </dl>
                      </div>
                      <div class="tab-pane fade" id="bank-details" role="tabpanel">
                        <dl class="row">
                            <dt class="col-sm-3">Account Name</dt>
                            <dd class="col-sm-9">{{$employee[0]->accountName}}</dd>
                            <dt class="col-sm-3">Account Number</dt>
                            <dd class="col-sm-9">{{$employee[0]->accountNumber}}</dd>
                            <dt class="col-sm-3">Bank Name</dt>
                            <dd class="col-sm-9">{{$employee[0]->bankName}}</dd>
                            <dt class="col-sm-3">Bank Branch</dt>
                            <dd class="col-sm-9">{{$employee[0]->bankBranch}}</dd>
                        </dl>
                      </div>
                      <div class="tab-pane fade show active" id="emergency-contact" role="tabpanel">
                        <dl class="row">
                            <dt class="col-sm-3">Name of the Person</dt>
                            <dd class="col-sm-9">{{$employee[0]->nameOfThePerson}}</dd>
                            <dt class="col-sm-3">Relationship</dt>
                            <dd class="col-sm-9">{{$employee[0]->relationship}}</dd>
                            <dt class="col-sm-3">Phone</dt>
                            <dd class="col-sm-9">{{$employee[0]->phoneOfThePerson}}</dd>
                            <dt class="col-sm-3">Address</dt>
                            <dd class="col-sm-9">{{$employee[0]->addressOfThePerson}}</dd>
                        </dl>
                      </div>
                    </div>
                  </div>
              <!--end product more info-->

              

                            
                </div>
                </div>
                </div>
                </div>
                <!--end row-->     
                
                <div class="card radius-10 w-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                       <h5 class="mb-0">Payslips</h5>
                      </div>
                       <div class="table-responsive mt-2 ">
                        <table id="example2" class="table align-middle mb-0 ">
                          <thead class="table-light">
                            <tr>
                              <th>Month</th>
                              <th>Basic Salary</th>
                              <th>Attendance Allowance</th>
                              <th>F&B Allowance</th>
                              <th>Overtime pay</th>
                              <th>Net Pay</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($payslips as $payslip)
                           <?php $date = $payslip->endDate;  ?>
                            <tr>
                              <td>
                                {{date('F, Y', strtotime($date))}}
                              </td>
                              <td>{{$payslip->basicSalary}}</td>
                              <td>{{$payslip->attendanceAllowance}}</td>
                              <td>{{$payslip->fAndBAllowance}}</td>
                              <td>{{$payslip->overTimePay}}</td>
                              <td>{{$payslip->netPay}}</td>
                              <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                  <a href="{{route("singleSlip.payslip",["id"=>$payslip->id,"employeeId"=>$employee[0]->staffId])}}"><button type="button" class="btn btn-primary btn-sm">View More</button></a>
                                  </div>
                              </td>
                            </tr>
                            @endforeach
                           
                            </tbody>
                        </table>
                        </div>
                        </div>
                        </div>
                      
                



                    



        
        </div>
                
        </div>
        

          <!--start footer-->
          <footer class="footer">
            <div class="footer-text">
               Copyright © 2021. All right reserved.
            </div>
            </footer>
          <!--end footer-->


        <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
         <!--End Back To Top Button-->
  
         


          <!--start overlay-->
           <div class="overlay nav-toggle-icon"></div>
          <!--end overlay-->

     </div>
  <!--end wrapper-->


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
    <script src="assets/plugins/OwlCarousel/js/owl.carousel.min.js"></script>
	<script src="assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js"></script>
    <script src="assets/js/product-details.js"></script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>


  </body>
</html>