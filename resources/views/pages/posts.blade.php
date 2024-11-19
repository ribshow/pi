<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IntegraFatec - Mural</title>
    <link rel="stylesheet" href={{ asset('css/edit-post.css') }}>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container flex items-center justify-center w-full">
        <div class='main-post space-x-0.5 flex justify-center'>
            <div class="form-post flex justify-center">
                <form method="POST" action="{{ route('update', $post) }}">
                    @csrf
                    <div class="form-group space-x-0.5 flex grid grid-cols-1 justify-center">
                        <div class="p-2 space-x-1">
                            <header>
                                <h1 class="h-post flex justify-center">
                                    <a href="{{ route('mural') }}">
                                        <img width="48px" src={{ asset($image) }}>
                                    </a>
                                </h1>
                            </header>
                        </div>
                        <div class="py-2 w-22">
                            <input class="t-post space-x-0.5 py-3 w-full" type="text" value="{{ $post->title }}"
                                name="title" placeholder="{{ __('Título') }}" required />
                        </div>
                        <div class="py-2 w-full h-full">
                            <textarea type="text" class="m-post py-2 w-full" maxlength="255" name="message" required>{{ old('message', $post->message) }}</textarea>
                        </div>
                        <div class="py-2 flex justify-center">
                            <button class="edit-button" type='submit'>Editar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
