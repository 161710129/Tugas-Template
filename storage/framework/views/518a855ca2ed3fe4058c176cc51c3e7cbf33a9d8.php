<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Template Table</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="kismet/css/bootstrap.min.css" rel="stylesheet">
    <link href="kismet/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- navbar -->
			<?php echo $__env->make('patrial.navtab', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- end navbar -->
			<!-- table -->
			<?php echo $__env->yieldContent('konten'); ?>
			<!-- end table -->
		</div>
	</div>
</div>

    <script src="kismet/js/jquery.min.js"></script>
    <script src="kismet/js/bootstrap.min.js"></script>
    <script src="kismet/js/scripts.js"></script>
  </body>
</html>