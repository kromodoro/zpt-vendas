<?php $__env->startSection('title', 'ZPT Digital - Produtos'); ?>

<?php $__env->startSection('content_header'); ?>
<h1 class="m-0 text-dark">Produtos</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col">
     <?php echo $__env->make('components.alerts.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </div>
</div>

<div class="row justify-content-end px-2">
    <a href="<?php echo e(route('product.action') . '/form'); ?>" class="btn btn-primary">
        <i class="fas fa-plus"></i>
        Novo Produto
    </a>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th colspan="6">
                                <?php echo $__env->make('components.search', ['search' => (isset($_GET['key'])) ? $_GET['key'] : ''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </th>
                        </tr>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Nome abreviado</th>
                            <th>EAN</th>
                            <th>Valor</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $__currentLoopData = $data->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr class="text-center">
                                <td><?php echo e($product->id); ?></td>
                                <td><?php echo e($product->name); ?></td>
                                <td><?php echo e($product->name_abrev); ?></td>
                                <td><?php echo e($product->ean); ?></td>
                                <td>R$ <?php echo e(number_format($product->value, 2, ',','.')); ?></td>
                                <td>
                                    <a 
                                        href="<?php echo e(route('product.action') . '/sale/' . $product->id); ?>" 
                                        class="btn btn-info">Vender
                                    </a>
                                    
                                    <a 
                                        href="<?php echo e(route('product.action') .'/form/'. $product->id); ?>" class="btn btn-warning">EDIT
                                    </a>
                                    
                                    <!--a 
                                        href="<?php echo e(route('product.action') . '/del/' . $product->id); ?>" class="btn btn-danger">DEL
                                    </a-->
                                </td>
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/zpt/resources/views/product/index.blade.php ENDPATH**/ ?>