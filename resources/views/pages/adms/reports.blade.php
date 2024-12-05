<link rel="stylesheet" href="{{asset('/css/chat-adm.css')}}"/>
<div id="show-template"></div>
<template id="my-chats-reports">
<div class="container-chat">
        <div class="chat">
            <div id="chat-box" class="chat-box flex flex-col gap-4">
            @if(!empty($reports))
                <div class="delete-all">
                    <form id="chat-delete-all" action="{{route('chat.deleteall')}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete-all">Limpar chat</button>
                    </form>
                </div>
                @foreach ($reports as $report)
                @foreach($report as $r)
                <div class="chat-message">
                    <p class="author">nome: <i class="text-author">{{$r['fullname']}}</i></p>
                    <p class="author">nick: <i class="text-author">{{$r['nickname']}}</i></p>
                    <p class="author">origem: <i class="text-author">{{$r['origin']}}</i></p>
                    <p class="author">data: <i class="text-author">{{$r['created']}}</i></p>
                    <div class="chat-message-content">
                        <p class="chat-message-text">{{$r['message']}}</p>
                    </div>
                    <div class="chat-delete">
                        <form id="chat-delete" action="{{route('chat.delete', $r['id'])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button">X</button>
                        </form>
                    </div>
                    <ul id="messagesList"></ul>
                </div>
                @endforeach
                @endforeach
            @else
                <p>Não há mensagens anteriores</p>
            @endif
            </div>
        </div>
        <script src="{{asset('js/chat-adm.js')}}"></script>
</template>