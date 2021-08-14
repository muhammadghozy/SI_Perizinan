<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "si_perizinan");


include_once 'navbar.php';


?>

<head>
	<title> Dashboard </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="profile.php" role="button"><i class="fa far fa-user mt-1"></i></a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->
		<!-- Main Sidebar Container -->
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-1 text-dark"> <?= $_SESSION['nama'] ?> </h1>
							<h1 class="m-1 text-dark"> <?= $_SESSION['nim'] ?> </h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
								<li class="breadcrumb-item active">Dashboard</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div>
			</div><!-- /.container-fluid -->
			<div class="container mt-4 mb-4">
				<div class="row">
					<?php
					$result  = mysqli_query($conn, "SELECT * FROM lab_kalab");
					while ($row = mysqli_fetch_assoc($result)) :    ?>
						<div class="col-md-4 mt-4">
							<div class="card border border-dark rounded">
								<div class="card-body" style="min-height: 8.5rem;">
									<h5 class="card-title"><?= $row["lab"]; ?></h5>
									</br></br>
									<a href="#" class="card-link">Detail</a>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>

			<!-- Footer -->
			<footer class="site-footer bg-dark">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 mt-3">
							<img src="https://spada.uns.ac.id/pluginfile.php/2/course/section/1/uns.png" style="width: 40%; padding-center: 2em;" alt="">
							<h3 class="footer-heading text-blue">Fakultas Teknik UNS</h3>
							<p>Jl. Ir. Sutami No.36 A Surakarta 57126 <br>
								Telp (+62)77358350233 <br>
								Fax (+62)77358350233 <br>
								Email : ft@ft-uns.com </p>
						</div>
						<div class="col-md-4 mt-3">
							<h3 class="footer-heading text-light">Program Studi</h3>
							<a href="https://arsitektur.ft.uns.ac.id/" target='_blank'>Arsitektur</a> <br>
							<a href="https://sipil.ft.uns.ac.id/?lang=id" target='_blank'>Teknik Sipil</a> <br>
							<a href="https://mesin.ft.uns.ac.id/" target='_blank'>Teknik Mesin</a> <br>
							<a href="http://industri.ft.uns.ac.id/" target='_blank'>Teknik Industri</a> <br>
							<a href="https://che.ft.uns.ac.id/" target='_blank'>Teknik Kimia</a> <br>
							<a href="https://elektro.ft.uns.ac.id/" target='_blank'>Teknik Elektro</a> <br>
							<a href="https://pwk.ft.uns.ac.id/" target='_blank'>Perencanaan Wilayah dan Kota</a> <br>
						</div>
						<div class="col-md-3 mt-3">
							<div class="col-md-11">
								<h3 class="footer-heading text-light">Maps</h3>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.120699070088!2d110.85154081477673!3d-7.5618169945466365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16fdf072a90f%3A0xea50b255b0e6ce3e!2sFakultas%20Teknik%20Uns!5e0!3m2!1sen!2sid!4v1619534477026!5m2!1sen!2sid" style="max-width:300; max-height:200" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</footer>
		</div>
	</div>
	<!-- /.content-wrapper -->


	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->
	<footer class="main-footer bg-dark">

		SISTEM INFORMASI PERIZINAN
		<div class="float-right d-none d-sm-inline-block">
			<b>Version</b> 3.0.5
		</div>
	</footer>
	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- ChartJS -->
	<script src="plugins/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="plugins/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="plugins/moment/moment.min.js"></script>
	<script src="plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Summernote -->
	<script src="plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="dist/js/pages/dashboard.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
</body>

</html>