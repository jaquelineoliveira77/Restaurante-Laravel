<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <a href="<?php echo e(route("pedidoadmin.index")); ?>" class="btn btn-primary">Gerenciar Pedidos</a>
                    <a href="<?php echo e(route("produto.index")); ?>" class="btn btn-primary">Gerenciar Produtos</a>
                    <a href="<?php echo e(route("tipoproduto.index")); ?>" class="btn btn-primary">Gerenciar Tipo de Produtos</a>
                    <a href="/" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aluno\Documents\Tópicos em programação\RestauranteLaravel\RestauranteLaravel\resources\views/admin.blade.php ENDPATH**/ ?>