@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- pestice extensão para verificar a página f12 --}}
            {{-- Mostrando mensagem de erro --}}
             {{-- <?php $message = ["Texto a ser exibido", "warning"] ?> --}} 
             @if (@isset($message))
             <div class="alert alert-{{$message[1]}} alert-dismissible fade show" role="alert">
                 <span>{{$message[0]}}</span>
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
            @endif
                <a class="btn btn-primary" href="{{route("tipoproduto.create")}}" > Criar TipoProduto </a>
                <a class="btn btn-primary" href="{{route("admin.dashboard")}}">Voltar</a>
        {{-- link tabelas bootstrap https://getbootstrap.com/docs/4.1/content/tables/ --}}
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($tipoProdutos as $tipoProduto)
                    <tr>
                        <th scope="row">{{$tipoProduto->id}}</th>
                        <td>{{$tipoProduto->descricao}}</td>
                        <td>
                            <a href="{{route("tipoproduto.show", $tipoProduto->id)}}" class="btn btn-primary">Mostrar</a>
                            <a href="{{route("tipoproduto.edit", $tipoProduto->id)}}" class="btn btn-secondary">Editar</a>
                            <a href="#" 
                            class="btn btn-danger class-button-destroy"  
                            data-bs-toggle="modal" 
                            data-bs-target="#destroyModal" 
                            value="{{route("tipoproduto.destroy", $tipoProduto->id)}}">Excluir</a> 
                        </td>
                    </tr>     
                @endforeach  
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
                     Deseja realmente remover este recurso ?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-danger">Confirmar remoção</button> --}}
                    <form id="id-form-modal-botao-remover" action="/tipoproduto/4" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Confirmar remoção" >
                    </form>
                    {{-- //Route::delete('produto/{id}', "App\Http\Controllers\ProdutoController@destroy")->name("produto.destroy"); --}}

                </div>

                </div>
            </div>
        </div>

        <script> //código java script
            const arrayBtnRemover = document.querySelectorAll(".class-button-destroy");
            const formModalBotaoRemover = document.querySelector("#id-form-modal-botao-remover");
            //console.log(arrayBtnRemover);
            arrayBtnRemover.array.forEach(btnRemover => {
                btnRemover.addEventListener("click", configurarBotaoRemoverModal);
                //alert("teste");
                  });
            function configurarBotaoRemoverModal(){
                //Imprimindo o conteúdo do atributo value do botão que chamou essa função
                //console.log(this.getAttribute("value") );
                //console.log(formModalBotaoRemover);
                formModalBotaoRemover.setAttribute("action", this.getAttribute("value"));
            }      
    </script>
@endsection