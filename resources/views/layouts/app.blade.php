<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestor de Tarefas - @yield("title")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                <span class="fs-4">Gestor de Tarefas</span>
              </a>
        
              <ul class="nav nav-pills">
                @auth
                    <li class="nav-item"><a href="#" class="nav-link">{{auth()->user()->name}}</a></li>
                @endauth
                @guest
                    <li class="nav-item"><a href="{{route("auth.login.form")}}" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="{{route("auth.register.form")}}" class="nav-link">Criar Conta</a></li>
                @endguest
              </ul>
            </header>
          </div>
    </nav>

    <main class="container">
        @yield("content")
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>