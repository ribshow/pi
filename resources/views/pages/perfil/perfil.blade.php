<title>IntegraFatec - Perfil</title>
<link rel="stylesheet" href={{ asset('css/perfil.css')}}>
@extends('pages.layouts.header')
@section('conteudo')
<div class="p-container">
    <div class="head">
        <h2>Perfil</h2>
    </div>
    <form method="POST" action="{{route('verification.send')}}">
        @csrf
    </form>

    <form method="POST" action="{{route('profile.update')}}">
    @csrf
    @method('patch')

    <div class="info-perfil">
        <h3>Informações de perfil</h3>
        <p class="n-user"> Nome: {{Auth::user()->name}}</p>
        <p class="e-user"> Email: {{Auth::user()->email}}</p>
        <br/>
        <h3><b>Atualize suas informações de cadastro aqui.</b></h3>
        <br/>

        <label for="name">Nome</label><br/>
        <input class="i-perfil" type="text" id="name" name="name"/>
        <br/><br/>

        <label for="email">Email</label><br/>
        <input class="i-perfil" type="text" id="email" name="email" value="">
        <br/><br/>

        <button class="i-button" type="submit">Salvar</button>
    </div>
    @if (session('status') === 'profile-updated')
    <p
        x-data="{ show: true }"
        x-show="show"
        x-transition
        x-init="setTimeout(() => show = false, 2000)"
        class="text-sm text-gray-600"
    >{{ __('Perfil atualizado com sucesso!') }}</p>
    @endif
    </form>

    <form method="POST" action="{{route('password.update')}}" id="update-password-form">
    @csrf
    @method('put')

    <div class="info-senha">
        <h3>Atualizar Senha</h3>
        <p>Mantenha sua conta segura, atualize sua senha.</p>
        <br/>

        <label for="update_password_current_password">Senha atual</label><br/>
        <input class="i-perfil" type="password" name="current_password" id="update_password_current_password">
        <br/><br/>
        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        <label for="update_password_password">Nova senha</label><br/>
        <input class="i-perfil" type="password" name="password" id="update_password_password">
        <br/><br/>

        <label for="update_password_password_confirmation">Confirme a nova senha</label><br/>
        <input class="i-perfil" type="password" name="password_confirmation" id="update_password_password_confirmation">
        <br/><br/>
        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        <button class="i-button" type="submit">Salvar</button>
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

    @if (session('status') === 'password-updated')
    <p
        x-data="{ show: true }"
        x-show="show"
        x-transition
        x-init="setTimeout(() => show = false, 2000)"
        class="text-sm text-gray-600"
    >{{ __('Senha atualizada com sucesso!') }}</p>
    </form>
    @elseif (session('status') === 'password-updated-failed')
    <p>{{ __('Dados não conferem, tente novamente!') }}</p>
    @endif
</div>
@endsection
