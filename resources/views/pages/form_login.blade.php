@extends('layouts.app')
@section('title','Login')
@section('content')
<div class="p-5 col-md-12 d-flex justify-content-center flex-wrap ">
    <form class="col-md-6 mt-5" method="POST" action="{{route('auth.login')}}">
        @csrf
        @method("POST")
        <h1 class="h3 mb-3 fw-normal">Login</h1>
        @if (session("message"))
        <div class="alert alert-danger">
          <span>{{session("message")}}</span>
        </div>
        @endif
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
    
    <div class="checkbox mb-3">
      <label>
        <input name="remember" type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
</form>
</div>
@endsection
