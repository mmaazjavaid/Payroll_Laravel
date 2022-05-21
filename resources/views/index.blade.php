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
          
            <h2>Stats</h2>
            <br>
            <h5>Last Payment Date</h5>
            <hr>
            <br><br>
          <!-- start section-->
            <div class="row">
              <div class="col-12 col-md-6 col-lg-3 col-xl-3 d-flex">
                <div class="card radius-10 bg-transparent shadow-none w-100">
                  <div class="card-body p-0">
                    <div class="card radius-10">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                        <div class="widget-icon radius-10 bg-light-info text-info">
                            <ion-icon name="cash-outline"></ion-icon>
                          </div>
                          
                        </div>
                        <h4 class="my-3">{{$this_month_netPay_total}}</h4>
                        <div class="progress mt-1" style="height: 5px;">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 100%"></div>
                        </div>
                        <p class="mb-0 mt-2">Net Pay This Month</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 col-xl-3 d-flex">
                <div class="card radius-10 bg-transparent shadow-none w-100">
                  <div class="card-body p-0">
                    <div class="card radius-10">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="widget-icon radius-10 bg-light-info text-info">
                            <ion-icon name="cash-outline"></ion-icon>
                          </div>
                          
                        </div>
                        <h4 class="my-3">{{$this_month_basic_total*0.08}}</h4>
                        <div class="progress mt-1" style="height: 5px;">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 100%"></div>
                        </div>
                        <p class="mb-0 mt-2">EPF 8% This Month</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 col-xl-3 d-flex">
                <div class="card radius-10 bg-transparent shadow-none w-100">
                  <div class="card-body p-0">
                    <div class="card radius-10">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="widget-icon radius-10 bg-light-info text-info">
                            <ion-icon name="cash-outline"></ion-icon>
                          </div>
                          
                        </div>
                        <h4 class="my-3">{{$this_month_basic_total*0.12}}</h4>
                        <div class="progress mt-1" style="height: 5px;">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 100%"></div>
                        </div>
                        <p class="mb-0 mt-2">EPF 12% This Month</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 col-xl-3 d-flex">
                <div class="card radius-10 bg-transparent shadow-none w-100">
                  <div class="card-body p-0">
                    <div class="card radius-10">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="widget-icon radius-10 bg-light-info text-info">
                            <ion-icon name="cash-outline"></ion-icon>
                          </div>
                          
                        </div>
                        <h4 class="my-3">{{$this_month_basic_total*0.03}}</h4>
                        <div class="progress mt-1" style="height: 5px;">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 100%"></div>
                        </div>
                        <p class="mb-0 mt-2">ETF 3%  This Month</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mb-5">
              <div class="col">
              <div class="text-center">


              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleExtraLargeModal">View List</button>
                      <!-- Modal -->

                      <div class="modal fade" id="exampleExtraLargeModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Taxes for Month-Year</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="table-responsive mt-2 ">
                        <table id="example3" class="table align-middle mb-0 ">
                          <thead class="table-light">
                            <tr>
                              <th>#ID</th>
                              <th>Name</th>
                              <th>Work Location ID</th>
                              <th>Net Pay</th>
                              <th>EPF 8%</th>
                              <th>EPF 12%</th>
                              <th>ETF 3%</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $i=1;
                            ?>
                            @foreach ($this_month_all_payslips as $this_month_single_payslip)
                            
                            <tr>
                           
                              <td>{{$i}}</td>
                              <td>{{$this_month_single_payslip->fullName }}</td>
                              <td>{{$this_month_single_payslip->locationId }}</td>
                              <td>{{$this_month_single_payslip->netPay }}</td>
                              <td>{{$this_month_single_payslip->youEpf }}</td>
                              <td>{{$this_month_single_payslip->companyEpf }}</td>
                              <td>{{$this_month_single_payslip->companyEtf }}</td>
                              
                              
                            
                            </tr>
                            <?php
                            $i++;
                            ?>
                            @endforeach
                            </tbody>
                        </table>
                      </div>
                              </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>

              </div>
              </div>
              </div>


              <div class="row">
              <div class="col-12">
              <div class="card radius-10 w-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                       <h4 class="mb-0">Taxes - Past Months</h4>
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
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($past_month_taxes as $past_month_tax)
                            <?php
                            $dateObj   = DateTime::createFromFormat('!m', $past_month_tax->month);
                            $monthName = $dateObj->format('F');
                            ?>
                            <tr>
                              <td>
                                {{$monthName}}-{{$past_month_tax->year}}
                              </td>
                              <td>{{$past_month_tax->total_netPay}}</td>
                              <td>{{$past_month_tax->total_basic*0.08}}</td>
                              <td>{{$past_month_tax->total_basic*0.12}}</td>
                              <td>{{$past_month_tax->total_basic*0.03}}</td>
                              <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                  <a href="{{route("view-single.taxsheet",["month"=>$past_month_tax->month])}}" class="text-primary" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
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



              


            </div>
            <!-- end section-->
            <h3 style="margin-top:30px;">Locations</h3>
            <?php
            $i_for_loc=0;
            ?>
            @foreach ($locations as $location)
            
            <h5 style="margin-top:20px;">{{$location->name}}</h5>
            <hr>
            <br><br>
           
            
            <!-- start section-->
            <div class="row">
              <div class="col-12 col-md-6 col-lg-3 col-xl-3 d-flex">
                <div class="card radius-10 bg-transparent shadow-none w-100">
                  <div class="card-body p-0">
                    <div class="card radius-10">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                        <div class="widget-icon radius-10 bg-light-info text-info">
                            <ion-icon name="cash-outline"></ion-icon>
                          </div>
                          
                        </div>
                        <h4 class="my-3">
                        <?php
                        $bool_for_zero=true;
                        ?>
                        @foreach ($locations_net_pay as $single_netPay)
                            @if ($single_netPay["locationId"]==$location->id)
                            {{$single_netPay["total_netPay"]}}
                            <?php
                            $bool_for_zero=false;
                            ?>
                            @endif
                        @endforeach 
                         
                        @if ($bool_for_zero==true)
                            {{0}}
                        @endif

                        </h4>
                        <div class="progress mt-1" style="height: 5px;">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 100%"></div>
                        </div>
                        <p class="mb-0 mt-2">Net Pay This Month</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 col-xl-3 d-flex">
                <div class="card radius-10 bg-transparent shadow-none w-100">
                  <div class="card-body p-0">
                    <div class="card radius-10">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="widget-icon radius-10 bg-light-info text-info">
                            <ion-icon name="cash-outline"></ion-icon>
                          </div>
                          
                        </div>
                        <h4 class="my-3">
                          <?php
                          $bool_for_zero=true;
                          ?>
                          @foreach ($locations_net_pay as $single_netPay)
                          @if ($single_netPay["locationId"]==$location->id)
                          {{$single_netPay["total_basic"]*0.08}}
                          <?php
                          $bool_for_zero=false;
                          ?>
                          @endif
                      @endforeach 
                       
                      @if ($bool_for_zero==true)
                          {{0}}
                      @endif
                        </h4>
                        <div class="progress mt-1" style="height: 5px;">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 100%"></div>
                        </div>
                        <p class="mb-0 mt-2">EPF 8% This Month</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 col-xl-3 d-flex">
                <div class="card radius-10 bg-transparent shadow-none w-100">
                  <div class="card-body p-0">
                    <div class="card radius-10">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="widget-icon radius-10 bg-light-info text-info">
                            <ion-icon name="cash-outline"></ion-icon>
                          </div>
                          
                        </div>
                        <h4 class="my-3">
                          <?php
                          $bool_for_zero=true;
                          ?>
                          @foreach ($locations_net_pay as $single_netPay)
                          @if ($single_netPay["locationId"]==$location->id)
                          {{$single_netPay["total_basic"]*0.12}}
                          <?php
                          $bool_for_zero=false;
                          ?>
                          @endif
                      @endforeach 
                       
                      @if ($bool_for_zero==true)
                          {{0}}
                      @endif
                        </h4>
                        <div class="progress mt-1" style="height: 5px;">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 100%"></div>
                        </div>
                        <p class="mb-0 mt-2">EPF 12% This Month</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 col-xl-3 d-flex">
                <div class="card radius-10 bg-transparent shadow-none w-100">
                  <div class="card-body p-0">
                    <div class="card radius-10">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="widget-icon radius-10 bg-light-info text-info">
                            <ion-icon name="cash-outline"></ion-icon>
                          </div>
                          
                        </div>
                        <h4 class="my-3">

                          <?php
                          $bool_for_zero=true;
                          ?>
                          @foreach ($locations_net_pay as $single_netPay)
                          @if ($single_netPay["locationId"]==$location->id)
                          {{$single_netPay["total_basic"]*0.03}}
                          <?php
                          $bool_for_zero=false;
                          ?>
                          @endif
                      @endforeach 
                       
                      @if ($bool_for_zero==true)
                          {{0}}
                      @endif
                        </h4>
                        <div class="progress mt-1" style="height: 5px;">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 100%"></div>
                        </div>
                        <p class="mb-0 mt-2">ETF 3%  This Month</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <!-- end section-->


            @endforeach
            

            
            
           
          

          </div>  
          <!-- end page content-->
         </div>
         <!--end page content wrapper-->


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
    <!-- Main JS-->
    <script src="assets/js/main.js"></script>


  </body>
</html>