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
        </div>
    </header>

    <div class="container">
        @yield('conteudo')
    </div>
</body>
</html>
