<!DOCTYPE html>
<html lang="PT-BR">
<head>
    @yield('titulo')
    <title>IntegraFatec - HOME</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('/css/style.css') }}>
</head>
<body class="container">
    <header>
        <div class="header-container">
            <div class="text-navbar">
                <div class="card-logo">
                    <img src={{asset('img/logo.svg')}} alt="logo">
                </div>
                <div class="home">
                    <a href="/index">HOME</a>
                </div>
                <div>
                    <a href="/grade">GRADE</a>
                </div>
                <div>
                    <a href="/mural">MURAL</a>
                </div>
                <div>
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="logout"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">LOGOUT</a>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        @yield('conteudo')
    </div>
</body>
</html>
