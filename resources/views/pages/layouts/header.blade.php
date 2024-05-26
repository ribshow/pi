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
    <main>
        <div class="container">
            @yield('conteudo')
        </div>
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-card">
                <div class="logo-container">
                    <img src="img/logo.svg" alt="logo">
                    <div class="fatec-about">
                        <h3>SOBRE INTEGRA FATEC</h3>
                        <div class="site-fatec">
                            <a href="http://fatecjahu.edu.br" target="_blank">Fale Conosco</a>
                        </div>
                    </div>
                </div>
                <div class="ft-card2">
                    <h3>CONTATO</h3>
                    <ul>
                        <li>Rua Frei Galvão, s/n</li>
                        <li>Jardim Pedro Ometto</li>
                        <li>Jaú-SP, 17212-599</li>
                        <br>
                        <li>&#9743; +55 14 3622-8280</li>
                        <li>&#9993; f020dir@cps.sp.gov.br</li>
                    </ul>
                </div>
                <div>
                    <div class="ft-card2">
                        <h3>HORÁRIO DE FUNCIONAMENTO</h3>
                        <ul>
                            <li>Seg. a Sex. das 08h às 17h</li>
                        </ul>
                    </div>
                    <div class="social-network">
                        <h3>REDES SOCIAIS</h3>
                        <a href="https://www.facebook.com/fatecjahu" target="_blank"><img src="img/Facebook.svg"
                                alt="facebook-icon"></a>
                        <a href="https://www.instagram.com/fatecjahu/?hl=en" target="_blank"><img
                                src="img/Instagram.svg" alt="instagram-icon"></a>
                        <a href="https://twitter.com/fatecjahu?lang=en" target="_blank"><img src="img/X-Twiter.svg"
                                alt="twitter-icon"></a>
                    </div>
                </div>
                <div class="ft-card4">
                    <div>
                        <iframe class="fatec-location"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.038255333084!2d-48.55077262540743!3d-22.314392916967066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c7583ac8032c15%3A0xd3db07d9284a5cb2!2sFaculdade%20de%20Tecnologia%20de%20Jahu!5e0!3m2!1spt-BR!2sbr!4v1683936358903!5m2!1spt-BR!2sbr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                <div class="ft-card3">
                    <a href="https://www.cps.sp.gov.br/"><img src="img/logo-cps.svg" alt="logo-cps"></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
