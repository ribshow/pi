<link rel="stylesheet" href="{{asset('/css/chat-adm.css')}}"/>
<div id="show-template"></div>
<template id="my-chats-tech">
<div class="container-chat">
        <div class="chat">
            <div id="chat-box" class="chat-box flex flex-col gap-4">
            @if(!empty($dataTech))
                <div class="delete-all">
                    <form id="chat-delete-all" action="{{route('chat.tech.deleteall')}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete-all">Limpar chat</button>
                    </form>
                </div>
                @foreach ($dataTech as $chat)
                <div class="chat-message">
                    <p class="author">nome: {{$chat['fullname']}}</p>
                    <p class="author">nick: {{$chat['nickname']}}</p>
                    <div class="chat-message-content">
                        <p class="chat-message-text">{{$chat['message']}}</p>
                        <p class="chat-date">{{\Carbon\Carbon::parse($chat['date'])->format('d/m/Y - H:i:s')}}</p>
                    </div>
                    <div class="chat-delete">
                        <form id="chat-delete" action="{{route('chat.tech.delete', $chat['id'])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button">X</button>
                        </form>
                    </div>
                    <ul id="messagesList"></ul>
                </div>
                @endforeach
            @else
                <p>Não há mensagens anteriores</p>
            @endif
            </div>
        </div>
        <script src="{{asset('js/chat-adm.js')}}"></script>
</template>