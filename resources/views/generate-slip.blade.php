<!doctype html>
<html lang="en" class="light-theme">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- loader-->
	  <link href="assets/css/pace.min.css" rel="stylesheet" />
	  <script src="assets/js/pace.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

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
    <script src="assets/js/backend.js" defer></script>
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

              <!--start card-->
              <div class="card">
                    <div class="card-body">
                      <div class="border p-3 rounded">
                      <h4 class="mb-0 text-capitalize">Generate Payslip</h4>
                       <hr>
                      <form class="row g-3" action="{{route("new.paySlip")}}" method="GET">
                        @csrf
                        <div class="col-6">
                            <label class="form-label">Employee Name</label>
                            <select id="name_of_employee" name="fullName" class="single-select">

                              @foreach ($employee_names as $Single_emp_name)
                              <option value="{{$Single_emp_name}}">{{$Single_emp_name}}</option>
                              @endforeach
                             
                            </select>
                        </div>
                        <div class="col-6">
                          <label class="form-label">Basic Salary</label>
                          <input name="basicSalary" type="number" id="first_basic_salary"  class="form-control" required>
                        </div>
                        <div class="form-space"></div>
                        <hr>
                        <h6>Period</h6>
                        <div class="col-6 col-lg-4">
                            <div class="mb-3">
                        <label class="form-label">Start Date</label>
                        <input name="startDate" class="result form-control" type="text" id="startdate" placeholder="Pick Date" readonly>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="mb-3">
                        <label class="form-label">End Date</label>
                        <input name="endDate" class="result form-control" type="text" id="enddate" placeholder="Pick Date" readonly>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                        <label class="form-label">Days in Month</label>
                        <input name="daysInMonth" id="daysInMonth" class="form-control mb-3" type="number" placeholder="" aria-label="default input example" readonly>
                        </div>
                        <div class="col-6 col-lg-4">
                        <label class="form-label">Paid Days</label>
                            <input name="paidDays" class="form-control mb-3" type="number" placeholder="" aria-label="default input example">
                        </div>
                        <div class="col-6 col-lg-4">
                        <label class="form-label">LOP Days</label>
                            <input name="LopDays" class="form-control mb-3" type="number" placeholder="" aria-label="default input example">
                        </div>
                        <div class="col-6 col-lg-4">
                        <label class="form-label">Overtime Days</label>
                            <input name="overTimeDays" class="form-control mb-3" type="number" placeholder="" aria-label="default input example">
                        </div>
                        <div class="form-space"></div>
                        <hr>

                        <!-- Salary Calculation-->
                        <!--earnings-->
                        <div class="col-lg-6 col-12 px-4" >

                       
                        <h6>Earnings</h6>
                        <div class="col-lg-12 form-field-main">
                          <label class="form-label-inline" style="padding: 7px 0;">Basic Salary</label>
                          <input id="basicSalary" type="number" class="form-control mb-3 form-field" readonly>
                        </div>
                        <div class="col-lg-12 form-field-main">
                          <label class="form-label-inline" style="padding: 7px 0;">Attendance Allowance</label>
                          <input name="attendanceAllowance" id="attendanceAllowance" value="0" type="number" class="form-control mb-3 form-field">
                        </div>
                        <div class="col-lg-12 form-field-main">
                          <label class="form-label-inline" style="padding: 7px 0;">F&B Allowane</label>
                          <input name="fAndBAllowance" id="fAndBAllowance" value="0" type="number" class="form-control mb-3 form-field">
                        </div>
                        <div class="col-lg-12 form-field-main">
                          <label class="form-label-inline" style="padding: 7px 0;"><b>Gross Salary</b></label>
                          <input name="grossSalary" id="grossSalary"  type="number" class="form-control mb-3 form-field" readonly>
                        </div>
                          <br>
                          <h6>Other Earnings</h6>
                          <div class="col-lg-12 form-field-main">
                            <label class="form-label-inline" style="padding: 7px 0;">Bonus</label>
                            <input name="bonus" id="bonus" value="0" type="number" class="form-control mb-3 form-field">
                          </div>
                          <div class="col-lg-12 form-field-main">
                            <label class="form-label-inline" style="padding: 7px 0;">Over Time Pay</label>
                            <input name="overTimePay" id="overTime" value="0" type="number" class="form-control mb-3 form-field">
                          </div>
                        <!--  <div class="col-lg-12">
                            <label class="form-label" style="padding: 7px 0;">Other</label>
                          <div class="col-lg-12 form-field-main">
                            <input type="text" class="form-control mb-3" style="width:48%!important">
                            <input type="number" class="form-control mb-3" style="width:48%!important;margin-left: auto;">
                            </div>
                          </div> -->
                          <div class="col-lg-12 pb-4">
                            <div class="btn-group">


                              <button onclick="addFields()" type="button" class="btn btn-outline-primary btn-sm">Add Other</button>
                              <button onclick="removeFields()" type="button" class="btn btn-outline-danger btn-sm">Remove</button>
                            </div>
                           </div>
                           <div id="otherEarnings" style="display: flex; flex-wrap:wrap;" >
                            {{-- <input type="text" class="form-control mb-3 form-field-other "  placeholder="Other Earning">
                            <input type="number" class="form-control mb-3 form-field-other-second otherAmount"  placeholder="Amount"> --}}
                            </div>
                           <input type="number" name="otherEarnings" id="total_other_Earnings" hidden>

                          <div class="col-lg-12 form-field-main">
                            <label class="form-label-inline fs-5" style="padding: 7px 0;"><b>Total Earnings</b></label>
                            <input name="totalEarnings" id="totalEarning"  type="number" class="form-control mb-3 form-field" readonly>
                          </div>
                      </div>
                      <!--end earnings-->

                      <!--start deductions-->
                        <div class="col-lg-6 px-4">
                          <h6>Deductions</h6>
                          <div class="col-lg-12 form-field-main">
                            <label class="form-label-inline" style="padding: 7px 0;">From You EPF 8%</label>
                            <input name="youEpf" id="youEpf" type="number" class="form-control mb-3 form-field" readonly>
                          </div>
                          <div class="col-lg-12 form-field-main">
                            <label class="form-label-inline" style="padding: 7px 0;">From Company EPF 12%</label>
                            <input name="companyEpf" id="companyEpf" type="number" class="form-control mb-3 form-field" readonly>
                          </div>
                          <div class="col-lg-12 form-field-main">
                            <label class="form-label-inline" style="padding: 7px 0;">From Company ETF 3%</label>
                            <input name="companyEtf" id="companyEtf" type="number" class="form-control mb-3 form-field" readonly>
                          </div>
                          <div class="col-lg-12 form-field-main">
                            <label class="form-label-inline" style="padding: 7px 0;">Salary Advance</label>
                
                    <input name="salaryAdvance"  id="salaryAdvance" value="" type="number" class="form-control mb-3 form-field" readonly>
                           
                          </div>
                          
                          <br>
                          <h6 class="pb-2">Other Deductions</h6>


                            <div class="col-lg-12 pb-4" style="display: flex!important;">
                              <div class="btn-group">
                                <button onclick="add_deduction()" type="button" class="btn btn-outline-primary btn-sm">Add Other</button>
                                <button onclick="remove_deduction()" type="button" class="btn btn-outline-danger btn-sm">Remove</button>
                              </div>
                             </div>
                             {{-- class="col-lg-12 form-field-main" --}}
                             <div style="display: flex; flex-wrap:wrap;"  id="otherDeductionsField">
                              {{-- <input type="text" class="form-control mb-3 form-field-other" placeholder="Other Deduction">
                              <input type="number" class="form-control mb-3 form-field-other-second otherDeductionAmount" placeholder="Amount"> --}}
                              </div>

                              <input type="number" name="otherDeductions" id="total_other_deductions" hidden>

                             <div class="col-lg-12 form-field-main">
                               <label class="form-label-inline fs-5" style="padding: 7px 0;"><b>Total Deductions</b></label>
                               <input name="totalDeductions" id="totalDeductions" type="number" class="form-control mb-3 form-field" readonly>
                             </div>
                        </div>
                        <!--end deductions-->
                        
                        <hr>

                          <div class="col-lg-6 px-4" >
                            <div class="col-lg-12 form-field-main">
                              <label class="form-label-inline fs-5" style="padding: 7px 0;"><b>Net Pay</b></label>
                              <input name="netPay" id="netPay" type="number" class="form-control mb-3 form-field" readonly>
                            </div>
                          </div>
                        

                        <div class="col-lg-6 px-4">
                          <div class="d-grid">
                            <button onclick="add_others()" type="submit" class="btn btn-primary fs-5">Generate</button>
                          </div>
                        </div>
                        
                      </form>
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

  <script>
    
    $(document).ready(function(){
    // Get value from input element on the page
    var employee_name = $("#name_of_employee").val();
        
        // Send the input data to the server using get
        $.get("/get_advance", {name: employee_name} , function(data){
            // Display the returned data in browser
            $("#salaryAdvance").val(data);
        });
         
        $.get("/attendance_allowance", {name: employee_name} , function(data){
            // Display the returned data in browser
            $("#attendanceAllowance").val(data);
        });
        $.get("/fAndB_allowance", {name: employee_name} , function(data){
            // Display the returned data in browser
            $("#fAndBAllowance").val(data);
        });
     
    // Send the input data to the server using get
    $.get("/get_basic", {name: employee_name} , function(data){
            // Display the returned data in browser
            $("#first_basic_salary").val(data);
            var first_basic_salary=$("#first_basic_salary").val();
            $("#basicSalary").val(first_basic_salary);


      var basicSalary=$("#basicSalary").val();


      ///////////////////////////////EARNINGS/////////////////////////////////////////
      var attendanceAllowance=document.getElementById("attendanceAllowance");
      var fAndBAllowance=document.getElementById("fAndBAllowance");
      var grossSalary=document.getElementById("grossSalary");
      var bonus=document.getElementById("bonus");
      var overTime=document.getElementById("overTime");


      var attendance_allowance= $("#attendanceAllowance").val();
      var fAndB_allowance=$("#fAndBAllowance").val();

      $("#grossSalary").val(parseInt(basicSalary)+parseInt(attendance_allowance)+parseInt(fAndB_allowance));
      $("#totalEarning").val(parseInt(basicSalary)+parseInt(attendance_allowance)+parseInt(fAndB_allowance));

       //////////////////////////////DEDUCTIONS///////////////////////////////////////


         $("#youEpf").val(basicSalary*0.08);
         $("#companyEpf").val(basicSalary*0.12);
         $("#companyEtf").val(basicSalary*0.03);

        var sum_of_taxes=parseFloat($("#youEpf").val())+parseFloat($("#companyEpf").val())+parseFloat($("#companyEtf").val());
        var total_deductions=sum_of_taxes+ parseFloat($("#salaryAdvance").val());
        $("#totalDeductions").val(total_deductions);



        /////////////////////////////////GET NET PAY////////////////////////////////////

        var netPay=parseFloat($("#totalEarning").val())-parseFloat($("#totalDeductions").val());
        $("#netPay").val(netPay);
        
            
        });
     
    ////////////////////////////////////CHANGE NAME/////////////////////////////////////////

    $('#name_of_employee').change(function () { 
      
      // Get value from input element on the page
        var employee_name = $("#name_of_employee").val();
        
        // Send the input data to the server using get
        $.get("/get_advance", {name: employee_name} , function(data){
            // Display the returned data in browser
            $("#salaryAdvance").val(data);
        });
        $.get("/attendance_allowance", {name: employee_name} , function(data){
            // Display the returned data in browser
            $("#attendanceAllowance").val(data);
        });
        $.get("/fAndB_allowance", {name: employee_name} , function(data){
            // Display the returned data in browser
            $("#fAndBAllowance").val(data);
        });
        
        // Send the input data to the server using get
    $.get("/get_basic", {name: employee_name} , function(data){
            // Display the returned data in browser
            $("#first_basic_salary").val(data);

            var first_basic_salary=$("#first_basic_salary").val();
            $("#basicSalary").val(first_basic_salary);



            /////////////////////Setting values zero/////////////////////////////////////////

            
            $("#bonus").val(0);
            $("#overTime").val(0);
            $("#total_other_Earnings").val(0);
            $("#total_other_deductions").val(0);

            var basicSalary=$("#basicSalary").val();
            var attendance_allowance= $("#attendanceAllowance").val();
            var fAndB_allowance=$("#fAndBAllowance").val();

            
            /////////////////////Removing other items///////////////////////////////////////


            $("#otherEarnings").empty();
            $("#otherDeductionsField").empty();

             
             ///////////////////////////////EARNINGS/////////////////////////////////////////
                

                  $("#grossSalary").val(parseInt(basicSalary)+parseInt(attendance_allowance)+parseInt(fAndB_allowance));
                  $("#totalEarning").val(parseInt(basicSalary)+parseInt(attendance_allowance)+parseInt(fAndB_allowance));

            //////////////////////////////DEDUCTIONS///////////////////////////////////////


                  $("#youEpf").val(basicSalary*0.08);
                  $("#companyEpf").val(basicSalary*0.12);
                  $("#companyEtf").val(basicSalary*0.03);

                  var sum_of_taxes=parseFloat($("#youEpf").val())+parseFloat($("#companyEpf").val())+parseFloat($("#companyEtf").val());
                  var total_deductions=sum_of_taxes+ parseFloat($("#salaryAdvance").val());
                   $("#totalDeductions").val(total_deductions);



  /////////////////////////////////GET NET PAY////////////////////////////////////

                  var netPay=parseFloat($("#totalEarning").val())-parseFloat($("#totalDeductions").val());
                  $("#netPay").val(netPay);






        });

      
    });


      

  })
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

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>


  </body>
</html>