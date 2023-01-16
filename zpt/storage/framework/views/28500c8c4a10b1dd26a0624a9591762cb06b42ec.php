<?php $__env->startSection('auth_body'); ?>

<div class="row justify-content-end">
    <a href="<?php echo e(route('product')); ?>" class="btn btn-primary">Voltar</a>
</div>

<div class="row justify-content-center">
    <h3 class="text-center">Formulário de Venda</h3>
</div>

<hr>

<form action="/product/action/<?php echo e($option); ?>/<?php echo e($id); ?>" method="post" class="row">
    <?php echo csrf_field(); ?>

    <input type="hidden" name="id" id="id" value="<?php echo e($data[0]->id ?? null); ?>">

    <div class="form-group mb-3 col-12">
        <label for="name">Nome do produto</label>
        <input 
            type="text" 
            name="name" 
            id="name" 
            class="form-control"
            value="<?php echo e($data[0]->name ?? ''); ?>" 
            placeholder="Nome do produto" 
            maxlength="255"
            readonly 
        />
    </div>

    <div class="form-group mb-3 col-12">
        <label for="ean">EAN/GTIN/label</label>
        <input 
            type="text" 
            name="ean" 
            id="ean" 
            class="form-control"
            value="<?php echo e($data[0]->ean ?? ''); ?>" 
            placeholder="EAN" 
            maxlength="44"
            readonly 
        />
    </div>

    <div class="form-group mb-3 col-12">
        <label for="value">Valor do produto</label>
        <input 
            type="number" 
            name="value" 
            id="value" 
            class="form-control"
            value="<?php echo e($data[0]->value ?? 0); ?>" 
            placeholder=" 0.00" 
            step="0.01"
            min="0"
            readonly
        />
    </div>

    <div class="form-group mb-3 col-6">
        <label for="rebate">Desconto</label>
        <input 
            type="number" 
            name="rebate" 
            id="rebate" 
            class="form-control"
            step="0.01"
            min="0"
        />
    </div>

    <div class="form-check col-6 my-4 pt-3">
        <input type="checkbox" class="form-check-input" id="rebate_percent" name="rebate_percent">
        <label class="form-check-label" for="rebate_percent">%</label>
    </div>

    <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary">
            Registrar
        </button>
    </div>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::auth.auth-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/zpt/resources/views/product/sale.blade.php ENDPATH**/ ?>