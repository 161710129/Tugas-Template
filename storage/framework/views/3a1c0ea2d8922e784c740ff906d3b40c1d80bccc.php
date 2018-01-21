<html>
<head>
	<title>Latihan Blade Templating</title>
</head>
<body>
	<!-- menambahkan header -->
	<?php echo $__env->make('part.header2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<!-- tempat yang bisa di isi -->
		<?php echo $__env->yieldContent('konten'); ?><br><br>

	<!-- menambahkan sebuah footer -->
	<?php echo $__env->make('part.footer2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>