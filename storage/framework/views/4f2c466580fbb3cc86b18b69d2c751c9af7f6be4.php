<?php $__env->startSection('content'); ?>
    <div class="container">

        

        <?php if(isset($message)): ?>
            <div class="alert alert-<?php echo e($message[1]); ?> alert-dismissible fade show" role="alert">
                <span><?php echo e($message[0]); ?></span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        
        <a class="btn btn-primary" href="<?php echo e(route("endereco.create")); ?>">Criar Endereço</a>
        <a class="btn btn-primary" href="<?php echo e(route("home")); ?>">Voltar</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Logradouro</th>
                    <th scope="col">Número</th>
                    <th scope="col">Complemento</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $enderecos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $endereco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($endereco->id); ?></th>
                        <td><?php echo e($endereco->bairro); ?></td>
                        <td><?php echo e($endereco->logradouro); ?></td>
                        <td><?php echo e($endereco->numero); ?></td>
                        <td><?php echo e($endereco->complemento); ?></td>
                        <td>
                            <a href="<?php echo e(route("endereco.show", $endereco->id)); ?>" class="btn btn-primary">Mostrar</a>
                            <a href="<?php echo e(route("endereco.edit", $endereco->id)); ?>" class="btn btn-secondary">Editar</a>
                            <a href="#" 
                               class="btn btn-danger class-button-destroy" 
                               data-bs-toggle="modal" 
                               data-bs-target="#id-modal-destroy"
                               value="<?php echo e(route("endereco.destroy", $endereco->id)); ?>">
                                    Remover
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="id-modal-destroy" tabindex="-1" aria-labelledby="id-label-modal-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="id-label-modal-title">Remover recurso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Deseja realmente remover este recurso?</p>
                </div>
                <div class="modal-footer">
                    <form id="id-form-destroy" method="POST" action="" class="d-inline-block">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Confirmar remoção</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Buscando na minha tela, todos os elementos que possuem a classe "class-button-destroy"
        const arrayBtnDestroy = document.querySelectorAll(".class-button-destroy");
        // Busco o form que está dentro do modal
        const formDestroy = document.querySelector("#id-form-destroy");
        // Para todos os elementos dentro do array, irei adicionar evento e click neles
        arrayBtnDestroy.forEach(btnDestroy => {
            // Adiciona o evento de click
            btnDestroy.addEventListener('click', btnDestroyFunction);
        });
        function btnDestroyFunction (){
            // Imprimo no console qual é o value do botão que chamou essa função
            //console.log(this.getAttribute("value"));
            // Configuro o atributo "action" do elemento form com o valor do campo 
            //    escondido "value" do botão que chamou essa função.
            formDestroy.setAttribute("action", this.getAttribute("value"));
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jaqueline Oliveira\Desktop\Ciência da Computação - IFSC\6 ª Fase\Tópicos Especiais Em Programação\RestauranteLaravel\resources\views/Endereco/index.blade.php ENDPATH**/ ?>