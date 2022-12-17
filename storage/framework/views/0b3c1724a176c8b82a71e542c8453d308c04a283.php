


<?php $__env->startSection('content'); ?>
    <div class="container">
         
          <form action="<?php echo e(route("tipoproduto.update", $tipoProdutos->id)); ?>" method="POST" >  
            <?php echo csrf_field(); ?> 
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
              <label for="id-input-id">ID</label>
              <input type="text" class="form-control" id="id-input-id" aria-describedby="idHelp" placeholder="#" value="<?php echo e($tipoProdutos->id); ?>" disabled>
              <small id="idHelp" class="form-text text-muted">Não é necessário informar o ID para cadastrar um novo dado.</small>
            </div>

            <div class="form-group"> 
              <label for="id-input-nome">Descrição</label> 
              <input name="descricao" class="form-control" id="id-input-nome" placeholder="Digite a descrição do tipo produto" value="<?php echo e($tipoProdutos->descricao); ?>" required >    
            </div> 

            <div class="my-1">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-primary" href="/tipoproduto" >Voltar</a>
            </div>

          </form>

        </div>
<?php $__env->stopSection(); ?>                  
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jaqueline Oliveira\Desktop\Ciência da Computação - IFSC\6 ª Fase\Tópicos Especiais Em Programação\RestauranteLaravel\resources\views/tipoproduto/edit.blade.php ENDPATH**/ ?>