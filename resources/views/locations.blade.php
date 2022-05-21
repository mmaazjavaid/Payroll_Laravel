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
              <div class="menu-title">Salary Advances</div>
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

            <div class="row"> 
                <div class="col-lg-6"> 
                <div class="input-group mb-3">



                  <form
                  method="POST"
                   action="{{route("add.location")}}"
                   style="
                   display:flex;
                  ">
                  @csrf
                    <input type="text" name="location" class="form-control" placeholder="Add New Location" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                    <button class="btn btn-outline-secondary" style="height: 40px; width:170px;" type="submit" id="button-addon2">Add Location</button>
                  
                  </form>
                    
                </div>
                </div>
            </div> 
                <br>


               @foreach ($NetPays as $NetPay  )




               <div class="card radius-10 w-100">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                   <h4 class="mb-0">{{$location_names[$loop->index]}}</h4>
                  </div>
                  <br>
                <div class="row">
                  <!--start card-->
            
                  <div class="col-12 col-lg-3 col-xl-3 d-flex">
                    <div class="card radius-10 bg-transparent shadow-none w-100">
                      <div class="card-body p-0">
                        <div class="card radius-10">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="widget-icon radius-10 bg-light-info text-info">
                                    <ion-icon name="cash-outline"></ion-icon>
                                  </div>
                                  
                                </div>
                                <h4 class="my-3">$
                                  @if (isset($net_pay_loc[$loop->index]))
                                  {{$net_pay_loc[$loop->index]}}
                                  @else
                                      {{0}}
                                  @endif
                                </h4>
                                <div class="progress mt-1" style="height: 5px;">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 100%"></div>
                                </div>
                                <p class="mb-0 mt-2">Total Net Pay</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end card-->
                  <!--start card-->
                  <div class="col-12 col-lg-3 col-xl-3 d-flex">
                    <div class="card radius-10 bg-transparent shadow-none w-100">
                      <div class="card-body p-0">
                        <div class="card radius-10">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="widget-icon radius-10 bg-light-info text-info">
                                    <ion-icon name="cash-outline"></ion-icon>
                                  </div>
                                  
                                </div>
                                <h4 class="my-3">$

                                  @if (isset($basic_salarie_loc[$loop->index]))
                                  {{($basic_salarie_loc[$loop->index])*0.08}}
                                  @else
                                      {{0}}
                                  @endif

                                </h4>
                                <div class="progress mt-1" style="height: 5px;">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 100%"></div>
                                </div>
                                <p class="mb-0 mt-2">Total EPF 8%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end card-->
                  <!--start card-->
                  <div class="col-12 col-lg-3 col-xl-3 d-flex">
                    <div class="card radius-10 bg-transparent shadow-none w-100">
                      <div class="card-body p-0">
                        <div class="card radius-10">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="widget-icon radius-10 bg-light-info text-info">
                                    <ion-icon name="cash-outline"></ion-icon>
                                  </div>
                                  
                                </div>
                                <h4 class="my-3">$

                                  @if (isset($basic_salarie_loc[$loop->index]))
                                  {{($basic_salarie_loc[$loop->index])*0.12}}
                                  @else
                                      {{0}}
                                  @endif
                                </h4>
                                <div class="progress mt-1" style="height: 5px;">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 100%"></div>
                                </div>
                                <p class="mb-0 mt-2">Total EPF 12%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end card-->
                  <!--start card-->
                  <div class="col-12 col-lg-3 col-xl-3 d-flex">
                    <div class="card radius-10 bg-transparent shadow-none w-100">
                      <div class="card-body p-0">
                        <div class="card radius-10">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="widget-icon radius-10 bg-light-info text-info">
                                    <ion-icon name="cash-outline"></ion-icon>
                                  </div>
                                  
                                </div>
                                <h4 class="my-3">$

                                  @if (isset($basic_salarie_loc[$loop->index]))
                                  {{($basic_salarie_loc[$loop->index])*0.03}}
                                  @else
                                      {{0}}
                                  @endif
                                </h4>
                                <div class="progress mt-1" style="height: 5px;">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 100%"></div>
                                </div>
                                <p class="mb-0 mt-2">Total ETF 3%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end card-->
                </div>

                   <div class="table-responsive mt-2 ">
                    <table id="example2" class="table align-middle mb-0 ">
                      <thead class="table-light">
                        <tr>
                          <th>Month</th>
                          <th>Net Pay</th>
                          <th>EPF 8%</th>
                          <th>EPF 12%</th>
                          <th>ETF 3%</th>
                          </tr>
                      </thead>
                      <tbody>
                        {{$index=$loop->index}}
                        @foreach ($NetPay as $single_pay   )
                        
                        
                        <tr>
                          <td>{{$single_pay->month_year}}</td>
                          <td>{{$single_pay->total_netPay}}</td>
                          <td>{{($basicSalaries[$index][$loop->index]->total_basic)*0.08}}</td>
                          <td>{{($basicSalaries[$index][$loop->index]->total_basic)*0.12}}</td>
                          <td>{{($basicSalaries[$index][$loop->index]->total_basic)*0.03}}</td>
                          </tr>



                        @endforeach
                       
                        </tbody>
                    </table>
                  </div>
                  </div>
                </div>





                   
               @endforeach

                






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

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>


  </body>
</html>