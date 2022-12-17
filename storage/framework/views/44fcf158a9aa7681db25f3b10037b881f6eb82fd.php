<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="<?php echo e(route("endereco.store")); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
              <label for="id-input-id" class="form-label">ID</label>
              <input type="text" class="form-control" id="id-input-id" aria-describedby="idHelp" placeholder="#" disabled>
              <div id="id" class="form-text">Não será necessário cadastrar um id</div>
            </div>
            <div class="mb-3">
              <label for="id-input-bairro" class="form-label">Bairro</label>
              <input name="bairro" type="text" class="form-control" id="id-input-bairro" placeholder="Digite o bairro" required>
            </div>
            <div class="mb-3">
              <label for="id-input-logradouro" class="form-label">Logradouro</label>
              <input name="logradouro" type="text" class="form-control" id="id-input-logradouro" placeholder="Digite o logradouro" required>
            </div>
            <div class="mb-3">
              <label for="id-input-numero" class="form-label">Número</label>
              <input name="numero" type="text" class="form-control" id="id-input-numero" placeholder="Digite os número" required>
            </div>
            <div class="mb-3">
              <label for="id-input-complemento" class="form-label">Complemento</label>
              <input name="complemento" type="text" class="form-control" id="id-input-complemento" placeholder="Digite a complemento" required>
            </div>
            <a href="<?php echo e(route("endereco.index")); ?>" class="btn btn-primary">Voltar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jaqueline Oliveira\Desktop\Ciência da Computação - IFSC\6 ª Fase\Tópicos Especiais Em Programação\RestauranteLaravel\resources\views/Endereco/create.blade.php ENDPATH**/ ?>