<title>IntegraFatec - Login</title>
@include('pages.layouts.head')
<link rel="stylesheet" href={{asset('css/style-login.css')}}>
@section('conteudo')
<main>
    <div class="main-container">
        <div class="card-container">
            <form class="form-width" method="POST" action="{{ route('login')}}">
                @csrf
                <div class="form-container">

                    <div class="img-logo">
                        <img src={{asset('img/logo_preto.svg')}} alt="Logo IntegraFatec">
                    </div>

                    <div class="text-logo">INTEGRAFATEC</div>

                    <div>
                        <div class="display-input">
                            <div class="icon-img">
                                <img src={{asset('img/login_icon.svg')}}>
                            </div>
                            <input class="input-box" type="text" id="email" name="email" placeholder="Usuário"
                                required>
                        </div>
                        <div class="line"></div>
                    </div>

                    <div>
                        <div class="display-input">
                            <div class="icon-img">
                                <img src={{asset('img/senha_icon.svg')}}>
                            </div>
                            <input class="input-box" type="password" id="password" name="password"
                                placeholder="Senha" required>
                        </div>

                        <div class="line"></div>
                        <a href="{{url('forgot-password')}}">
                            <div class="forget-password">Esqueceu a senha?</div>
                        </a>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <span style="color: red">{{ $error }}</span>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                    <div>
                        <button class="btn-enter" type="submit">ENTRAR</button>
                    </div>

                    <div class="possui-cadastro">
                        <a href="/register">
                            <p class="a-cad">
                                Ainda não possui cadastro? Clique aqui
                            </p>
                        </a>
                    </div>
                </div>

            </form>

        </div>
    </div>
</main>

@include('pages.layouts.footer')
