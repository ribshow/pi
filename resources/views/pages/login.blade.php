<title>IntegraFatec - Login</title>
@include('pages.layouts.head')
<link rel="stylesheet" href={{ asset('/css/login.css') }}>
@section('conteudo')
<main>
    <div class="main-container">
        <div class="card-container">
            <form class="form-width" method="POST" action="{{route('login')}}">
                @csrf
                <div class="form-container">
                    <div class="img-logo">
                        <img src="./img/Logo preto.svg" alt="Logo IntegraFatec">
                    </div>
                    <div class="text-logo">INTEGRA FATEC</div>
                    <div>
                        <div class="display-input">
                            <div class="icon-img">
                                <img src="./img/login icon.svg">
                            </div>
                            <input class="input-box" type="text" id="email" name="email" placeholder="E-mail"
                                required>
                        </div>
                    </div>
                    <div>
                        <div class="display-input">
                            <div class="icon-img">
                                <img src="./img/senha icon.svg">
                            </div>
                            <input class="input-box" type="password" id="password" name="password"
                                placeholder="Senha" required>
                        </div>
                        <a href="{{url('relembrar')}}">
                            <div class="forget-password">Esqueceu a senha?</div>
                        </a>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <span style="color: red">{{ $error }}</span>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div>
                        <button class="btn-enter" type="submit">ENTRAR</button>
                    </div>
                    <div class="possui-cadastro">
                        Ainda não possui uma conta? <a href={{url('registro')}}>Clique aqui</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

@include('pages.layouts.footer')
