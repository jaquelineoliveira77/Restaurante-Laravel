@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="form-group"> 
            <label class="form-label">ID</label> {{--título --}}
            <input type="text" class="form-control" value={{$tipoProduto->id}} disabled>  
        </div> 

        
        <div class="form-group"> 
            <label class="form-label">Tipo</label> {{--título --}}
            <input type="text" class="form-control" value={{$tipoProduto->descricao}} disabled>  
        </div>

        <div class="form-group"> 
            <label class="form-label">Updated At</label> {{--título --}}
            <input type="text" class="form-control" value="{{$tipoProduto->updated_at}}" disabled>  
        </div>

        <div class="form-group"> 
            <label class="form-label">Created At</label> {{--título --}}
            <input type="text" class="form-control" value="{{$tipoProduto->created_at}}" disabled>  
        </div>

        <div class="my-3">
            <a href="{{route("tipoproduto.index")}}" class="btn btn-primary">Voltar</a>
        </div>
@endsection