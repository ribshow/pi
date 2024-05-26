<style>
.titulo{
    text-align: center;
    margin-top: 2rem;
    margin-bottom: 2rem;
}
.meio{
    height: 100%;
}
</style>
@extends('pages.layouts.header')
@section('conteudo')
<div class="meio">
    <h1 class="titulo">Bem-vindos ao IntegraFatec</h1>
    <div class="carrosel">
        <a href="https://www.vestibularfatec.com.br/home/">
            <img class="image" src={{asset("img/banner.png")}} width="100%">
        </a>
    </div>
</div>
@endsection

