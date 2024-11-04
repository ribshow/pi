<link rel="stylesheet" href={{ asset('css/cadastro.css')}}>
@extends('pages.layouts.head')
@section('conteudo')
<div class="main-container">
    <div class="card-container">
      <form method="POST" action="{{ route('alerts.store') }}">
        @csrf
        <div class="form-container">
          <div class="text-logo">Criar novo Aviso</div>
          <div class="cursor-container">
            <div class="input-box1"></div>
            <input class="input-box" type="text" id="title" name="title" placeholder="Título..." required/>
            <div class="input-box2"></div>
          </div>
          <div class="cursor-container alert-content">
            <div class="input-box1"></div>
            <textarea maxlength="255" class="input-box" type="text" id="content" name="content" placeholder="Mensagem..." required></textarea>
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
          <div class="container-buttons">
            <button class="btn-enter btn-red btn-1" type="reset">LIMPAR</button>
            <button class="btn-enter btn-red" type="submit">CRIAR</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
