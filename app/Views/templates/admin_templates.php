<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prueba</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url();?>/public/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="<?= base_url();?>/public/plugins/pizza/fontawesome.min.css">

	<link rel="stylesheet" href="<?= base_url();?>/public/plugins/pizza/sweetalert2.min.css">
	
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url();?>/public/dist/css/adminlte.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?= base_url();?>/public/plugins/daterangepicker/daterangepicker.css">

	

	<!-- jQuery -->

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

	<script src="<?= base_url();?>/public/plugins/pizza/sweetalert2.min.js"></script>
	
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url();?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- AdminLTE App -->
	<script src="<?php echo base_url();?>/public/dist/js/adminlte.js"></script>

	

</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		
		<!-- Content Wrapper. Contains page content -->
		<div class="content">
			<?php $this->renderSection('content'); ?>
		</div>
		
	</div>
	<!-- ./wrapper -->


</body>

</html>