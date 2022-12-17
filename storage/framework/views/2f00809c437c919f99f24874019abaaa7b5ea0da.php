<?php $__env->startSection('content'); ?>
    <div class="container">
        
        <?php if(isset($message)): ?>
            <div class="alert alert-<?php echo e($message[1]); ?> alert-dismissible fade show" role="alert">
                <span><?php echo e($message[0]); ?></span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <a class="btn btn-primary" href="<?php echo e(route("produto.create")); ?>">Criar Produto</a>
        <a class="btn btn-primary" href="<?php echo e(route("admin.dashboard")); ?>">Voltar</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($produto->id); ?></th>
                        <td><?php echo e($produto->nome); ?></td>
                        <td><?php echo e($produto->preco); ?></td>
                        <td><?php echo e($produto->descricao); ?></td>
                        <td>
                            <a href="<?php echo e(route("produto.show", $produto->id)); ?>" class="btn btn-primary">Mostrar</a>
                            <a href="<?php echo e(route("produto.edit", $produto->id)); ?>" class="btn btn-secondary">Editar</a>
                            <a href="#" 
                                class="btn btn-danger class-button-destroy" 
                                data-bs-toggle="modal" 
                                data-bs-target="#destroyModal"
                                value="<?php echo e(route("produto.destroy", $produto->id)); ?>">Remover</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="destroyModal" tabindex="-1" aria-labelledby="destroyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="destroyModalLabel">Confirmação de remoção</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Deseja realmente remover este recurso?
                </div>

                <div class="modal-footer">
                    
                    <form id="id-form-modal-botao-remover" action="" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <input type="submit" class="btn btn-danger" value="Confirmar remoção">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <script>
        const arrayBtnRemover = document.querySelectorAll(".class-button-destroy");
        const formModalBotaoRemover = document.querySelector("#id-form-modal-botao-remover");
        //console.log(arrayBtnRemover);
        arrayBtnRemover.forEach(btnRemover => {
            btnRemover.addEventListener("click", configurarBotaoRemoverModal);
        });
        function configurarBotaoRemoverModal(){
            // Imprimindo o conteudo do atributo value do botão que chamou essa função
            //console.log( this.getAttribute("value") );
            //console.log(formModalBotaoRemover);
            formModalBotaoRemover.setAttribute("action", this.getAttribute("value"));
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jaqueline Oliveira\Desktop\Ciência da Computação - IFSC\6 ª Fase\Tópicos Especiais Em Programação\RestauranteLaravel\resources\views/Produto/index.blade.php ENDPATH**/ ?>