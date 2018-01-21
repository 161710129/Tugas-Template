<html>
<head>
	<title>Data Barang</title>
</head>
<body>
	<h2>Data barang</h2><br><br>
	<?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php echo e($key->Kode_barang); ?>+<?php echo e($key->Nama_barang); ?>+<?php echo e($key->Harga); ?><hr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>