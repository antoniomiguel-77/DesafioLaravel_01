@extends('layouts.app')
@section('title','Registrar-se')
@section('content')
<div class="p-5 col-md-12 d-flex justify-content-center flex-wrap ">
    <form class="col-md-6 mt-5" method="POST" action="{{route('auth.register')}}">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Registrar-se</h1>
        <div class="form-floating">
            <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Nome Completo">
            <label for="floatingInput">Nome Completo</label>
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Senha</label>
      @error('password')
      <span class="text-danger">{{$message}}</span>
     @enderror
    </div>
        <div class="form-floating">
      <input type="password" name="confirmPassword" class="form-control" id="floatingPassword" placeholder="Confirmar Password">
      <label for="floatingPassword">Confirmar Senha</label>
      @error('confirmPassword')
      <span class="text-danger">{{$message}}</span>
     @enderror
    </div>
    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Registrar</button>
</form>
</div>
@endsection
