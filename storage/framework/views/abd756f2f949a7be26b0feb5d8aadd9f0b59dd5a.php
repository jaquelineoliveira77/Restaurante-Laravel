<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="form-group">
            <label class="form-label">ID</label>
            <input type="text" class="form-control" value=<?php echo e($produto->id); ?> disabled>
        </div>
        <div class="form-group">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" value=<?php echo e($produto->nome); ?> disabled>
        </div>
        <div class="form-group">
            <label class="form-label">Preço</label>
            <input type="text" class="form-control" value=<?php echo e($produto->preco); ?> disabled>
        </div>
        <div class="form-group">
            <label class="form-label">Tipo</label>
            <input type="text" class="form-control" value=<?php echo e($produto->descricao); ?> disabled>
        </div>
        <div class="form-group">
            <label class="form-label">Ingredientes</label>
            <input type="text" class="form-control" value=<?php echo e($produto->ingredientes); ?> disabled>
        </div>
        <div class="form-group">
            <label class="form-label">Url Image</label>
            <input type="text" class="form-control" value=<?php echo e($produto->urlImage); ?> disabled>
        </div>
        <div class="form-group">
            <label class="form-label">Updated At</label>
            <input type="text" class="form-control" value=<?php echo e($produto->updated_at); ?> disabled>
        </div>
        <div class="form-group">
            <label class="form-label">Created At</label>
            <input type="text" class="form-control" value=<?php echo e($produto->created_at); ?> disabled>
        </div>
        <div class="my-3">
            <a href="<?php echo e(route("produto.index")); ?>" class="btn btn-primary">Voltar</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jaqueline Oliveira\Desktop\Ciência da Computação - IFSC\6 ª Fase\Tópicos Especiais Em Programação\RestauranteLaravel\resources\views/Produto/show.blade.php ENDPATH**/ ?>