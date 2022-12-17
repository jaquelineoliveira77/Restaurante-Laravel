{{-- Método edit tem o objetivo de mostrar um formulário para editar um determinado produto --}}
@extends('layouts.app')

@section('content')
    <div class="container">
         
          <form action="{{route("tipoproduto.update", $tipoProdutos->id)}}" method="POST" >  {{--Substituindo rotas físicas por rotas nomeadas --}}
            @csrf 
            @method('PUT')
            <div class="form-group">
              <label for="id-input-id">ID</label>
              <input type="text" class="form-control" id="id-input-id" aria-describedby="idHelp" placeholder="#" value="{{$tipoProdutos->id}}" disabled>
              <small id="idHelp" class="form-text text-muted">Não é necessário informar o ID para cadastrar um novo dado.</small>
            </div>

            <div class="form-group"> 
              <label for="id-input-nome">Descrição</label> {{--título --}}
              <input name="descricao" class="form-control" id="id-input-nome" placeholder="Digite a descrição do tipo produto" value="{{$tipoProdutos->descricao}}" required > {{--campo para digitar --}}   
            </div> 

            <div class="my-1">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-primary" href="/tipoproduto" >Voltar</a>
            </div>
          </form>
    </div>
@endsection                  