<title>IntegraFatec - Mural</title>
<link rel="stylesheet" href={{ asset('css/mural-posts.css') }}>
<link rel="stylesheet" href={{ asset('css/mural-post.css') }}>
@extends('pages.layouts.header')
@section('conteudo')
    <div class='main-post'>
        <div class="head-mural">
            <h2 class="title-board">Mural - IntegraFatec</h2>
            <div class="b-mural">
                <button class="b-1" type="submit">Criar Publicação</button>
            </div>
        </div>
        <div class="form-view"></div>
        <template id="formTemplate">
            <div class="form-post">
                <form method="post" action="{{ route('mural') }}">
                    @csrf
                    <input class="t-post" type="text" name="title" placeholder="{{ __('Título') }}" required />
                    <br />
                    <textarea class="m-post" name="message" maxlength="300" placeholder="{{ __('O que você está pensando?') }}" required></textarea>
                    <br />
                    <button class="b-post" type='submit'>Publicar</button>
                </form>
            </div>
        </template>
        <div class="show-posts">
            @foreach ($posts as $post)
                <div class="post">
                    <p class="user">
                        <img class="img-width" src="/storage/{{$post->user->image_url}}" alt="perfil" class="perfil-img">
                        <span class="author-post">
                            Publicado por: <br /> {{ $post->user->name }}
                        </span>
                    </p>
                    <p class="date border-red-300">{{ $post->created_at->diffForHumans()}}</p>
                    <p class="title"> <b>{{ $post->title }}</b></p>
                    <p class="content">{{ $post->message }}</p>
                    @if (auth()->user()->isAdmin())
                        <div class="links">
                            <a class="edit" href="{{ route('edit', $post) }}">Editar</a>
                            <a class="remove" data-post-id="{{ $post->id }}"
                                href="{{ route('delete', $post) }}">Apagar</a>
                        </div>
                    @endif
                    <!-- Permitindo que professor edite publicações de estudantes-->
                    @if (auth()->user()->isTeacher() && $post->user->role == 'student')
                        <div class="links">
                            <a class="edit" href="{{ route('edit', $post) }}">Editar</a>
                            <a class="remove" data-post-id="{{ $post->id }}"
                                href="{{ route('delete', $post) }}">Apagar</a>
                        </div>
                    @endif
                    <!-- Permitindo que o usuário edite e apague seus prórprios posts -->
                    @if ($post->user->is(auth()->user()))
                        <div class="links">
                            <a class="edit" href="{{ route('edit', $post) }}">Editar</a>
                            <a class="remove" data-post-id="{{ $post->id }}"
                                href="{{ route('delete', $post) }}">Apagar</a>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
    <script src={{ asset('js/mural.js') }}></script>
@endsection
