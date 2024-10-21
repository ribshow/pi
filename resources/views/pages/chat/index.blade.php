<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IntegraFatec - Chat</title>
<link href={{asset('css/chat.css')}} rel="stylesheet"/>
@vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">
<section class="flex-grow">
    <div class="header"></div>
    <div class="container h-full">
        <div class="title">
            <h1 class="title">ChatHub</h1>
        </div>
        <div class="chat">
            <div class="chat-box flex flex-col gap-4">
            @if(!empty($data))
                @foreach ($data as $chat)
                <div class="chat-message">
                    <p class="author">{{$chat['userName']}}</p>
                    <div class="chat-message-content">
                        <p class="chat-message-text">{{$chat['message']}}</p>
                        <p class="chat-date">{{\Carbon\Carbon::parse($chat['date'])->format('d/m/Y - H:i:s')}}</p>
                    </div>
                </div>
                @endforeach
            @else
                <p>Não há mensagens anteriores</p>
            @endif
            </div>
            <form method="POST" class="form-chat" action="https://localhost:7125/Chat/send">
                @csrf
                <input type="hidden" name="user" id="user" value="{{ Auth::user()->name}}">
                <div class="chat-input">
                    <input type="text" name="message" id="message" placeholder="Digite sua mensagem">
                    <button class="btn-form" type="submit">Enviar</button>
                </div>  
            </form>
        </div>
    </div>
    <div class="footer">
        <footer class="text-center">
            <p>&copy IntegraFatec - 2024</p>
        </footer>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="module" src="{{ asset('js/chat.js') }}"></script>
</body>
</html>