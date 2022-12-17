<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="<?php echo e(route("produto.update", $produto->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="id-input-id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id-input-id" aria-describedby="idHelp" placeholder="#" value="<?php echo e($produto->id); ?>" disabled>
                <div id="id" class="form-text">Não será necessário cadastrar um id</div>
            </div>
            <div class="form-group">
                <label for="id-input-nome" class="form-label">Nome</label>
                <input name="nome" type="text" class="form-control" id="id-input-nome" placeholder="Digite o nome" value="<?php echo e($produto->nome); ?>" required>
            </div>
            <div class="form-group">
                <label for="id-input-preco" class="form-label">Preço</label>
                <input name="preco" type="text" class="form-control" id="id-input-preco" placeholder="Digite o preço" value="<?php echo e($produto->preco); ?>" required>
            </div>
            <div class="form-group">
                <label for="id-input-tipo">Tipo</label>
                <select class="form-select" name="Tipo_Produtos_id" aria-label="Selecione um tipo">
                    <?php $__currentLoopData = $tipoProdutos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipoProduto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        
                        <?php if( $tipoProduto->id == $produto->Tipo_Produtos_id ): ?>
                            <option value="<?php echo e($tipoProduto->id); ?>" selected><?php echo e($tipoProduto->descricao); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($tipoProduto->id); ?>"><?php echo e($tipoProduto->descricao); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id-input-ingredientes" class="form-label">Ingredientes</label>
                <input name="ingredientes" type="text" class="form-control" id="id-input-ingredientes" placeholder="Digite os ingredientes" value="<?php echo e($produto->ingredientes); ?>" required>
            </div>
            <div class="form-group">
                <label for="id-input-urlImage" class="form-label">Url Image</label>
                <input name="urlImage" type="text" class="form-control" id="id-input-urlImage" placeholder="Digite a urlImage" value="<?php echo e($produto->urlImage); ?>" required>
            </div>
            <div class="my-1">
                <a href="<?php echo e(route("produto.index")); ?>" class="btn btn-primary">Voltar</a>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jaqueline Oliveira\Desktop\Ciência da Computação - IFSC\6 ª Fase\Tópicos Especiais Em Programação\RestauranteLaravel\resources\views/Produto/edit.blade.php ENDPATH**/ ?>