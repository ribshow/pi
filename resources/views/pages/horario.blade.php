<link rel="stylesheet" href={{'css/hora.css'}}>
@extends('pages.layouts.header')
@section('conteudo')
<div class="conteudo">
    <h2 class="title">Tabela de Horário</h2>
    <p class="course">{{$course->description}}</p>
    <button type="submit">1°Semestre</button>
    <button type="submit">2°Semestre</button>
    <table class="schedule-table">
        <thead>
            <tr>
                <th>Dia</th>
                <th>Hora</th>
                <th>Disciplina</th>
                <th>Bloco</th>
                <th>Sala</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hours as $hour)
            <tr>
                <td>{{$hour->dia}}</td>
                <td>{{$hour->hora}}</td>
                <td>{{$hour->discipline->name}}</td>
                <td>{{$hour->block->block}}</td>
                <td>{{$hour->room->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
