<?php 
if(!isset($_SESSION)){
	session_start();
}
?>
<!doctype html>
	<html lang="en" dir="ltr">


	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="">
		<meta name="Author" content="">
		<meta name="Keywords" content="">

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

		<!-- End styles -->

	</head> 
	
	
	<body class="app sidebar-mini ltr login-img">

		<!-- Loader -->
		<div id="global-loader">
			<img src="<?= base_url('') ?>assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
		
		<div class="square-box">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>

		<!-- page -->
		<div class="page login-img">
			
			
			<!-- main-signin-wrapper -->
			<div class="">
				<div class="my-auto page page-h">
					<div class="main-signin-wrapper">
						<div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
							<div class="text-center mb-3">  </div>
							<div class="card">
								<div class="card-body p-8">
									<div class="main-signin-header">
										<?php
										if(isset($_SESSION['loginCheck']) && $_SESSION['loginCheck']=='err'){
											?>
											<div class="alert alert-danger" role="alert">Please check your credentials & try again !!</div>
											<?php
											session_destroy(); 
										}
										?>
										<img src="<?= base_url('') ?>assets/img/brand/raigam-logo.png" class="h-8" alt="">
										<form action="<?= base_url('') ?>login/checkLogin" method="POST">
											<div class="form-group">
												<label style="color: black">E-mail Address</label><input class="form-control" placeholder="E-mail Address" name="userName" id="userName" type="text" >
											</div>
											<div class="form-group">
												<label style="color: black">Password</label> <input class="form-control" placeholder="Enter your password" name="password" id="password" type="password" >
											</div><button class="btn btn-primary btn-block">Sign In</button>
										</form>
									</div>
<!--								<div class="main-signin-footer mt-3 mg-t-5">
									<p><a href="forgot.html">Forgot password?</a></p>
									<p>Don't have an account? <a href="login.html">Create an Account</a></p>
								</div>-->
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
		
		
	</div>
	<!-- End Page -->
	<!-- scripts code -->
	<!-- JQuery min js -->
	<script src="<?= base_url('') ?>assets/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Bundle js -->
	<script src="<?= base_url('') ?>assets/plugins/bootstrap/popper.min.js"></script>
	<script src="<?= base_url('') ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Ionicons js -->
	<script src="<?= base_url('') ?>assets/plugins/ionicons/ionicons.js"></script>

	<!-- Moment js -->
	<script src="<?= base_url('') ?>assets/plugins/moment/moment.js"></script>

	<!-- Eva-icons js -->
	<script src="<?= base_url('') ?>assets/js/eva-icons.min.js"></script>

	

	
	
	<!--themecolor js-->
	<script src="<?= base_url('') ?>assets/js/themecolor.js"></script>

	<!--swither-styles js-->
	<script src="<?= base_url('') ?>assets/js/swither-styles.js"></script>

	<!-- Custom js -->
	<script src="<?= base_url('') ?>assets/js/custom.js"></script>        <!-- End scripts -->


</body>


<!-- Mirrored from codeigniter.spruko.com/adminor/adminor/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2024 08:22:28 GMT -->
</html>