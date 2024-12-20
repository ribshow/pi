<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IntegraFatec - ChatGeek</title>
    <link href={{asset('css/chatgeek.css')}} rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
@vite('resources/css/app.css')
</head>
<body class="min-h-screen">
<section class="flex-grow">
    <div class="header">
    <a class="logo" href="{{url('index')}}"><img class="logo" src="img/logo.svg" width="40" alt="logo"></a>
        <div class="title">
            <h1 class="title">ChatHub</h1>
        </div>
    </div>
    <div class="container flex flex-col justify-center w-full h-full">
        <div class="container-player flex justify-center m-4">
            @include('pages.chat.player')
        </div>
        <div class="container-chat">
        <div class="chat">
            <div id="chat-box" class="chat-box flex flex-col gap-4">
            @if(!empty($dataGeek))
                @foreach ($dataGeek as $chat)
                <div class="chat-message">
                    <div class="container-author-btn flex flex-1 justify-between">
                        <p class="author w-full"> - {{$chat['fullname']}} <i class="bx bx-message-rounded-dots"></i></p>
                        <button id="btn-report" class="btn-report" data-chat-id="{{ $chat['id'] }}" value="{{ session('api_token') }}" type="click">!</button>
                        <input type="hidden" name="chat-id" id="chat-id" value="{{$chat['id']}}" />
                    </div>
                    <div class="chat-message-content">
                        <p class="chat-message-text p-2">{{$chat['message']}}</p>
                        <p class="chat-date"><i class="bx bx-stopwatch"></i> {{\Carbon\Carbon::parse($chat['date'])->format('d/m/Y - H:i:s')}}</p>
                    </div>
                </div>
                @endforeach
            @else
                <ul id="messagesList"></ul>
                <p>Não há mensagens anteriores</p>
            @endif
            </div>
                <input type="hidden" name="userInput" id="userInput" value="{{ Auth::user()->name}}" />
                <input type="hidden" name="nickname" id="nickname" value="{{Auth::user()->nickname}}" />
                <input type="hidden" name="token" id="token" value="{{ session('api_token') }}" />
                <div class="chat-input">
                    <input type="text" name="messageInput" id="messageInput" placeholder="Digite sua mensagem">
                    <input type="button" id="sendButton" class="btn-form" value="Enviar" />
                </div>  
        </div>
        </div>
    </div>
    <div class="footer">
        <footer class="text-center">
            <p>&copy IntegraFatec - 2024</p>
        </footer>
    </div>
    <script src="{{ asset('js/chatgeek.js') }}"></script>
</section>
</body>
</html>