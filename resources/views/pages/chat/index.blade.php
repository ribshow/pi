<link href="{{asset('css/index-chat.css')}}" rel="stylesheet" />
@vite('resources/css/app.css')
@extends('pages.layouts.header')
@section('conteudo')
<div class="title-hubs text-center p-4">
    <h1 class="text-center"><span class="text-red-600">Hubs </span>- <span class="text-black">IntegraFatec</span></h1>
</div>
<div class="container flex justify-center w-full p-8 container-general">
    <div class="justify-center items-center grid grid-cols-2 max-sm:grid-cols-1 max-[770px]:grid-cols-1 gap-4 w-full">
        <div class="chat-general border border-blue-400">
            <h2 class="text-center text-emerald-500 font-extrabold">Hub Geral</h2>
            <a class="chat-general" href="{{url('chat')}}" target="_blank">
                <img class="img-general" src="{{asset('img/geralchat.jpg')}}" alt="chat general">
            </a>
            <p class="text-center description font-bold text-white bg-emerald-500">Acessar bate-papo geral</p>
        </div>
        <div class="chat-general border border-blue-400">
            <h2 class="text-center text-fuchsia-700 font-extrabold">Hub Tech</h2>
            <a href="{{url('chattech')}}" target="_blank">
                <img class="img-tech" src="{{asset('img/techchat.jpg')}}" alt="chat tech">
            </a>
            <p class="text-center description font-bold text-white bg-fuchsia-700">Acessar bate-papo tech</p>
        </div>
        <div class="chat-general border border-blue-400">
            <h2 class="text-center text-orange-500 font-extrabold">Hub Geek</h2>
            <a href="{{url('chatgeek')}}" target="_blank">
                <img class="img-geek" src="{{asset('img/geekchat.jpg')}}" alt="chat geek">
            </a>
            <p class="text-center description font-bold text-white bg-orange-500">Acessar bate-papo geek</p>
        </div>
        <div class="chat-general border border-blue-400">
            <h2 class="text-center text-lime-500 font-extrabold">Hub Science</h2>
            <a href="{{url('chatsci')}}" target="_blank">
                <img class="img-sci" src="{{asset('img/cienchat.jpg')}}" alt="chat science">
            </a>
            <p class="text-center description font-bold text-white bg-lime-500">Acessar bate-papo science</p>
        </div>
    </div>
</div>
<script src="{{'js/index-chat.js'}}" ></script>

@endsection