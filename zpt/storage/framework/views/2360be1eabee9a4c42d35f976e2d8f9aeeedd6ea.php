<?php $__env->startSection('title', 'ZPT Digital - Logs'); ?>

<?php $__env->startSection('content_header'); ?>
<h1 class="m-0 text-dark">Logs do sistema</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col">
     <?php echo $__env->make('components.alerts.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>Vendedor</th>
                            <th>Descrição</th>
                            <th>Produto</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $__currentLoopData = $data->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr class="text-center">
                                <td><?php echo e($field->usuario); ?></td>
                                <td><?php echo e($field->description); ?></td>
                                <td><?php echo e($field->produto); ?></td>
                                <td><?php echo e($field->created_at); ?></td>
                            </tr>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                    <tfooter>
                        <tr>
                            <td colspan="6">
                                <?php echo e((count($data) < 10) ? '' :$data->links()); ?>

                            </td>
                        </tr>
                    </tfooter>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/zpt/resources/views/product/historic.blade.php ENDPATH**/ ?>