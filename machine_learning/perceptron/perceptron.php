<!DOCTYPE html>
<html lang="en">

<head>

	<?php $base_url = 'http://localhost/machine_learning/perceptron/'; ?>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="admintemplate/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="admintemplate/assets/vendors/iconfonts/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="admintemplate/assets/vendors/iconfonts/typicons/src/font/typicons.css">
	<link rel="stylesheet" href="admintemplate/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="admintemplate/assets/vendors/css/vendor.bundle.base.css">
	<link rel="stylesheet" href="admintemplate/assets/vendors/css/vendor.bundle.addons.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="admintemplate/assets/css/shared/style.css">
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="admintemplate/assets/css/demo_1/style.css">
	<!-- End Layout styles -->
	<link rel="shortcut icon" href="admintemplate/assets/images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<!-- partial:../../partials/_navbar.html -->
		<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
				<a class="navbar-brand brand-logo" href="../../index.html">
					<img src="assets/uploads/img/logo_web/logo_ai.png" alt="logo" /> </a>
				<a class="navbar-brand brand-logo-mini" href="../../index.html">
					<img src="../../../assets/images/logo-mini.svg" alt="logo" /> </a>
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-center">
				<ul class="navbar-nav">
					<li class="nav-item font-weight-semibold d-none d-lg-block">Accessed from IP :
						<?php
						function getUserIP()
						{
							// Get real visitor IP behind CloudFlare network
							if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
								$_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
								$_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
							}
							$client  = @$_SERVER['HTTP_CLIENT_IP'];
							$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
							$remote  = $_SERVER['REMOTE_ADDR'];

							if (filter_var($client, FILTER_VALIDATE_IP)) {
								$ip = $client;
							} elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
								$ip = $forward;
							} else {
								$ip = $remote;
							}

							return $ip;
						}


						$user_ip = getUserIP();

						echo $user_ip; // Output IP address [Ex: 177.87.193.134] 
						?>
					</li>

				</ul>
				<form class="ml-auto search-form d-none d-md-block" action="#">
					<div class="form-group">
						<input type="search" class="form-control" placeholder="Search Here">
					</div>
				</form>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
							<i class="mdi mdi-bell-outline"></i>
							<span class="count">7</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
							<a class="dropdown-item py-3">
								<p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
								<span class="badge badge-pill badge-primary float-right">View all</span>
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<img src="admintemplate/assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
								<div class="preview-item-content flex-grow py-2">
									<p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
									<p class="font-weight-light small-text"> The meeting is cancelled </p>
								</div>
							</a>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<img src="../../../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
								<div class="preview-item-content flex-grow py-2">
									<p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
									<p class="font-weight-light small-text"> The meeting is cancelled </p>
								</div>
							</a>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<img src="../../../assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
								<div class="preview-item-content flex-grow py-2">
									<p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
									<p class="font-weight-light small-text"> The meeting is cancelled </p>
								</div>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
							<i class="mdi mdi-email-outline"></i>
							<span class="count bg-success">3</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
							<a class="dropdown-item py-3 border-bottom">
								<p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
								<span class="badge badge-pill badge-primary float-right">View all</span>
							</a>
							<a class="dropdown-item preview-item py-3">
								<div class="preview-thumbnail">
									<i class="mdi mdi-alert m-auto text-primary"></i>
								</div>
								<div class="preview-item-content">
									<h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
									<p class="font-weight-light small-text mb-0"> Just now </p>
								</div>
							</a>
							<a class="dropdown-item preview-item py-3">
								<div class="preview-thumbnail">
									<i class="mdi mdi-settings m-auto text-primary"></i>
								</div>
								<div class="preview-item-content">
									<h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
									<p class="font-weight-light small-text mb-0"> Private message </p>
								</div>
							</a>
							<a class="dropdown-item preview-item py-3">
								<div class="preview-thumbnail">
									<i class="mdi mdi-airballoon m-auto text-primary"></i>
								</div>
								<div class="preview-item-content">
									<h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
									<p class="font-weight-light small-text mb-0"> 2 days ago </p>
								</div>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
						<a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
							<img class="img-xs rounded-circle" src="admintemplate/assets/images/faces/face8.jpg" alt="Profile image"> </a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
							<div class="dropdown-header text-center">
								<img class="img-md rounded-circle" src="admintemplate/assets/images/faces/face8.jpg" alt="Profile image">
								<p class="mb-1 mt-3 font-weight-semibold">Dimas Nugroho</p>
								<p class="font-weight-light text-muted mb-0">dimasnugroho673@gmail.com</p>
							</div>
							<a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
							<a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
							<a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
							<a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
							<a href="http://localhost/simka/login/logout" class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
						</div>
					</li>
				</ul>
				<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
					<span class="mdi mdi-menu"></span>
				</button>
			</div>
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:../../partials/_sidebar.html -->
			<nav class="sidebar sidebar-offcanvas" id="sidebar">
				<ul class="nav">
					<li class="nav-item nav-profile">
						<a href="#" class="nav-link">
							<div class="profile-image">
								<img class="img-xs rounded-circle" src="admintemplate/assets/images/faces/face8.jpg" alt="profile image">
								<div class="dot-indicator bg-success"></div>
							</div>
							<div class="text-wrapper">
								<p class="profile-name">Dimas Nugroho</p>
								<p class="designation">Administrator</p>
							</div>
						</a>
					</li>
					<li class="nav-item nav-category">Main Menu</li>
					<li class="nav-item">
						<a class="nav-link" href="http://localhost/simka/panel/dashboard">
							<i class="menu-icon typcn typcn-document-text"></i>
							<span class="menu-title">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#dataTraining" aria-expanded="false" aria-controls="data">
							<i class="menu-icon typcn typcn-coffee"></i>
							<span class="menu-title">Data</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="dataTraining">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item">
									<a class="nav-link" href="http://localhost/simka/panel/data">Data Training (unormalize)</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="http://localhost/simka/panel/data/normalize">Data Training (normalized)</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#decision" aria-expanded="false" aria-controls="decision">
							<i class="menu-icon typcn typcn-coffee"></i>
							<span class="menu-title">Decisioning</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="decision">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item">
									<a class="nav-link" href="http://localhost/machine_learning/perceptron/test.html">Start Decision</a>
								</li>
								<!-- <li class="nav-item">
									<a class="nav-link" href="http://localhost/simka/panel/data/normalize">Data Training (normalized)</a>
								</li> -->
							</ul>
						</div>
					</li>
				</ul>
			</nav>
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row page-title-header">
						<div class="col-12">
							<div class="page-header">
								<h4 class="page-title">Training Proccess</h4>

							</div>
						</div>
						<div class="col-md-12">
							<div class="page-header-toolbar">
								<div class="btn-group toolbar-item" role="group" aria-label="Basic example">
									<button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-left"></i></button>
									<button type="button" class="btn btn-secondary">03/02/2019 - 20/08/2019</button>
									<button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-right"></i></button>
								</div>
								<div class="filter-wrapper">
									<div class="dropdown toolbar-item">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Day</button>
										<div class="dropdown-menu" aria-labelledby="dropdownsorting">
											<a class="dropdown-item" href="#">Last Day</a>
											<a class="dropdown-item" href="#">Last Month</a>
											<a class="dropdown-item" href="#">Last Year</a>
										</div>
									</div>
									<a href="#" class="advanced-link toolbar-item">Advanced Options</a>
								</div>
								<div class="sort-wrapper">
									<button type="button" class="btn btn-primary toolbar-item">New</button>
									<div class="dropdown ml-lg-auto ml-3 toolbar-item">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
										<div class="dropdown-menu" aria-labelledby="dropdownexport">
											<a class="dropdown-item" href="#">Export as PDF</a>
											<a class="dropdown-item" href="#">Export as DOCX</a>
											<a class="dropdown-item" href="#">Export as CDR</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-body">
							<?php
							class Perceptron
							{

								private $learning_rate;
								private $weight;
								private $bias;

								function set_learning_rate($learning_rate)
								{		// function untuk mengeset learning rate
									$this->learning_rate = $learning_rate;
								}

								function set_weight($weight)
								{					// function untuk mengeset bobot awal
									$this->weight = $weight;
								}

								function set_bias($bias)
								{ 						// function untuk mengeset bias awal
									$this->bias = $bias;
								}

								function training($data, $label, $max_epoh)
								{      // function pelatihan
									for ($a = 0; $a < $max_epoh; $a++) {			// perulangan sebanyak epoh
										$cek = "";
										echo "<br><b>Epoh Ke : " . ($a + 1) . "</b></br>";
										for ($x = 0; $x < count($data); $x++) {	// perulangan untuk mengolah data per baris
											$weight = $this->weight;
											$bias = $this->bias;
											$y = $this->dot_product($data[$x], $weight, $bias);	// melakukan perhitungan nilai y
											if ($y == $label[$x]) {			// jika output sama dengan label, bobot dan bias tidak berubah
												$cek .= "1";
												$this->weight = $weight;
												$this->bias = $bias;
											} else {							// jika output berbeda, hitung error dan update bobot beserta bias
												$cek .= "0";
												$error = $label[$x] - $y;
												$this->weight = $this->update_weight($weight, $this->learning_rate, $error, $data[$x]);
												$this->bias = $this->update_bias($bias, $this->learning_rate, $error);
											}
											echo "Bobot : ";
											for ($b = 0; $b < count($this->weight); $b++) {
												echo $this->weight[$b] . "   ";
											}
											echo "Bias : " . $this->bias . "</br>";
										}
										$ck = strpos($cek, "0");					// cek apakah dalam satu iterasi ada error
										if ($ck === FALSE) {						// jika tidak ada error, iterasi dihentikan
											$a = $max_epoh;
										}
									}
									$out = array($this->weight, $this->bias);
									return $out;
								}

								function update_weight($weight, $learning_rate, $error, $data)
								{	// function update bobot 
									$weight_new = array();
									for ($x = 0; $x < count($weight); $x++) {
										$weight_new[$x] = $weight[$x] + ($learning_rate * $error * $data[$x]);
									}
									return $weight_new;
								}

								function update_bias($bias, $learning_rate, $error)
								{				// function update bobot bias
									$bias_new = $bias + ($learning_rate * $error);
									return $bias_new;
								}

								function dot_product($data, $weight, $bias)
								{	// menghitung nilai y_in,
									$y_in = 0;
									for ($x = 0; $x < count($data); $x++) {
										$y_in = $y_in + ($data[$x] * $weight[$x]);
									}
									$y = $y_in + ($bias);
									return $this->sign($y);					// mengaktivasi y_in
								}

								function sign($y_in)
								{						// fungsi aktivasi undak biner
									if ($y_in >= 0) {
										$y = 1;
									} else {
										$y = 0;
									}
									return $y;
								}

								function classification($data, $weight, $bias)
								{
									return $this->dot_product($data, $weight, $bias);
								}
							}
							/////data latih
							$data = array(
								// lulus
								array(0.36, 0.73, 0.63, 0.48, 0.74, 0.66, 0.8, 0.77, 0.39, 0.57),
								array(0.48, 0.16, 0.75, 0.23, 0.76, 0.76, 0, 0.75, 0.5, 0.45),
								array(0.7, 0, 0.23, 0.45, 0.61, 0.27, 0, 0.75, 1, 0.55),
								array(0.27,	0.49, 0.05, 0.27, 0.2, 0.39, 0.36, 0.41, 0.55, 0.27),
								array(0.59, 0.53, 0.3, 0.25, 0.85, 0.8, 0.25, 0.75, 0, 0.5),
								array(0.73, 0.78, 0.28, 0, 0.17, 0.76, 0.25, 0, 0.27, 0),
								array(0.3, 0.04, 0.38, 0.25, 0.63, 0.27, 0.25, 0.23, 0.16, 0.25),
								array(0, 0.09, 0.18, 0.45, 0, 0, 0.5, 0, 0.39, 0.34),
								array(0.55, 0.29, 0, 0, 0.2, 0.05, 0.16, 0.55, 0.43, 0.36),
								array(0.52, 0.27, 0.3, 0.02, 0.28, 0.1, 0.11, 0.39, 0.43, 0.36),
								// tidak lulus
								array(0.77, 0.8, 0.88, 0.86, 0.83, 0.73, 0.68, 0.8, 0.84, 0.77),
								array(0.36, 1, 0.83, 0.8, 0.7, 0.66, 0.7, 0.57, 0.73, 0.75),
								array(0.77, 0.4, 0.55, 0.25, 0.81, 0.85, 0.34, 0.82, 0.64, 0.86),
								array(0.82, 0.87, 0.83, 0.34, 0.63, 0.9, 0.98, 0.64, 0.82, 0.57),
								array(0.77, 0.82, 0.93, 0.98, 0.98, 0.8, 0.82, 0.82, 0.68, 0.68),
								array(1, 0.87, 0.98, 0.77, 0.87, 0.76, 0.55, 0.82, 0.91),
								array(0.82, 0.73, 0.98, 0.3, 0.69, 0.93, 0.91, 0.7, 0.84, 0.8),
								array(0.73, 0.73, 0.83, 0.82, 1, 1, 0.84, 1, 0.95, 0.86),
								array(0.77, 0.6, 0.9, 0.59, 0.93, 0.54, 0.86, 0.82, 0.91, 0.98),
								array(0.82, 0.89, 1, 0.93, 0.83, 0.95, 0.64, 0.86, 0.84, 0.8)
							);

							$nama = $_POST['nama'];
							$data1 = $_POST['data1'];
							$data2 = $_POST['data2'];
							$data3 = $_POST['data3'];
							$data4 = $_POST['data4'];
							$data5 = $_POST['data5'];
							$data6 = $_POST['data6'];
							$data7 = $_POST['data7'];
							$data8 = $_POST['data8'];
							$data9 = $_POST['data9'];
							$data10 = $_POST['data10'];

							// $label = array(0, 0, 0, 0);	// label atau target
							$label = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

							$learning_rate = 0.1;			// learning rate
							$bias = 0.5;					// bobot bias awal
							$max_epoh = 1000;				// maksimal iterasi
							$weight = array(0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5);
							$nn = new Perceptron();
							$nn->set_learning_rate($learning_rate);
							$nn->set_weight($weight);
							$nn->set_bias($bias);
							echo "Proses pelatihan :</br>";
							$out = $nn->training($data, $label, $max_epoh);	//melakukan training untuk mendapatkan bobot dan bias 
							$bobot = $out[0];
							$bias = $out[1];
							// $data_uji = array(0.52, 0.78, 0.55, 0.82, 0.48, 0.41, 0.25, 0.66, 0.8, 0.07);		// data uji (silahkan ubah data ini untuk melakukan pengujian bobot akhir)
							$data_uji = array($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10);
							$hasil = $nn->classification($data_uji, $bobot, $bias); // melakukan proses klasifikasi dengan data uji
							// echo "<br><br> Hasil klasifikasi : " . $hasil;				// hasil klasifikasi

							echo '<br><br>';
							if ($hasil == 1) {
								echo '<Strong>Hasil Keputusan : Siswa dengan nama ' . $nama . '  dinyatakan </strong><h4 class="badge badge-success">Lulus<h4>';
							} else {
								echo '<strong>Hasil Keputusan : Siswa dengan nama ' . $nama . ' ditanyakan </strong><h4 class="badge badge-danger">Tidak lulus<h4>';
							}

							?>
						</div>
					</div>

				</div>
				<!-- content-wrapper ends -->
				<!-- partial:../../partials/_footer.html -->
				<footer class="footer">
					<div class="container-fluid clearfix">
						<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
						<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
						</span>
					</div>
				</footer>
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="admintemplate/assets/vendors/js/vendor.bundle.base.js"></script>
	<script src="admintemplate/assets/vendors/js/vendor.bundle.addons.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page-->
	<!-- End plugin js for this page-->
	<!-- inject:js -->
	<script src="admintemplate/assets/js/shared/off-canvas.js"></script>
	<script src="admintemplate/assets/js/shared/misc.js"></script>
	<!-- endinject -->
	<!-- Custom js for this page-->
	<!-- End custom js for this page-->
</body>

</html>