<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Simka -Admin</title>

	<!-- <link href="<?php echo base_url() . "assets/css/"; ?>bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() . "assets/css/"; ?>datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url() . "assets/css/"; ?>styles.css" rel="stylesheet"> -->

	<!-- plugins:css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admintemplate/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admintemplate/assets/vendors/iconfonts/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admintemplate/assets/vendors/iconfonts/typicons/src/font/typicons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admintemplate/assets/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admintemplate/assets/vendors/css/vendor.bundle.base.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admintemplate/assets/assets/vendors/css/vendor.bundle.addons.css">

	<!-- inject:css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admintemplate/assets/css/shared/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admintemplate/assets/images/favicon.png" />

	<style>
		.btn-login {
			transition: .5s;
		}

		.btn-login {
			box-shadow: 1px 1px 10px 1px rgba(0, 0, 0, .4);
		}
	</style>

</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
				<div class="row w-100">
					<div class="col-lg-4 mx-auto">
						<div class="auto-form-wrapper">
							<form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">
								<div class="form-group">
									<label class="label">Username</label>
									<div class="input-group">
										<input name="username" type="text" class="form-control" placeholder="Username">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="mdi mdi-check-circle-outline"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="label">Password</label>
									<div class="input-group">
										<input name="password" type="password" class="form-control" placeholder="*********">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="mdi mdi-check-circle-outline"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary submit-btn btn-block btn-login">Login</button>
								</div>
								<div class="form-group d-flex justify-content-between">
									<div class="form-check form-check-flat mt-0">
										<label class="form-check-label">
											<input type="checkbox" class="form-check-input" checked> Keep me signed in </label>
									</div>
									<a href="#" class="text-small forgot-password text-black">Forgot Password</a>
								</div>
								<div class="form-group">
									<button class="btn btn-block g-login">
										<img class="mr-3" src="<?php echo base_url(); ?>assets/admintemplate/assets/images/file-icons/icon-google.svg" alt="">Log in with Google</button>
								</div>
								<div class="text-block text-center my-3">
									<span class="text-small font-weight-semibold">Not a member ?</span>
									<a href="register.html" class="text-black text-small">Create new account</a>
								</div>
							</form>
						</div>
						<ul class="auth-footer">
							<li>
								<a href="#">Conditions</a>
							</li>
							<li>
								<a href="#">Help</a>
							</li>
							<li>
								<a href="#">Terms</a>
							</li>
						</ul>
						<p class="footer-text text-center">copyright © 2018 Bootstrapdash. All rights reserved.</p>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>

	<!-- <form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">Log in</div>
					<div class="panel-body">
						<form role="form">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="username" name="username" type="text" autofocus="">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="password" name="password" type="password" value="">
								</div>
								<div class="checkbox">
									<label>
										<input name="remember" type="checkbox" value="Remember Me">Remember Me
									</label>
								</div>
								<input type="submit" value="Login" />
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</!-->



	<!-- <script src="<?php echo base_url() . "assets/js/"; ?>jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url() . "assets/js/"; ?>bootstrap.min.js"></script>
	<script src="<?php echo base_url() . "assets/js/"; ?>chart.min.js"></script>
	<script src="<?php echo base_url() . "assets/js/"; ?>chart-data.js"></script>
	<script src="<?php echo base_url() . "assets/js/"; ?>easypiechart.js"></script>
	<script src="<?php echo base_url() . "assets/js/"; ?>easypiechart-data.js"></script>
	<script src="<?php echo base_url() . "assets/js/"; ?>bootstrap-datepicker.js"></script>
	<script>
		! function($) {
			$(document).on("click", "ul.nav li.parent > a > span.icon", function() {
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function() {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function() {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script> -->

	<!-- plugins:js -->
	<script src="<?php echo base_url(); ?>assets/admintemplate/assets/vendors/js/vendor.bundle.base.js"></script>
	<script src="<?php echo base_url(); ?>assets/admintemplate/assets/vendors/js/vendor.bundle.addons.js"></script>
	<!-- endinject -->
	<!-- inject:js -->
	<script src="<?php echo base_url(); ?>assets/admintemplate/assets/js/shared/off-canvas.js"></script>
	<script src="<?php echo base_url(); ?>assets/admintemplate/assets/js/shared/misc.js"></script>
	<!-- endinject -->
</body>

</html>