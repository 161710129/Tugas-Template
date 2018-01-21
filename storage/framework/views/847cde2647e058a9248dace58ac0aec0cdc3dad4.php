<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- navbar -->
			<?php echo $__env->make('patrial.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- endnavbar -->
			<h3>Jalan Panjang Persib Bandung</h3>
			<p>
				<?php echo $__env->yieldContent('isikonten'); ?>
			</p>
		</div>
	</div>
</div>

    <script src="assets/js/jquery.min./js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>