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
        <title>Raigam Attendance System</title>


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

        <style>

            @import url('https://fonts.googleapis.com/css?family=Roboto:300');


            /* Style code of moving welcome text  */
            @keyframes myAnim {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
            }

            .container {
                color: white; 
                margin-left: 40px; 
                margin-top: 80px;
                font-family: 'Serif	', Times New Roman;
            }

            .output {
                text-align: center;
            }

            p {
                font-size: 34px;
                margin-left:200px;
            }

            .cursor::after {
                content: '';
                display: inline-block;
                margin-left: 3px;
                background-color: white;
                height: 24px;
                width: 13px;
                animation: blink 0.5s infinite;
            }

            @keyframes blink {
                0%, 49% {
                    opacity: 1;
                }
                50%, 100% {
                    opacity: 0;
                }
            }
           

            /* Style code of Raigam Vision text  */
            .vision {
                text-align: center;
                font-family: 'Roboto';
                font-weight: 300;
                font-size: 28px;
                margin-left: 250px;
                padding-top: 50px;
                height: -1500px;
                overflow: hidden;
                -webkit-backface-visibility: hidden;
                -webkit-perspective: 1000;
                -webkit-transform: translate3d(0,0,0);
            }

            .vision1, .vision2 {
                display: inline-block;
                overflow: hidden;
                white-space: nowrap;
                font-weight: bold;
            }

            .vision1 {
                animation: showup 7s forwards;
            }

            .vision2 {
                width: 0px;
                animation: reveal 7s forwards;
            }

            .vision2 span {
                margin-left: -355px;
                animation: slidein 7s forwards;
            }

            @keyframes showup {
                0% {opacity: 0;}
                20% {opacity: 1;}
                80% {opacity: 1;}
                100% {opacity: 1;}
            }

            @keyframes slidein {
                0% { margin-left: -800px; }
                20% { margin-left: -800px; }
                35% { margin-left: 0px; }
                100% { margin-left: 0px; }
            }

            @keyframes reveal {
                0% {opacity: 0; width: 0px;}
                20% {opacity: 1; width: 0px;}
                30% {width: 355px;}
                80% {opacity: 1;}
                100% {opacity: 1; width: 950px;}
            }

        </style>

    </head>    

    <body class="main-body app sidebar-mini ltr">

        <!-- switcher code -->

        <div class="switcher-wrapper">
            <div class= "main-signin-wrapper">
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

            <!-- Backgroung image -->
            <div class="main-content app-content" id="background-card" style=" 
                                                    background-image: url('http://kadiradivyaraja.lk/kadiradivyaraja.lk/jayathu/assets/img/media/20.jpg');
                                                    background-size: cover;
                                                    background-position: center;
                                                    background-repeat: no-repeat;
                                                    margin: 0;
                                                    padding: 0;
                                                    height: 100vh; 
                                                    width: 100%;">
                <div class="main-content-body">
                    
                    <div class="container" style="height: 100vh;">

                        <!-- Welcome note -->
                        <div class="output" id="output"> 
                            <p class="cursor"></p>
                        </div>
                        
                        <!-- Blinking Raigam logo -->
                        <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12 text-center" style="
                         animation: myAnim 4s ease 0s 1000 alternate both;">
                            <img src="<?= base_url('') ?>assets/img/brand/raigam1.png" 
                            
                            class="main-logo" alt="logo"
                            style="margin-left: 550px; margin-top: 50px; width: 25%; height: 20%; transform: scale(1.2);">
                        </div>

                        <!-- Vision of the Raigam -->
                        <div class="vision">
                            
                            <div class="vision1">To create a seamless</div> 
                            
                            <div class="vision2"> 
                                <span>Kingdom with the citizens delighted with their nutrition and health</span>
                            </div>
                        </div>
                         
                    </div>



                    <!-- ***************** Java script function to create moving text ***************** -->
                    <script>
                        // alert('abc');

                        // alert($_SESSION['id']);

                        //Paragraph array
                        const textArray = ["Welcome to Raigam Marketing Services (Pvt)Ltd"];

                        //Typing speed
                        const speedForward = 150; 
                        //Waiting time
                        const speedWait = 1500; 
                        //Backspace speed
                        const speedBackspace = 1; 

                        let i = 0, 
                            a = 0, 
                            isBackspacing = false;

                        // Loop iterate the paragraph
                        typeWriter("output", textArray);

                        function typeWriter(id, textArray) {

                            //Create variable and asign paragraph element to it
                            const element = document.getElementById(id).querySelector("p");
                            //Current array(string) 
                            const currentText = textArray[a]; 


                        // ***************** Create function to type forward *****************
                            if (!isBackspacing) {
                                if (i < currentText.length) {
                                element.textContent += currentText.charAt(i);
                                i++;
                                setTimeout(() => typeWriter(id, textArray), speedForward);
                                } else if (i === currentText.length) {
                                isBackspacing = true;
                                setTimeout(() => typeWriter(id, textArray), speedWait);
                                }
                            } 


                        // ***************** Create function to backspace *****************
                            else {
                                if (element.textContent.length > 0) {
                                element.textContent = element.textContent.slice(0, -1);
                                setTimeout(() => typeWriter(id, textArray), speedBackspace);
                                } else {
                                isBackspacing = false;
                                i = 0;
                                a = (a + 1) % textArray.length; 
                                setTimeout(() => typeWriter(id, textArray), 50);
                                }
                            }
                        }
                    </script>



                
                </div>

                
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
                    <span>  Copyright © 2024 Designed by <a href="javascript:void(0);"> RAIGAM IT Department </a> All rights reserved.</span>
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