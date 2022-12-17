<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="mb-3">
            <label for="id-input-id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id-input-id" value="<?php echo e($endereco->id); ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="id-input-Users_id" class="form-label">Users_id</label>
            <input type="text" class="form-control" id="id-input-Users_id" value="<?php echo e($endereco->Users_id); ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="id-input-bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="id-input-bairro" value="<?php echo e($endereco->bairro); ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="id-input-logradouro" class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="id-input-logradouro" value="<?php echo e($endereco->logradouro); ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="id-input-numero" class="form-label">Número</label>
            <input type="text" class="form-control" id="id-input-numero" value="<?php echo e($endereco->numero); ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="id-input-complemento" class="form-label">Complemento</label>
            <input type="text" class="form-control" id="id-input-complemento" value="<?php echo e($endereco->complemento); ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="id-input-updated_at" class="form-label">Updated at</label>
            <input type="text" class="form-control" id="id-input-updated_at" value="<?php echo e($endereco->updated_at); ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="id-input-created_at" class="form-label">Created at</label>
            <input type="text" class="form-control" id="id-input-created_at" value="<?php echo e($endereco->created_at); ?>" disabled>
        </div>
        <div class="mb-3">
            <a class="btn btn-primary" href="<?php echo e(route("endereco.index")); ?>">Voltar</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jaqueline Oliveira\Desktop\Ciência da Computação - IFSC\6 ª Fase\Tópicos Especiais Em Programação\RestauranteLaravel\resources\views/Endereco/show.blade.php ENDPATH**/ ?>