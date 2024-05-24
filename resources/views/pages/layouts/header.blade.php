<!DOCTYPE html>
<html lang="PT-BR">
<head>
    @yield('titulo')
    <title>IntegraFatec - HOME</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('/css/style.css') }}>
    <link rel="stylesheet" href={{ asset('/css/header.css')}}>
    <link rel="stylesheet" href={{ asset('/css/footer.css')}}>
</head>
<body class="container">
    <header class="header-fixed" id="mobile-menu">
        <div class="header-container generic-style">
          <div class=" logo-container">
            <a href="{{url('index')}}"><img src="img/logo.svg" alt="logo"></a>
          </div>
          <div class="nav-burguer">
            <span id="burguer" class="material-symbols-outlined" onclick="clickMenu()" onchange="clickBody">menu</span>
          </div>
        </div>
        <nav class="navbar-container" id="itens">
          <ul class="nav-list">
            <li style="padding-top: 11px"><a href="{{url('index')}}">Home</a></li>
            <li><a href="{{url('grade')}}">Horário</a></li>
            <li><a href="{{url('mural')}}">Mural</a></li>
            @if(auth()->check())
            <li><a href="{{url('perfil')}}">Perfil</a></li>
            <form method="POST" action="{{ route('logout') }}">
            @csrf
            <li>
                <a href="logout"
                onclick="event.preventDefault();
                            this.closest('form').submit();">Logout</a>
            </li>
            </form>
            @else
            <li><a href="{{url('login')}}">Login</a></li>
            @endif
          </ul>

        </nav>
        </div>
    </header>

    <div class="container">
        @yield('conteudo')
    </div>
</body>
</html>
