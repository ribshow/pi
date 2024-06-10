<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    .main {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    h3 {
        background-color: #4CAF50;
        color: white;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
        margin-bottom: 20px;
    }
    a {
        text-decoration: none;
        background-color: #008CBA;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    a:hover {
        background-color: #005f7f;
    }
</style>
<div class='main'>
    <h3> Usuário deletado com sucesso </h3>
    <a href="{{ route('dash')}}">Voltar</a>
</div>
