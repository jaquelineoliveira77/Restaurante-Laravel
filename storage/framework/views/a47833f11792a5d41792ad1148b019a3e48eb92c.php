<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="<?php echo e(route("endereco.update", $endereco->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
              <label for="id-input-id" class="form-label">ID</label>
              <input type="text" class="form-control" id="id-input-id" aria-describedby="idHelp" placeholder="#" value="<?php echo e($endereco->id); ?>" disabled>
              <div id="id" class="form-text">Não é possível alterar o id</div>
            </div>
            <div class="mb-3">
              <label for="id-input-bairro" class="form-label">Bairro</label>
              <input name="bairro" type="text" class="form-control" id="id-input-bairro" placeholder="Digite o bairro" value="<?php echo e($endereco->bairro); ?>" required>
            </div>
            <div class="mb-3">
              <label for="id-input-logradouro" class="form-label">Logradouro</label>
              <input name="logradouro" type="text" class="form-control" id="id-input-logradouro" placeholder="Digite o preço" value="<?php echo e($endereco->logradouro); ?>" required>
            </div>
            <div class="mb-3">
              <label for="id-input-numero" class="form-label">Número</label>
              <input name="numero" type="text" class="form-control" id="id-input-numero" placeholder="Digite os numero" value="<?php echo e($endereco->numero); ?>" required>
            </div>
            <div class="mb-3">
              <label for="id-input-complemento" class="form-label">Complemento</label>
              <input name="complemento" type="text" class="form-control" id="id-input-complemento" placeholder="Digite a complemento" value="<?php echo e($endereco->complemento); ?>">
            </div>
            <a href="<?php echo e(route("endereco.index")); ?>" class="btn btn-primary">Voltar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jaqueline Oliveira\Desktop\Ciência da Computação - IFSC\6 ª Fase\Tópicos Especiais Em Programação\RestauranteLaravel\resources\views/Endereco/edit.blade.php ENDPATH**/ ?>