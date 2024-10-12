<link rel="stylesheet" href={{ asset('css/home.css') }}>
<link rel="stylesheet" href={{ asset('css/carroussel.css') }}>

@extends('pages.layouts.header')
@section('conteudo')
    @include('pages.index.carrosel')
    @include('pages.index.avisos')

    <div class="mapa-container" id="mapa"></div>

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src={{ asset('js/index.js') }}></script>
    <script src={{ asset('js/carroussel.js') }}></script>
@endsection
