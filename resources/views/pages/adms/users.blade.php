<div id="show-users"></div>
<div id="show-create"></div>
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
            <a href="">
                <div class="admin-card-btn">
                Excluir
                </div>
            </a>
            </div>
        </div>
        </div>
        @endforeach
    </div>
    </div>
</template>

