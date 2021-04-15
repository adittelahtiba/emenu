<?php
if (!$this->session->userdata('cafe')) {
    $this->session->set_flashdata('message', '<div class="alert alert-danger  alert-dismissable" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>Anda Harus login Dulu</div>');
    redirect('Login');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Admin Dashboard E Cafe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="A premium admin dashboard template by Mannatthemes" name="description" />
	<meta content="Mannatthemes" name="author" />

	<!-- App favicon -->
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/statis/img/logo-saja.png" />
	<link href="<?= base_url(); ?>assets/statis/dashboard-e-cafe/assets/plugins/dropify/css/dropify.min.css" rel="stylesheet" />
	<!-- App css -->
	<link href="<?= base_url(); ?>assets/statis/dashboard-e-cafe/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/statis/dashboard-e-cafe/assets/css/icons.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/statis/dashboard-e-cafe/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/statis/dashboard-e-cafe/assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/statis/dashboard-e-cafe/assets/css/custom.css" rel="stylesheet" type="text/css" />
</head>

<body class="dark-topbar">
	<!-- Top Bar Start -->
	<div class="topbar">
		<!-- LOGO -->
		<div class="topbar-left">
			<a href="javascript:void(0)" class="logo">
				<span>
					<img src="<?= base_url(); ?>assets/statis/img/logo-aja-putih.png" alt="logo-small" class="logo-sm" />
				</span>
				<!-- <span>
					<img src="<?= base_url(); ?>assets/statis/img/tulisan.png" alt="logo-large" class="logo-lg hidden-sm" />
				</span> -->
				<span>
					<img src="<?= base_url(); ?>assets/statis/img/tulisan.png" alt="logo-large" style="width:35%;" class=" hidden-sm" />
				</span>
			</a>
		</div>
		<!--end logo-->
		<!-- Navbar -->
		<nav class="navbar-custom">
			<ul class="list-unstyled float-right mb-0">
				<li class="dropdown">
					<a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						<!-- <img src="<?= base_url(); ?>assets/statis/dashboard-e-cafe/assets/images/users/test.jpeg" alt="profile-user" class="rounded-circle" /> -->
						<span class="ml-1 nav-user-name hidden-sm" style="color: black"><?= $_SESSION['nama']; ?> <i class="mdi mdi-chevron-down"></i>
						</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<!-- <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
              <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
              <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
              <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
              <div class="dropdown-divider"></div> -->
						<a class="dropdown-item" href="<?= base_url('Login/logout'); ?>"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
					</div>
				</li>
			</ul>
			<ul class="list-unstyled topbar-nav mb-0">
				<li>
					<button class="button-menu-mobile nav-link waves-effect waves-light">
						<i class="dripicons-menu nav-icon"></i>
					</button>
				</li>
				<li>
					<span class="ml-1 nav-user-name nav-link hidden-sm" style="color: black">
						<marquee>Selamat Datang Di Dashboard Admin E-Cafe
						</marquee>
					</span>
				</li>
				<li class="float-right">
					<span class="ml-1 nav-user-name nav-link hidden-sm time" style="color: black"></span>
				</li>
				<li class="float-right">
					<span class="ml-1 nav-user-name nav-link hidden-sm date" style="color: black"></span>
				</li>
			</ul>
			<!--end topbar-nav-->
		</nav>
		<!-- end navbar-->
	</div>
	<!-- Top Bar End -->