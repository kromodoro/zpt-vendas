<?php $__env->startSection('title', 'ZPT Digital - Relatório'); ?>

<?php $__env->startSection('content_header'); ?>
<h1 class="m-0 text-dark">

    Relatório 
    <?php if($id == 1): ?>
        de Vendedores
    <?php else: ?>
        de Produtos
    <?php endif; ?>

</h1>
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
                        <tr>
                            <th colspan="6">
                                <?php echo $__env->make('components.search', ['search' => (isset($_GET['key'])) ? $_GET['key'] : ''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </th>
                        </tr>
                        <tr class="text-center">
                            
                            <?php if($id == 1): ?>
                                <th>Vendedor</th>
                            <?php else: ?>
                                <th>Nome</th>
                                <th>Abreviação</th>
                                <th>EAN</th>
                            <?php endif; ?>

                            <th>Total de vendas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="text-center">

                                <?php if($id == 1): ?>
                                    <td><?php echo e($venda->name); ?></td>
                                <?php else: ?>
                                    <td><?php echo e($venda->name); ?></td>
                                    <td><?php echo e($venda->name_abrev); ?></td>
                                    <td><?php echo e($venda->ean); ?></td>
                                <?php endif; ?>

                                <td>
                                    <?php echo e($venda->total); ?>

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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/zpt/resources/views/product/report.blade.php ENDPATH**/ ?>