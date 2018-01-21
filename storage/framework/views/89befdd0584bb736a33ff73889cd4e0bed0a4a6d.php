<html>
<head>
	<title>Custom Blade</title>
</head>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
<body>
	<!-- menambahkan header -->
	<?php echo $__env->make('patrial.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<!-- tempat yang bisa di isi -->
		<?php echo $__env->make('patrial.jumbotron', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	

	<!-- menambahkan sebuah footer -->
	<?php echo $__env->make('patrial.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>