@extends('layouts.app')

@section('content')
    <div class="container">
          <form action="{{route("tipoproduto.store")}} "method="post">  {{--Substituindo rotas físicas por rotas nomeadas --}}
                @csrf 
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
@endsection       