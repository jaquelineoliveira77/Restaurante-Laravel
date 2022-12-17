

<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="form-group"> 
            <label class="form-label">ID</label> 
            <input type="text" class="form-control" value=<?php echo e($tipoProduto->id); ?> disabled>  
        </div> 

        
        <div class="form-group"> 
            <label class="form-label">Tipo</label> 
            <input type="text" class="form-control" value=<?php echo e($tipoProduto->descricao); ?> disabled>  
        </div>

        <div class="form-group"> 
            <label class="form-label">Updated At</label> 
            <input type="text" class="form-control" value="<?php echo e($tipoProduto->updated_at); ?>" disabled>  
        </div>

        <div class="form-group"> 
            <label class="form-label">Created At</label> 
            <input type="text" class="form-control" value="<?php echo e($tipoProduto->created_at); ?>" disabled>  
        </div>

        <div class="my-3">
            <a href="<?php echo e(route("tipoproduto.index")); ?>" class="btn btn-primary">Voltar</a>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jaqueline Oliveira\Desktop\Ciência da Computação - IFSC\6 ª Fase\Tópicos Especiais Em Programação\RestauranteLaravel\resources\views/tipoProduto/show.blade.php ENDPATH**/ ?>