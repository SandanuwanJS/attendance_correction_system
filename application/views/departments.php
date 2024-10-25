<!doctype html>
<html lang="en" dir="ltr">


    <!-- Mirrored from codeigniter.spruko.com/adminor/adminor/index3 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2024 08:22:30 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>

        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Codeigniter Bootstrap Responsive Admin Web Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="Keywords" content="admin dashboard template, codeigniter admin template, codeigniter admin dashboard, codeigniter admin panel, admin dashboard codeigniter, bootstrap admin template, codeigniter dashboard, codeigniter admin theme, bootstrap admin, dashboard template, dashboard codeigniter, admin dashboard, bootstrap dashboard template, admin dashboard design, bootstrap dashboard">

        <!-- Title -->
        <title>Raigam Attendance System | Excel Details</title>


        <!-- Favicon -->
        <link rel="icon" href="<?= base_url('') ?>assets/img/brand/raigam-logo.png" type="image/x-icon">

        <!-- styles code -->

        <!-- Bootstrap css -->
        <link href="<?= base_url('') ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style">

        <!-- Style css -->
        <link href="<?= base_url('') ?>assets/css/style.css" rel="stylesheet">
        <link href="<?= base_url('') ?>assets/css/plugins.css" rel="stylesheet">

        <!-- Icons css -->
        <link href="<?= base_url('') ?>assets/css/icons.css" rel="stylesheet">

        <!-- Animations css -->
        <link href="<?= base_url('') ?>assets/css/animate.css" rel="stylesheet">

        <!--Script css-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



        <!-- Switcher css -->
        <link href="<?= base_url('') ?>assets/switcher/css/switcher.css" rel="stylesheet">
        <link href="<?= base_url('') ?>assets/switcher/demo.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <!-- End styles -->

    </head>    

    <body class="main-body app sidebar-mini ltr">

        <!-- switcher code -->

        <div class="switcher-wrapper">
            <div class="demo_changer">
                <div class="form_holder sidebar-right1">
                    <div class="row">
                        <div class="predefined_styles">
                            <div class="swichermainleft text-center">
                                <div class="p-3 d-grid gap-2">
                                    <a href="https://codeigniter.spruko.com/adminor/" class="btn ripple btn-primary mt-0">View Demo</a>
                                    <a class="btn ripple btn-success" data-bs-target=".buynow" data-bs-toggle="modal" href="#">Buy Now</a>
                                    <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-danger">Our Portfolio</a>
                                </div>
                            </div>










                        </div>
                    </div>
                </div>
            </div>
        </div>        <!-- End switcher -->

        <!-- Loader -->
        <div id="global-loader">
            <img src="<?= base_url('') ?>assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /Loader -->

        <!-- page -->
        <div class="page custom-index">

            <!-- app header code -->

            <!-- End app header Code -->
            <?php include_once BASEPATH . ('../application/views/includes/headerPanel.php'); ?>
            <!-- app sidebar Code -->

            <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
            <div class="sticky">
                <aside class="app-sidebar sidebar-scroll">
                    <div class="main-sidebar-header active">
                        <a class="desktop-logo logo-light active" href="index-2.html"><img src="<?= base_url('') ?>assets/img/brand/raigam-logo.png" class="main-logo" alt="logo"></a>
                        <a class="desktop-logo logo-dark active" href="index-2.html"><img src="<?= base_url('') ?>assets/img/brand/raigam-logo.png" class="main-logo" alt="logo"></a>
                        <a class="logo-icon mobile-logo icon-light active" href="index-2.html"><img src="<?= base_url('') ?>assets/img/brand/raigam-logo.png" alt="logo"></a>
                        <a class="logo-icon mobile-logo icon-dark active" href="index-2.html"><img src="<?= base_url('') ?>assets/img/brand/raigam-logo.png" alt="logo"></a>
                    </div>
                    <div class="main-sidemenu">
                        <div class="main-sidebar-loggedin">

                        </div>
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
                        <?php include_once BASEPATH . ('../application/views/includes/sidePanel.php'); ?>

                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
                    </div>
                </aside>
            </div>			<!-- End app sidebar Code -->

            <!-- main-content -->
            <div class="main-content app-content">

                <!-- container -->
                <div class="main-container container-fluid">


                    <!-- breadcrumb -->
                    <div class="breadcrumb-header justify-content-between">
                        <div>
                            <h4 class="content-title mb-2 mb-xl-0">Employee Details</h4>
                        </div>
                        <div class="d-flex my-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('') ?>Home/index">Home</a></li>
                                    <li class="breadcrumb-item active " aria-current="page">View Excel Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- /breadcrumb -->

                    <!-- main-content-body -->
                    <div class="main-content-body">
                        <div class="row row-sm">
                            <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                                <!--div-->
                                <div class="card">
                                    <div class="card-header">
                                        <p class="mg-b-20 text-muted tx-13 mb-0">All details related to one employee is shown here</p>
                                        
                                        <a href="<?= base_url('') ?>ExcelForm/excel_viewlist" class="btn btn-info  btn-rounded " style="float: left">View All List</a>
                                        
                                        <a href="<?= base_url('') ?>ExcelForm/linkIndex" class="btn btn-info  btn-rounded " style="float: right">Add New PDF</a>

                                        <a href="<?= base_url('') ?>ExcelForm/incomplete_Employee_List" class="btn btn-info btn-rounded" style="margin-left: 600px"> Incomplete list </a>
                                        <!-- <div class="card-title">Employee Details</div> -->

                                    </div>


                                <!--Departments names drop down-->
                                    <div class="row row-sm">
                                        <div class="col-lg">
                                        <ul class="sidemenu-list">
                                            <label for="title"> <h5> Select Department </h5> </label>
                                            <select name="title" class="slide-item" id="departments" onchange="callFunc1();">
                                                <option value="">       Select                  </option>
                                                <option value="KOR">    Kindom Of Raigam        </option>
                                                <option value="NO">     New Organization        </option>
                                                <option value="NFN">    Nutra Food/Nimthera     </option>
                                                <option value="ST">     Soya/Tasma              </option>
                                                <option value="VT">     Vinegar/Tasma           </option>
                                                <option value="FGSN">   FG Store/Nimthera       </option>
                                                <option value="CT">     Cofee/Tasma             </option>
                                                <option value="DBT">    Devani Betha/Tasma      </option>
                                                <option value="NFT">    Nutra Food/Tasma        </option>
                                                <option value="GT">     Gango/Tasma             </option>
                                                <option value="RMST">   RM Stores/Tasma         </option>
                                                <option value="EST">    Engineering Store/Tasma </option>
                                                <option value="FT">     Flour/Tasma             </option>
                                                <option value="ET">     Electrical/Tasma        </option>
                                                <option value="RT">     Return/Tasma            </option>
                                                <option value="AMT">    Auto Mobile/Tasma       </option>
                                                <option value="WT">     Workshop/Tasma          </option>
                                                <option value="MT">     Margarine/Tasma         </option>
                                                <option value="RMS">    RM Stores               </option>
                                                <option value="QAT">    QA/Tasma                </option>
                                                <option value="BST">    Bag Seal/Tasma          </option>
                                                <option value="SauT">   Sauce/Tasma             </option>
                                                <option value="MN">     Margarine/Nimthera      </option>
                                                <option value="SS">     Soya/Siyatha            </option>
                                                <option value="VS">     Vinegar/Siyatha         </option>
                                                <option value="BSS">    Bag Seal/Siyatha        </option>
                                                <option value="SauS">   Sauce/Siyatha           </option>
                                                <option value="FGSS">   FG Store/Siyatha        </option>
                                                <option value="MS">     Margarine/Siyatha       </option>
                                                <option value="CS">     Cofee/Siyatha           </option>
                                                <option value="ES">     Electrical/Siyatha      </option>
                                                <option value="DBS">    Devani Betha/Siyatha    </option>
                                                <option value="NFS">    Nutra Food/Siyatha      </option>
                                                <option value="WS">     Workshop/Siyatha        </option>
                                                <option value="RS">     Return/Siyatha          </option>
                                                <option value="AM">     Auto Mobile             </option>
                                                <option value="Gango">  Gango                   </option>
                                                <option value="QA">     QA                      </option>
                                                <option value="Flour">  Flour                   </option>
                                                <option value="DBN">    Devani Betha/Nimthera   </option>
                                                <option value="SN">     Soya/Nimthera           </option>
                                                <option value="VN">     Vinegar/Nimthera        </option>
                                                <option value="FN">     Flour/Nimthera          </option>
                                                <option value="FGSN">   FG Store/Nimthera       </option>
                                                <option value="WN">     Workshop/Nimthera       </option>
                                                <option value="Casual"> Casual                  </option>
                                            </select> 
                                        </ul>
                                        </div>
                                        <!--/Departments names drop down-->


                                        <!--Employee names drop down-->
                                        <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <ul class="sidemenu-list">
                                            <label for="title"> <h5> Select Name </h5> </label>
                                            <select name="title" class="slide-item" id="names" onchange="callFunc2();">
                                                <option value="">       Select                  </option>    
                                            </select> 
                                        </ul>
                                        </div>
                                        <!--/Employee names drop down-->


                                        <!--Date range chooser-->
                                        <div class="col-lg">
                                            <span class=""> <h5> Date Range </h5> </span>
                                            <span class=""> <h15> Start Date: </h15> </span>
                                            <input class="form-control" name="start_date" id="start_date" type="date" onchange = "callFunc3();">
                                        </div>

                                        <div class="col-lg">
                                            <span class=""> <h5> To </h5> </span>
                                            <span class=""> <h15> End Date: </h15> </span>
                                            <input class="form-control" name="end_date" id="end_date" type="date" onchange = "callFunc3()">
                                        </div>
                                    </div>
                                    <!--/Date range chooser-->


                                    <!--Selected employee full details table-->
                                    <div class="row row-sm">
                                        <div class="col-lg-12">
                                            <div class="card">
                                            <img src="http://kadiradivyaraja.lk/kadiradivyaraja.lk/jayathu/assets/img/ZKZg.gif" 
                                                style=" width: 100px; margin-left: 43%; margin-top: 10%; display:none;" id="loadingGif">
                                                 
                                                <div class="card-body" style="display:none" id="tableDiv">
                                                    <div class="table-responsive">
                                                        <lable for = "title"> <h5> All details relevant to selected employee </h5> </lable>
                                                        <!--<button id="button" class="btn btn-primary mb-4 data-table-btn">Delete selected row</button>-->
                                                        <table id="delete-datatable" class="border-top-0  table table-bordered text-nowrap border-bottom">
                                                            <thead>
                                                                <tr>
                                                                    <th class="border-bottom-0">Type        </th>
                                                                    <th class="border-bottom-0">1           </th>
                                                                    <th class="border-bottom-0">2           </th>
                                                                    <th class="border-bottom-0">3           </th>
                                                                    <th class="border-bottom-0">4           </th>
                                                                    <th class="border-bottom-0">5           </th>
                                                                    <th class="border-bottom-0">6           </th>
                                                                    <th class="border-bottom-0">7           </th>
                                                                    <th class="border-bottom-0">8           </th>
                                                                    <th class="border-bottom-0">9           </th>
                                                                    <th class="border-bottom-0">10          </th>
                                                                    <th class="border-bottom-0">11          </th>
                                                                    <th class="border-bottom-0">12          </th>
                                                                    <th class="border-bottom-0">13          </th>
                                                                    <th class="border-bottom-0">14          </th>
                                                                    <th class="border-bottom-0">15          </th>
                                                                    <th class="border-bottom-0">16          </th>
                                                                    <th class="border-bottom-0">17          </th>
                                                                    <th class="border-bottom-0">18          </th>
                                                                    <th class="border-bottom-0">19          </th>
                                                                    <th class="border-bottom-0">20          </th>
                                                                    <th class="border-bottom-0">21          </th>
                                                                    <th class="border-bottom-0">22          </th>
                                                                    <th class="border-bottom-0">23          </th>
                                                                    <th class="border-bottom-0">24          </th>
                                                                    <th class="border-bottom-0">25          </th>
                                                                    <th class="border-bottom-0">26          </th>
                                                                    <th class="border-bottom-0">27          </th>
                                                                    <th class="border-bottom-0">28          </th>
                                                                    <th class="border-bottom-0">29          </th>
                                                                    <th class="border-bottom-0">30          </th>
                                                                    <th class="border-bottom-0">31          </th>
                                                                </tr>
                                                            </thead>

                                                            <tbody id = "tablebody"> 
                                                                
                                                            </tbody> 
                                                        </table> 
                                                </div> 
                                            </div> 
                                        </div> 
                                    </div>
                                    <!--/Selected employee full details table-->


                                </div>
                            </div>
                        </div>
                        <div class="row">

                        </div>

                    </div>
                    <!-- /row -->


                </div>
                <!-- Container closed -->
            </div>
            <!-- main-content closed -->

            <!-- models code -->

            <div class="modal buynow" >
                <div class="modal-dialog modal-lg " role="document">
                    <div class="modal-content modal-content-demo  cover-image"  data-bs-image-src="<?= base_url('') ?>assets/switcher/img/16.jpg">
                        <div class="modal-body  px-0">
                            <div class="row justify-content-center py-4 px-0 mx-3  Licenses-img">
                                <h3 class=" text-center mb-4 text-white">Licenses</h3>
                                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                <div class="col-sm-10 col-md-8 col-xl-5 col-lg-5">
                                    <div class="card  border-0 regular-license">
                                        <div class="card-body imag-list cover-image"  data-bs-image-src="<?= base_url('') ?>assets/switcher/img/14.jpg">
                                            <div class="text-white">
                                                <img src="<?= base_url('') ?>assets/switcher/img/free.png" alt="" class="w-50 free-img">
                                                <div class="text-center">
                                                    <div class="tx-26"><span class="font-weight-medium ">Regular</span> Licenses</div>
                                                    <p class="fw-semi-bold mb-sm-2 mb-0">You <span class="text-success font-weight-semibold">can't charge </span> from your <br><span class="op-8">End Product  End Users</span> </p>
                                                    <div class="dropdown">
                                                        <button class="btn btn-info w-lg dropdown-toggle mt-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Buy Now
                                                        </button>
                                                        <div class="dropdown-menu py-0">
                                                            <a class="dropdown-item  border-bottom px-3" target="_blank" href="https://1.envato.market/anRy9q">
                                                                <div>
                                                                    <p class="tx-14 mb-0 lh-xs font-weight-semibold">Buy Now</p><span class="tx-12 op-7 ">6 months support</span>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item   px-3" target="_blank" href="https://1.envato.market/oqRAve">
                                                                <div>
                                                                    <p class="tx-14 mb-0 lh-xs font-weight-semibold">Buy Now</p><span class="tx-12 op-7 ">12 months support</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10 col-md-8 col-xl-5 col-lg-5">
                                    <div class="card border-0 ">
                                        <div class="card-body imag-list cover-image"  data-bs-image-src="<?= base_url('') ?>assets/switcher/img/15.jpg">
                                            <div class="text-white">
                                                <img src="<?= base_url('') ?>assets/switcher/img/money-bag.png" alt="" class="w-50 free-img">
                                                <div class="text-center">
                                                    <div class="tx-26"><span class="font-weight-medium ">Extended</span> Licenses</div>
                                                    <p class="fw-semi-bold mb-sm-2 mb-0">You  <span class="text-warning font-weight-semibold">can charge</span> from your  <br><span class="op-8">End Product  End Users</span></p>
                                                    <div class="dropdown">
                                                        <button class="btn btn-info w-lg dropdown-toggle mt-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Buy Now
                                                        </button>
                                                        <div class="dropdown-menu py-0">
                                                            <a class="dropdown-item  border-bottom px-3" target="_blank" href="https://1.envato.market/AW0r1J">
                                                                <div>
                                                                    <p class="tx-14 mb-0 lh-xs font-weight-semibold">Buy Now</p><span class="tx-12 op-7 ">6 months support</span>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item   px-3" target="_blank" href="https://1.envato.market/B0Ej90">
                                                                <div>
                                                                    <p class="tx-14 mb-0 lh-xs font-weight-semibold">Buy Now</p><span class="tx-12 op-7 ">12 months support</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="license-view">
                                    <a href="https://spruko.com/licenses"  target="_blank"  class="modal-title text-center mb-3 tx-14 text-white">View license details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            <!-- End models -->

            <!-- Footer code -->

            <div class="main-footer ht-45">
                <div class="container-fluid pd-t-0 ht-100p">
                    <span> Copyright © 2024 Designed by <a href="javascript:void(0);"> RAIGAM IT Department </a> All rights reserved.</span>
                </div>
            </div>            <!-- End Footer -->

        </div> 
        <!-- End Page -->   

        <!-- scripts code -->

        <script>

            function getXmlHttpRequestObject() {
                if (window.XMLHttpRequest) {
                    return new XMLHttpRequest();
                }
                else if(window.ActiveXObject) {
                    return new ActiveXObject("Microsoft.XMLHTTP");
                }
                else {
                }

            }


            // ******************** Create function to load all employees relevant to departments into the drop down ********************
            function callFunc1() {
                var drop = document.getElementById('departments');
                var selectedText = drop.options[drop.selectedIndex].text;
                var formData = new FormData();
            
                formData.append("selectedText", selectedText);
            
                var req = getXmlHttpRequestObject();
                if (req) {
                    req.onreadystatechange = function () {
                        if (req.readyState == 4) {
                            if (req.status == 200) {
                                document.getElementById('names').innerHTML = req.responseText;
                            }
                        }
                    };
                    req.open("POST", "http://kadiradivyaraja.lk/kadiradivyaraja.lk/jayathu/ExcelForm/EmployeeN", true);
                    req.send(formData);
                }
            }


            // ******************** Create function to load all details relevant to selected employee ********************
            function callFunc2() {
                document.getElementById('loadingGif').style.display = 'block';
                var drop = document.getElementById('names'); 
                var selectedText = drop.options[drop.selectedIndex].text; 
                var formData = new FormData(); 
                formData.append("selectedText", selectedText)
                var req = getXmlHttpRequestObject();
                if (req) {
                    req.onreadystatechange = function () {
                        if (req.readyState == 4) {
                            if (req.status == 200) {
                                // alert (req.response);
                                document.getElementById('loadingGif').style.display = 'none';
                                document.getElementById('tableDiv').style.display = 'block';
                                document.getElementById('tablebody').innerHTML = req.responseText;
                            }
                        }
                    };
                    req.open("POST", "http://kadiradivyaraja.lk/kadiradivyaraja.lk/jayathu/ExcelForm/getDetails", true);
                    req.send(formData);
                }
            }


            // ******************** Create function to load all employee details relevant to selected date ********************
            function callFunc3() {

                document.getElementById('tableDiv').style.display = 'none';
                document.getElementById('loadingGif').style.display = 'block';
                var startDate = document.getElementById('start_date').value;
                var endDate = document.getElementById('end_date').value;
                var drop = document.getElementById('names'); 
                 

                if (startDate && endDate) {
                    
                    var start = new Date(startDate);
                    var end = new Date(endDate);
                    var checked = true;


                    if (start < end) {
                        var formData = new FormData();
                        var selectedText = drop.options[drop.selectedIndex].text;
                        formData.append("startDate", startDate);
                        formData.append("endDate", endDate);
                        formData.append("selectedText", selectedText)
                        var req = getXmlHttpRequestObject();
                        // alert(selectedText);
                         if (req) {
                            req.onreadystatechange = function () {
                                if (req.readyState == 4) {
                                    if (req.status == 200) {
                                        // alert(req.response);
                                        document.getElementById('loadingGif').style.display = 'none';
                                        document.getElementById('tableDiv').style.display = 'block';

                                        document.getElementById('tablebody').innerHTML = req.responseText;
                                    }
                                }  
                            }
                        };
                        req.open("pOST", "http://kadiradivyaraja.lk/kadiradivyaraja.lk/jayathu/ExcelForm/getDate", true);
                        req.send(formData);

                    } else {
                        document.getElementById('end_date').value = '';
                        checked=false;
                            Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "End date must be greater than to start date.",
                            });
                        // alert("End date must be greater than or equal to start date.");
                        return null;
                    }
                } if (startDate === '' && endDate === '') {
                    checked=false;
                            Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Please select both start and end dates.",
                            });
                    // alert("Please select both start and end dates.");
                    return null; 
                }
                
            }
            

            // ******************** Example call to the function ********************
            document.getElementById('start_date').addEventListener('change', getDateRange);
            document.getElementById('end_date').addEventListener('change', getDateRange);

        </script>

        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        

        <script src="<?= base_url('') ?>application/views/js/userRegister.js"></script>

        <!-- Back-to-top -->
        <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

        <!-- JQuery min js -->
        <script src="<?= base_url('') ?>assets/plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Bundle js -->
        <script src="<?= base_url('') ?>assets/plugins/bootstrap/popper.min.js"></script>
        <script src="<?= base_url('') ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- Ionicons js -->
        <script src="<?= base_url('') ?>assets/plugins/ionicons/ionicons.js"></script>

        <!-- Moment js -->
        <script src="<?= base_url('') ?>assets/plugins/moment/moment.js"></script>

        <!-- JQuery sparkline js -->
        <script src="<?= base_url('') ?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- P-scroll js -->
        <script src="<?= base_url('') ?>assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="<?= base_url('') ?>assets/plugins/perfect-scrollbar/p-scroll.js"></script>

        <!-- Switcher js -->
        <script src="<?= base_url('') ?>assets/switcher/js/switcher.js"></script>

        <!-- Eva-icons js -->
        <script src="<?= base_url('') ?>assets/js/eva-icons.min.js"></script>

        <!-- Sidebar js -->
        <script src="<?= base_url('') ?>assets/plugins/side-menu/sidemenu.js"></script>

        <!-- sticky js -->
        <script src="<?= base_url('') ?>assets/js/sticky.js"></script>

        <!--- Index js -->
        <script src="<?= base_url('') ?>assets/js/script.js"></script>


        <!--- Internal Sampledata js -->
        <script src="<?= base_url('') ?>assets/js/chart.flot.sampledata.js"></script>

        <!--circle-progress-->
        <script src="<?= base_url('') ?>assets/js/vendors/circle-progress.min.js"></script>

        <!-- ApexChart -->
        <script src="<?= base_url('') ?>assets/js/apexcharts.min.js"></script>

        <!--- Index js -->
        <script src="<?= base_url('') ?>assets/js/index3.js"></script>


        <!--themecolor js-->
        <script src="<?= base_url('') ?>assets/js/themecolor.js"></script>

        <!--swither-styles js-->
        <script src="<?= base_url('') ?>assets/js/swither-styles.js"></script>

        <!-- Custom js -->
        <script src="<?= base_url('') ?>assets/js/custom.js"></script>      

        <!-- DATA TABLE JS-->
        <script src="<?= base_url('') ?>assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('') ?>assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
        <script src="<?= base_url('') ?>assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url('') ?>assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
        <script src="<?= base_url('') ?>assets/plugins/datatable/js/jszip.min.js"></script>
        <script src="<?= base_url('') ?>assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
        <script src="<?= base_url('') ?>assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
        <script src="<?= base_url('') ?>assets/plugins/datatable/js/buttons.html5.min.js"></script>
        <script src="<?= base_url('') ?>assets/plugins/datatable/js/buttons.print.min.js"></script>
        <script src="<?= base_url('') ?>assets/plugins/datatable/js/buttons.colVis.min.js"></script>
        <script src="<?= base_url('') ?>assets/plugins/datatable/dataTables.responsive.min.js"></script>
        <script src="<?= base_url('') ?>assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
        <script src="<?= base_url('') ?>assets/js/table-data.js"></script>
        <!-- End scripts -->

    </body>


    <!-- Mirrored from codeigniter.spruko.com/adminor/adminor/index3 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2024 08:22:31 GMT -->
</html>