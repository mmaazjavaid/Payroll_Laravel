
<?php
$myfile = fopen("{$employee[0]->fullName}.pdf", 'w');
// $txt = "BEGIN:VCARD\nVERSION:3.0\nFN;CHARSET=UTF-8:{$name}\nN;CHARSET=UTF-8:;{$name};;;\nNICKNAME;CHARSET=UTF-8:\nEMAIL;CHARSET=UTF-8;type=HOME,INTERNET:{$email}\nTEL;TYPE=CELL:{$phone}\nEND:VCARD";
$txt="<html>";
fwrite($myfile, $txt);
$txt="<body > <h1>{$employee[0]->fullName}</h1>";
fwrite($myfile, $txt);
$txt="</body></html>";
fwrite($myfile, $txt);
fclose($myfile);


?>
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
             <div class="menu-title">Salary Advance</div>
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

                <div class="card radius-10 alert-danger">
                    <div class="card-header py-3">
                         <div class="row align-items-center g-3 text-center">
                             
                                <h4>Please review the payslip again. Once you send, it can't be undone.</h4>
                             
                         </div>
                    </div>
                </div>

                <div class="card radius-10" id="payslip">
                  <div class="card-header py-3 invoice-header">
                       <div class="row align-items-center g-3">
                         <div class="col-12 col-lg-6 text-center">
                            @if($employee[0]->workLocation =='PeppaPig-Gampaha') 
                            <img src="assets/images/invoice-logo.png" width="400px;">         
                           @else
                           <img src="assets/images/dutralogo.png" width="400px;">       
                           @endif
                           
                         </div>
                         <div class="col-12 col-lg-6 text-center border-start">
                          <p class="fs-5"><b>Company Name</b></p>
                          <p class="fs-6">Address Line 1<br>Address Line 2<br>Line 3</p>
                          <p class="fs-6"><a href="tel:0000000" class="invoice-links">000000</a><br><a href="mailto:admin@name.com" class="invoice-links">admin@name.com</a></p>
                         </div>
                       </div>
                  </div>
                  <div class="card-header py-2">
                      <div class="row text-center pt-2">
                          <p class="fs-5">Payslip For the Period of {{$payslip->startDate}} to {{$payslip->endDate}}</p>
                      </div>
                    </div>
                  <div class="card-header py-2">
                    <div class="row row-cols-1 row-cols-lg-2">
                      <div class="col">
                       <div class="">
                          <dl class="row">
                              <dt class="col-sm-6">Employee ID</dt>
                              <dd class="col-sm-6">{{$employee[0]->staffId}}</dd>
                              <dt class="col-sm-6">Employee Name</dt>
                              <dd class="col-sm-6">{{$employee[0]->fullName}}</dd>
                              <dt class="col-sm-6">Designation</dt>
                              <dd class="col-sm-6">{{$employee[0]->designation}}</dd>
                              <dt class="col-sm-6">Location</dt>
                              <dd class="col-sm-6">{{$employee[0]->workLocation}}</dd>
                              <dt class="col-sm-6">Gender</dt>
                              <dd class="col-sm-6">{{$employee[0]->gender}}</dd>
                          </dl>
                        </div>
                      </div>
                      <div class="col">
                       <div class="">
                          <dl class="row">
                              <dt class="col-sm-6">Paid Days</dt>
                              <dd class="col-sm-6">{{$payslip->paidDays}}</dd>
                              <dt class="col-sm-6">LOP Days</dt>
                              <dd class="col-sm-6">{{$payslip->LopDays}}</dd>
                              <dt class="col-sm-6">Days in Month</dt>
                              <dd class="col-sm-6">{{$payslip->daysInMonth}}</dd>
                              <dt class="col-sm-6">Overtime Days</dt>
                              <dd class="col-sm-6">{{$payslip->overTimeDays}}</dd>
                              <dt class="col-sm-6"># NIC</dt>
                              <dd class="col-sm-6">{{$employee[0]->nic}}</dd>
                          </dl>
                        </div>
                     </div>
                     </div>
                  </div>

                 <div class="card-body">
                  <div class="row">
                  <div class="col-lg-6">    
                   <div class="table-responsive">
                     <table class="table table-invoice">
                        <thead>
                           <tr>
                              <th>EARNINGS</th>
                              <th class="text-center" width="10%">AMOUNT</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>
                                 <span class="text-inverse">Basic</span><br>
                                 </td>
                              <td class="text-center">${{$payslip->basicSalary}}</td>
                           </tr>
                           <tr>
                              <td>
                                 <span class="text-inverse">Attendance Allowance</span><br>
                                 </td>
                              <td class="text-center">${{$payslip->attendanceAllowance}}</td>
                           </tr>
                           <tr>
                              <td>
                                 <span class="text-inverse">F&B Allowance</span><br>
                                 </td>
                              <td class="text-center">${{$payslip->fAndBAllowance}}</td>
                           </tr>
                           <tr>
                              <td>
                                 <span class="text-inverse"><b>Gross Salary</b></span><br>
                                 </td>
                              <td class="text-center">${{$payslip->grossSalary}}</td>
                           </tr>
                        </tbody>
                     </table>
                    </div>
                  </div>
                  <div class="col-lg-6">    
                      <div class="table-responsive">
                        <table class="table table-invoice">
                           <thead>
                              <tr>
                                 <th>DEDUCTIONS</th>
                                 <th class="text-center" width="10%">AMOUNT</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <span class="text-inverse">From You EPF 8%</span><br>
                                    </td>
                                 <td class="text-center">${{$payslip->youEpf}}</td>
                              </tr>
                              <tr>
                                  <td>
                                     <span class="text-inverse">From Company EPF 12%</span><br>
                                     </td>
                                  <td class="text-center">${{$payslip->companyEpf}}</td>
                               </tr>
                               <tr>
                                  <td>
                                     <span class="text-inverse">From Company ETF 3%</span><br>
                                     </td>
                                  <td class="text-center">${{$payslip->companyEtf}}</td>
                               </tr>
                               <tr>
                                  <td>
                                     <span class="text-inverse">Salary Advance</span><br>
                                     </td>
                                  <td class="text-center">${{$payslip->salaryAdvance}}</td>
                               </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="col-lg-6">    
                      <div class="table-responsive">
                        <table class="table table-invoice">
                           <thead>
                              <tr>
                                 <th>Other Earnings</th>
                                 <th class="text-center" width="10%"></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <span class="text-inverse">Over Time Pay</span><br>
                                    </td>
                                 <td class="text-center">${{$payslip->overTimePay}}</td>
                              </tr>
                              <tr>
                                  <td>
                                     <span class="text-inverse">Bonus</span><br>
                                     </td>
                                  <td class="text-center">${{$payslip->bonus}}</td>
                               </tr>
                               <tr>
                                  <td>
                                     <span class="text-inverse">Other Earning</span><br>
                                     </td>
                                  <td class="text-center">${{$payslip->otherEarnings}}</td>
                               </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="col-lg-6">    
                      <div class="table-responsive">
                        <table class="table table-invoice">
                           <thead>
                              <tr>
                                 <th><br></th>
                                 <th class="text-center" width="10%"></th>
                              </tr>
                           </thead>
                           <tbody>
                              {{-- <tr>
                                 <td>
                                    <span class="text-inverse">Total</span><br>
                                    </td>
                                 <td class="text-center">${{$payslip[0]->totalEarnings}}</td>
                              </tr> --}}
                              <tr>
                                  <td>
                                     <span class="text-inverse">Other Deduction</span><br>
                                     </td>
                                  <td class="text-center">${{$payslip->otherDeductions}}</td>
                               </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  

                  </div>
                  <div class="row">
                      <div class="col-lg-6">    
                          <div class="table-responsive">
                            <table class="table table-invoice">
                               <thead>
                                  <tr>
                                     <th><br></th>
                                     <th class="text-center" width="10%"></th>
                                  </tr>
                               </thead>
                               <tbody>
                                  <tr>
                                     <td>
                                  <h5><span class="text-inverse fs-5">Total Earnings</span><br></h5>
                                        </td>
                                     <td class="text-center fs-5"><h5>${{$payslip->totalEarnings}}</h5></td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                         
                      </div>
                      <div class="col-lg-6">    
                          <div class="table-responsive">
                            <table class="table table-invoice">
                               <thead>
                                  <tr>
                                     <th><br></th>
                                     <th class="text-center" width="10%"></th>
                                  </tr>
                               </thead>
                               <tbody>
                                  <tr>
                                     <td>
                                        <h5><span class="text-inverse fs-5">Total Deductions</span><br></h5>
                                        </td>
                                     <td class="text-center fs-5"><h5>${{$payslip->totalDeductions}}</h5></td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                         
                      </div>

                      
  
                      </div>
                  
                  
                  
      
                  <div class="row  align-items-center m-0">
                    <div class="col col-auto p-4">
                       
                    </div>
                    <div class="col col-auto p-4">
                       <i class="bi bi-plus-lg text-muted"></i>
                    </div>
                    <div class="col col-auto me-auto p-4">
                       
                    </div>
                    <div class="col bg-primary col-auto p-4">
                     <p class="mb-0 text-white">NET PAY</p>
                     <h4 class="mb-0 text-white">${{$payslip->netPay}}</h4>
                    </div>
                  </div><!--end row-->
      
                  
                
                 </div>
      
                 
                 
                </div>
                  <div class="card radius-10 alert-warning">
                    <div class="card-header py-3">
                         <div class="row align-items-end g-3">
                          
                            <div class="col-12 col-lg-12 text-md-end">
                                <a id="back_button" href="{{route("returnBack.payslip",["paySlip"=>$payslip->all()])}}" onclick="confirmation()" class="btn btn-danger me-2"><ion-icon name="caret-back"></ion-icon>Back</a>
                                <a href="{{route("make.pdf",["paySlip"=>$payslip->all(),"employee"=>$employee[0]])}}"  class="btn btn-secondary me-2"><ion-icon name="print-sharp"></ion-icon>Print</a>
                                {{-- <a href="{{route("store.payslip",["paySlip"=>$payslip->all()])}}" class="btn btn-primary me-2">Send <ion-icon name="send"></ion-icon></a> --}}
                                <a href="{{route("send.mail",["paySlip"=>$payslip->all(),"employee"=>$employee[0]])}}" class="btn btn-primary me-2">Send <ion-icon name="send"></ion-icon></a>
                            </div>
                             
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

     <!-- Script to print the content of a div -->
    <script>

confirmation=()=>{
   if (confirm("All the other deduction and other earnings will be removed! ")) {
          }else{
            document.getElementById("back_button").setAttribute("href","#");
            location.reload();
   }
   

}



        function printDiv() {
            var divContents = document.getElementById("payslip").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            a.document.write('<body > <h1>Div contents are <br>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>


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