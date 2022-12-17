<?php $__env->startSection('content'); ?>
    <script src="<?php echo e(asset('js/pedidoUsuario.js')); ?>"></script> 
    <div class="container">
        
        <div>
            <h1 class="text-center">Faça seu Pedido</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Filtro de nome de produto">
                        <div class="input-group-append">
                            <button id="id-button-busca" class="btn btn-primary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <select id="id-select-filtro-tipo" class="form-select">
                        <option value="0">Tudo</option>
                        <option value="1">Pizza</option>
                        <option value="2">Suco</option>
                        <option value="3">Cerveja</option>
                    </select>
                </div>
            </div>
        </div>

        
        <div id="id-div-lista-produtos"></div>

        
        <div class="my-4 border border-dark">
            <div class="m-3">
                <h4>Itens do pedido</h4>
            </div>
            <div class="m-3">
                <table class="table text-center">
                    <tbody id="id-tbody-itens-pedido">
                    </tbody>
                </table>
            </div>
            <div class="m-3">
                <a class="btn btn-primary w-100" href="#">Próximo</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jaqueline Oliveira\Desktop\Ciência da Computação - IFSC\6 ª Fase\Tópicos Especiais Em Programação\RestauranteLaravel\resources\views/PedidoUsuario/index.blade.php ENDPATH**/ ?>