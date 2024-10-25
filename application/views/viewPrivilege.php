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
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity = "sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin = "anonymous" referrerpolicy = "no-referrer"></script>


        <!-- Title -->
        <title>Raigam Attendance System | Set Privilege</title>


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
                            <h4 class="content-title mb-2 mb-xl-0">Privileges</h4>
                        </div>
                        <div class="d-flex my-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('') ?>Home/index">Home</a></li>
                                    <li class="breadcrumb-item active " aria-current="page"> Set User Privileges</li>
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
                                        <p class="mg-b-20 text-muted tx-13 mb-0">Veiw User Privileges</p>
                                        <!-- <a href="<?= base_url('') ?>user/linkIndex" class="btn btn-info  btn-rounded " style="float: right">Add New</a> -->
                                        <div class="card-title">User Privileges</div>

                                    </div>
                                    

                                    <form method="POST"  id="priv_regi">
                                        <div class="card-body">
                                            <?php
                                            if (isset($_SESSION['submition']) && !empty($_SESSION['submition'])) {
                                                if ($_SESSION['submition'] == 'success') {
                                                    ?>
                                            <div class="alert alert-success" role="alert" id="successMessage">
                                                        <button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                        Form Submitted <strong>Successfully !!</strong> 
                                                    </div> 
                                                    <?php
                                                }else{
                                                    ?>
                                                    <div class="alert alert-danger" role="alert" id="successMessage">
                                                        <button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                        Something went <strong>wrong,</strong> Please try again!! 
                                                    </div> 
                                                    <?php
                                                }
                                                echo "<script type=\"text/javascript\"> setTimeout(function () { $('#successMessage').fadeOut('fast'); }, 3000);</script>"; 
                                                session_destroy(); 
                                            }
                                            ?>


                                            <div class="row row-sm">



                                                <div class="row row-sm">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <!--<button id="button" class="btn btn-primary mb-4 data-table-btn">Delete selected row</button>-->
                                                                    <table id="delete-datatable" class="border-top-0  table table-bordered text-nowrap border-bottom">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="border-bottom-0">Full Name</th>
                                                                                <th class="border-bottom-0">E-mail</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            foreach ($userRecords as $user) {
                                                                                $UID = $user['id'];
                                                                                
                                                                                ?>
                                                                                <tr>
                                                                                    <td><?php echo $user['fname']." ".$user['lname']; ?></td>
                                                                                    <td><?php echo $user['email']; ?></td>
                                                                                    
                                                                                </tr>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                            <input type = "hidden" id = "<?= $UID ?>" name = "UID" value = "<?= $user['id'] ?>">;
                                                                            <?php
                                                                            // echo $UID;
                                                                            ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <?php
                                                    $x=15;
                                                    $checkid = 1;
                                                    // Get names and ids of main pages from the database
                                                    $getPage = mysqli_query($con, "SELECT pageName, id FROM pages WHERE isact='1'");
                                                    while($resPage = mysqli_fetch_array($getPage)) {
                                                        $mainpageid = $resPage['id'];
                                                        $mainpageName = $resPage['pageName'];
                                                ?>
                                                    <div class="col-lg">
                                                        <span class="border-bottom-0" id="<?php echo $mainpageid; ?>">
                                                            <h5><?php echo $resPage['pageName']; ?></h5>
                                                        </span>
                                                        
                                                        <?php
                                                        // Fetch subpages based on their main page ID

                                                        
                                                        $getSub = mysqli_query($con, "SELECT id, controller, subPageName, pageID FROM subpages WHERE isact = 1 AND pageID = '{$resPage['id']}'");
                                                     while ($resSub = mysqli_fetch_array($getSub)) {
                                                            $checkboxId = $resSub['id'];
                                                            $subpagename = $resSub['subPageName'];
                                                            $mainPID = $resSub['pageID'];
                                                        ?>
                                                        <input type="checkbox" id="checkboxes<?php echo $checkid; ?>" name="checkboxes<?php echo $checkid; ?>" value="<?php echo $checkboxId; echo","; echo $subpagename; echo ","; echo $mainPID; echo ","; echo $UID; ?>" >
                                                        <label for="dashboard"><?php echo $resSub['subPageName']; ?></label><br>
                                                        <input type="hidden" name="<?php echo $subpagename; ?>" id="<?php echo $checkboxId; ?>" value="<?php echo $mainPID; ?>">
                                                        
                                                        <?php
                                                        $checkid++;
                                                        }
                                                        
                                                        ?>
                                                    </div>
                                                <?php
                                                    $x++;
                                                }

                                                ?>

                                            <input type="hidden" name="checkId" value="<?php echo $checkid; ?>" id="checkId"/>
                                                
                                            </div>
                                            
                                            <div class="row row-sm mg-t-20">
                                                <div class="col-lg mg-t-12 mg-lg-t-0" >
                                                    <a href="<?= base_url('') ?>UserPrivilege/linkIndex" class="btn btn-danger  btn-rounded ">Cancel</a>
                                                </div>
                                                <div class="col-lg mg-t-12 mg-lg-t-0" >
                                                    <!-- <a href="javascript:void(0);" class="btn btn-success  btn-rounded " onclick="checkVal();" style="float: right">Submit</a> -->
                                                    <!-- <button type="button" class="btn btn-success  btn-rounded" onclick = "callFunction1();" style="float: right">Submit</button> -->
                                                    <!-- <a href="javascript:void(0);" class="btn btn-success  btn-rounded " onclick="callFunction1();" style="float: right">Submit</a> -->
                                                    <button type ="button" class= "btn btn-success  btn-rounded" onclick="callFunction1();" style = "float: right">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <script style = "text/javascript"> 

                                        function getXmlHttpRequestObject() {
                                            if (window.XMLHttpRequest) {
                                                return new XMLHttpRequest();
                                            } else if (window.ActiveXObject) {
                                                return new ActiveXObject("Microsoft.XMLHTTP");
                                            } else {
                                                alert("Your browser doesn't support AJAX");
                                                return null;
                                            }
                                        }

                                        function callFunction1() {
                                            // alert(123);  
                                            var checkId = document.getElementById('checkId').value;
                                            // var selectedValues = [];
                                            // alert (checkId);
                                            var formData = new FormData();

                                            var y = 1;
                                            for(var x=1;x<=checkId-1;x++){
                                                
                                                if(document.getElementById('checkboxes'+x).checked){
                                                    formData.append("selected"+y,document.getElementById('checkboxes'+x).value);
                                                    // selectedValues.push(document.getElementById('checkboxes'+x).value);
                                                    y++;
                                                }
                                            }
                                            formData.append("loopCount",y);
                                            
                                            
                                            var req = getXmlHttpRequestObject();
                                            if (req) {
                                                req.onreadystatechange = function () {
                                                    if (req.readyState == 4) {
                                                        if (req.status == 200) {
                                                            // alert(req.responseText);
                                                            console.log("Response from server:", req.responseText); 
                                                            document.getElementById('selected').innerHTML = req.responseText;
                                                        } else {
                                                            console.error("Server responded with status:", req.status); 
                                                        }
                                                    }
                                                };
                                                req.open("POST", "http://kadiradivyaraja.lk/kadiradivyaraja.lk/jayathu/UserPrivilege/savePrivilege", true);
                                                req.send(formData);
                                            } else {
                                                console.error("XMLHttpRequest not supported."); 
                                            }


                                            Swal.fire({
                                            title: "Submit successfully!",
                                            icon: "success"
                                            });

                                            //Create method to submit the form
                                            setTimeout(function() {
                                                document.getElementById('priv_regi').submit();
                                            }, 2000);
                                        }
  
                                    </script>
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