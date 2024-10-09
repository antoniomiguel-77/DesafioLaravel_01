@extends('layouts.app')
@section('title','Criar Tarefa')
@section('content')
<div class="p-5 col-md-12 d-flex justify-content-center flex-wrap ">
    <form class="col-md-6 mt-5" method="POST" action="{{route('task.store')}}">
        @csrf
        @method("POST")
        @if (session("message"))
        <div class="alert alert-danger">
          <span>{{session("message")}}</span>
        </div>
        @endif
        <div class="form-floating">
            <input name="title" type="text" class="form-control" id="floatingInput" placeholder="Digite Sua Tarefa">
            <label for="floatingInput">Digite Sua Tarefa</label>
            @error('title')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
       
    
   
    <button class="w-100 mt-3 btn btn-lg btn-primary" type="submit">Salvar</button>
</form>
</div>
@endsection
