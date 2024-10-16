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
                </div>
            </div>
        </aside>
        <div class="container-adm">
            @include('pages.adms.users')
            @include('pages.making')
            @include('pages.adms.hours')
            <div class="welcome">
                <h3 class="text-h3"> Bem vindo ao painel de controle, {{ auth()->user()->name }}!
                </h3>
            </div>
        </div>
    </div>
    <script src={{ asset('js/create-hour.js') }}></script>
@endsection
