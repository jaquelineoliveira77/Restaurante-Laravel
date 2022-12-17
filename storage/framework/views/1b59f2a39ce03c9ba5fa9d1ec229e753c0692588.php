

<?php $__env->startSection('content'); ?>
    <div class="container">
          <form action="<?php echo e(route("tipoproduto.store")); ?> "method="post">  
                <?php echo csrf_field(); ?> 
                <div class="form-group">
                  <label for="id-input-id">ID</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="idHelp" placeholder="#" disabled>
                  <small id="idHelp" class="form-text text-muted">Não é necessário informar o ID para cadastrar um novo dado.</small>
                </div>

                <div class="form-group">
                  <label for="id-input-descricao">Descrição</label>
                  <input name="descricao" class="form-control" id="id-input-descricao" placeholder="Digite a descrição">
                </div>

                <div class="my-1">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="/tipoproduto" >Voltar</a>
                </div>

              </form>
        </div>
<?php $__env->stopSection(); ?>       
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jaqueline Oliveira\Desktop\Ciência da Computação - IFSC\6 ª Fase\Tópicos Especiais Em Programação\RestauranteLaravel\resources\views/TipoProduto/create.blade.php ENDPATH**/ ?>