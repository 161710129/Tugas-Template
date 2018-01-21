<?php $__env->startSection('konten'); ?>
	Ini contoh dasar blade tempate
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.maste', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>