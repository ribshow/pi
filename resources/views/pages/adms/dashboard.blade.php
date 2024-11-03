<title>IntegraFatec - Administração</title>
<link rel="stylesheet" href={{ asset('css/admin_att.css') }}>
@extends('pages.layouts.header')
@section('conteudo')
    <div class="container-all">
        <aside>
            <!--MENU DA DIREITA-->
            <div class="admin-container" id="admin-container">
                <div class="admin-left-container">
                    <div class="admin-left-card">
                        <div class="my-user-btn">
                            <button id="" class="my-user-btn">Publicações</button>
                        </div>
                    </div>
                    <div class="admin-left-card">
                        <div class="my-user-btn">
                            <button id="link-user" class="my-user-btn">Usuários</button>
                        </div>
                    </div>
                    <div class="admin-left-card">
                        <div class="my-user-btn">
                            <button id="link-hour" class="my-user-btn">Horários</button>
                        </div>
                    </div>
                    <div class="admin-left-card">
                        <div class="my-user-btn">
                            <button id="link-create-hour" class="my-user-btn">Cadastrar Horário</button>
                        </div>
                    </div>
                    <div class="admin-left-card">
                        <div class="my-user-btn">
                            <button id="link-chat" class="my-user-btn">Chat</button>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <div class="container-adm">
            @include('pages.adms.users')
            @include('pages.making')
            @include('pages.adms.hours')
            @include('pages.adms.chat')
            <div class="welcome">
                <h3 class="text-h3"> Bem vindo ao painel de controle, <span class="text-blue-500">{{ auth()->user()->name }}!</span>
                </h3>
            </div>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
    <script src={{ asset('js/create-hour.js') }}></script>
@endsection
