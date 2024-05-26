<title>IntegraFatec - Relembrar</title>
<link rel="stylesheet" href={{asset('css/login.css')}}>
@extends('pages.layouts.head')
@section('conteudo')
<main>
    <div class="main-container">
        <div class="card-container">

            <form class="form-width" method="POST" action="{{route('password.email')}}">
                @csrf
                <div class="form-container">
                    <div class="text-logo">RECUPERAR SENHA </div>
                    <div>
                        <div class="display-input">
                            <div class="icon-img">
                                <img src="./img/login icon.svg">
                            </div>
                            <input class="input-box" type="email" id="email" name="email"
                                placeholder="Informe o seu e-mail" required autofocus>
                        </div>
                    </div>
                    <div>
                        <button class="btn-enter" type="submit">ENVIAR</button>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <span style="color:red">{{$error}}</span>
                            @endforeach
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
