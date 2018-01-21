
<?php $__env->startSection('konten'); ?>
<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Kode ticket
						</th>
						<th>
							Nama penonton
						</th>
						<th>
							Harga
						</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; ?>
					<?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td>
							<?php echo e($no++); ?>

						</td>
						<td>
							<?php echo e($tab->Kode_ticket); ?>

						</td>
						<td>
							<?php echo e($tab->Nama_penonton); ?>

						</td>
						<td>
							<?php echo e($tab->Harga); ?>

						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
				</tbody>
			</table> 
			<button type="button" class="btn btn-default">
				Default
			</button>
			<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>