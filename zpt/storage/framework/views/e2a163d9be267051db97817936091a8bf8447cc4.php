<?php if($errors->any()): ?>

<div class="alert alert-success alert-dismissible fade show text-white" role="alert">

	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<p><?php echo e($error); ?></p>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">

		<span aria-hidden="true">&times;</span>

	</button>
	
</div>

<?php endif; ?>

<?php if(session('success')): ?>

<div class="alert alert-success alert-dismissible fade show text-white" role="alert">

	<p><?php echo e(session('success')); ?></p>

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">

		<span aria-hidden="true">&times;</span>

	</button>
	
</div>

<?php endif; ?>

<?php if(session('error')): ?>

<div class="alert alert-danger alert-dismissible fade show text-white" role="alert">

	<p><?php echo e(session('error')); ?></p>

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">

		<span aria-hidden="true">&times;</span>

	</button>

</div>

<?php endif; ?><?php /**PATH /var/www/zpt/resources/views/components/alerts/alert.blade.php ENDPATH**/ ?>