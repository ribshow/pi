<link href="{{ asset('css/users_edit.css') }}" rel="stylesheet">
<div id="show-template"></div>
<div id="show-att"></div>
<!-- SESSÃO USUÁRIO -->
<template id="my-users">
    <div class="admin-right-all-container">
        <div>
            <label for="search">Pesquisar:</label>
            <input type="text" class="search-user" placeholder="Digite para pesquisar...">
        </div>
        @foreach ($users as $user)
            <div class="admin-right-container">
                <div class="admin-right-container-cards">
                    <div class="admin-right-card">
                        <div class="admin-card-username">
                            <p>{{ $user->name }}</p>
                            <p>{{ $user->email }}</p>
                            @if ($user->role === 'teacher')
                                <p style="font-size: 1rem;">
                                    Professor
                                </p>
                            @endif
                            @if ($user->role === 'student')
                                <p style="font-size: 1rem">
                                    Estudante
                                </p>
                            @endif
                        </div>
                        <div id="testando">
                            <form class="delete-user-form" method="POST"
                                action="{{ route('users.delete', $user->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="admin-card-btn delete-user-btn" type="submit"> Excluir</button>
                            </form>
                            <form class="edit-user-form" method="POST" action="{{ route('update.user', $user->id) }}">
                                @csrf
                                @method('PUT')
                                <button type="submit" id="btn-editar"><img src="{{ asset('img/lapis.png') }}"
                                        width="28" alt="editar"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
</template>
<template id="att-user">
    <div class="sobrepor">
        <div class="un-name">
            <label for="name">Nome</label>
        </div>
        <div class="user-name">
            <input class="un-input" type="text" name="name" value="Heryson">
        </div>
        <div class="ue-email">
            <label for="email">Email</label>
        </div>
        <div class="user-email">
            <input class="ue-input" type="email" name="email" value="ribeiro11uf@hotmail.com">
        </div>
        <div class="ut-type">
            <label for="type">Tipo</label>
        </div>
        <div class="user-tipo">
            <select class="us-sel" name="user-tipo" id="user-tipo">
                <option>Estudante</option>
                <option>Professor</option>
                <option>Administrador</option>
            </select>
        </div>
        <div class="ub-but">
            <button class="ub-button" type="button">Atualizar</button>
        </div>
    </div>
</template>
