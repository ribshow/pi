<link href="{{asset('css/index-chat.css')}}" rel="stylesheet" />
@vite('resources/css/app.css')
@extends('pages.layouts.header')
@section('conteudo')
<div class="title-hubs text-center p-4">
    <h1 class="text-center"><span class="text-red-600">Hubs </span>- <span class="text-black">IntegraFatec</span></h1>
</div>
<div class="container flex justify-center w-full p-8 m-2">
    <div class="justify-center items-center grid grid-cols-2 gap-4 w-full">
        <div class="chat-general border border-blue-400">
            <h2 class="text-center text-emerald-500 font-extrabold">Hub Geral</h2>
            <a class="chat-general" href="{{url('chat')}}" target="_blank">
                <img class="img-general" src="{{asset('img/geralchat.jpg')}}" alt="chat general">
            </a>
        </div>
        <div class="chat-tech border border-blue-400">
            <h2 class="text-center text-fuchsia-700 font-extrabold">Hub Tech</h2>
            <a href="{{url('chattech')}}" target="_blank">
                <img class="img-tech" src="{{asset('img/techchat.jpg')}}" alt="chat tech">
            </a>
        </div>
        <div class="chat-geek border border-blue-400">
            <h2 class="text-center text-orange-500 font-extrabold">Hub Geek</h2>
            <a href="{{url('chatgeek')}}" target="_blank">
                <img class="img-geek" src="{{asset('img/geekchat.jpg')}}" alt="chat geek">
        </a>
        </div>
        <div class="chat-sci border border-blue-400">
            <h2 class="text-center text-lime-500 font-extrabold">Hub Science</h2>
            <a href="{{url('chatsci')}}" target="_blank">
                <img class="img-sci" src="{{asset('img/cienchat.jpg')}}" alt="chat science">
            </a>
        </div>
    </div>
</div>
<script src="{{'js/index-chat.js'}}" ></script>

@endsection