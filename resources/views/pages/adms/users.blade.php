<div id="show-template"></div>
 <!-- SESSÃO USUÁRIO -->
<template id="my-users">
    <div class="admin-right-all-container">
        <div>
            <label for="search">Pesquisar:</label>
            <input type="text" class="search-user">
        </div>
        @foreach ($users as $user)
        <div class="admin-right-container">
        <div class="admin-right-container-cards">
            <div class="admin-right-card">
            <div class="admin-card-username">
                <p>{{$user->name}}</p>
                <p>{{$user->email}}</p>
            </div>
            <form class="delete-user-form" method="POST" action="{{ route('users.delete', $user->id) }}">
                @csrf
                @method('DELETE')
                <button class="admin-card-btn delete-user-btn" type="submit"> Excluir</button>
            </div>
        </div>
        </div>
        @endforeach
    </div>
    </div>
</template>


