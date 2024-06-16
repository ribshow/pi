<title>IntegraFatec - Mural</title>
<link rel="stylesheet" href={{asset('css/mural-posts.css')}}>
<link rel="stylesheet" href={{asset('css/mural-post.css')}}>
@extends('pages.layouts.header')
@section('conteudo')
<div class='main-post'>
    <div class="head-mural">
        <h2>Mural - IntegraFatec</h2>
        <div class="b-mural">
            <button class="b-1" type="submit">Criar Publicação</button>
        </div>
    </div>
    <div class="form-view"></div>
    <template id="formTemplate">
        <div class="form-post">
            <form method="post" action="{{route('mural')}}">
                @csrf
                <input class="t-post" type="text" name="title" placeholder="{{__('Título')}}" required/>
                <br/>
                <textarea class="m-post" name="message" maxlength="300"
                placeholder="{{__('O que você está pensando?')}}" required></textarea>
                <br/>
            <button class="b-post" type='submit'>Publicar</button>
            </form>
        </div>
    </template>
    <div class="show-posts">
        @foreach($posts as $post)
        <div class="post">
            <p class="user">Publicado por: {{$post->user->name}}</p>
            <p class="date">{{$post->created_at->format('H:i - d/m/Y')}}</p>
            <p class="title"> <b>{{$post->title}}</b></p>
            <p class="content">{{ $post->message }}</p>
            <!-- Permitindo que professor e adm editem e apaguem qualquer post-->
            @if(auth()->user()->isTeacher() || auth()->user()->isAdmin())
            <div class="links">
                <a class="edit" href="{{route('edit', $post)}}">Editar</a>
                <a class="remove" href="{{route('delete', $post)}}">Apagar</a>
            </div>
            @endif
            <!-- Permitindo que o usuário edite e apague seus prórprios posts -->
            @if($post->user->is(auth()->user()))
            <div class="links">
                <a class="edit" href="{{route('edit', $post)}}">Editar</a>
                <a class="remove" href="{{route('delete', $post)}}">Apagar</a>
            </div>
            @endif
        </div>
        @endforeach
    </div>
</div>
<script src={{asset('js/mural.js')}}></script>
@endsection
