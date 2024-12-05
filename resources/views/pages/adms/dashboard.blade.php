<title>IntegraFatec - Administração</title>
<link rel="stylesheet" href={{ asset('css/admin_att.css') }}>
@extends('pages.layouts.header')
@section('conteudo')
    <div class="container-all">
        @include("pages.adms.components.aside")
        <div class="container-adm">
            @include('pages.adms.users')
            @include('pages.making')
            @include('pages.adms.hours')
            @include('pages.adms.chat')
            @include('pages.adms.chattech')
            @include('pages.adms.chatgeek')
            @include('pages.adms.chatsci')
            @include('pages.adms.reports')
            <div class="welcome">
                <h3 class="text-h3"> Bem vindo ao painel de controle, <span class="text-white">{{ auth()->user()->name }}!</span>
                </h3>
            </div>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
    <script src={{ asset('js/admin.js') }}></script>
@endsection
