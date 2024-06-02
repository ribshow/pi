<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IntegraFatec - Mural</title>
    <link rel="stylesheet" href={{asset('css/mural-posts.css')}}>
</head>
<body>
    <header>
        <h1 class="h-post">
            <a href="{{route('mural')}}">
                <img width="48px" src={{asset($image)}}>
            </a>
        </h1>
    </header>
<div class='main-post'>
    <div class="form-post">
        <form method="post" action="{{route('update',$post)}}">
            @csrf
            <input class="t-post" type="text" value="{{$post->title}}" name="title" placeholder="{{__('Título')}}" required/>
            <br/>
            <textarea class="m-post" name="message" required>
            {{old('message',$post->message)}}
            </textarea>
            <br/>
        <button class="b-post" type='submit'>Editar Publicação</button>
    </div>
</body>
</html>
