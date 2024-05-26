<link rel="stylesheet" href={{ asset('css/cadastro.css')}}>
@extends('pages.layouts.head')
@section('conteudo')
<div class="main-container">
    <div class="card-container">
      <form method="POST" action="{{ route('registro') }}">
        @csrf
        <div class="form-container">
          <div class="text-logo">DADOS CADASTRAIS</div>
          <div class="cursor-container">
            <div class="input-box1"></div>
            <input class="input-box" type="text" id="name" name="name" placeholder="Nome" required/>
            <div class="input-box2"></div>
          </div>
          <div class="cursor-container">
            <div class="input-box1"></div>
            <input class="input-box" type="email" id="email" name="email" placeholder="Email" required/>
            <div class="input-box2"></div>
          </div>
          <div class="cursor-container">
            <div class="input-box1"></div>
            <input class="input-box" type="password" id="password" name="password" placeholder="Senha" required autocomplete="new-password"/>
            <div class="input-box2"></div>
          </div>
          <div class="cursor-container">
            <div class="input-box1"></div>
            <input class="input-box" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirme a Senha" required autocomplete="new-password"/>
            <div class="input-box2"></div>
          </div>
          @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
           @endif
          <div>
            <button class="btn-enter btn-white" type="reset">LIMPAR</button>
          </div>
          <div>
            <button class="btn-enter btn-red" type="submit">CADASTRAR</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
