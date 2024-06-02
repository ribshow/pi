<link rel="stylesheet" href={{asset('css/horario_2.css')}}>
@extends('pages.layouts.header')
@section('conteudo')
<div class="main-container">
    <table>
        <thead>
        <tr class="trTd-color">
            <td></td>
            <td>07h45 às 09h25</td>
            <td>09h30 às 11h10</td>
            <td>11h20 às 13h00</td>
        </tr>
        </thead>
        <tfoot>
        <tr class="trTd-width">
            <td class="trTd-color">SEGUNDA FEIRA</td>
            <td>IBD014 <br> <b>Modelagem de Banco de Dados</b> <br> Hélio <br> <b>Laboratório 4</b> </td>
            <td>IES011 <br> <b>Engenharia de Software I</b> <br> Cida Zem <br> <b>Laboratório NIC</b> </td>
            <td>IES011 <br> <b>Engenharia de Software I</b> <br> Cida Zem <br> <b>Laboratório NIC</b> </td>
        </tr>
        <tr class="zebra trTd-width">
            <td class="trTd-color">TERÇA FEIRA</td>
            <td>IBD014 <br> <b>Modelagem de Banco de Dados</b> <br> Hélio <br> <b>Laboratório 4</b> </td>
            <td>ISW031 <br> <b>Design Digital</b> <br> Anderson Buscariolo <br> <b>Laboratório NIC</b> </td>
            <td>ISW031 <br> <b>Design Digital</b> <br> Anderson Buscariolo <br> <b>Laboratório NIC</b> </td>
        </tr>
        <tr class="trTd-width">
            <td class="trTd-color">QUARTA FEIRA</td>
            <td></td>
            <td>ISO011 <br> <b>Sistemas Operacionais e Redes de Computadores</b> <br> Buscariolo <br> <b>Laboratório
                2</b> </td>
            <td>ISO011 <br> <b>Sistemas Operacionais e Redes de Computadores</b> <br> Buscariolo <br> <b>Laboratório
                2</b> </td>
        </tr>
        <tr class="zebra trTd-width">
            <td class="trTd-color">QUINTA FEIRA</td>
            <td></td>
            <td>ISW028 <br> <b>Desenvolvimento Web I</b> <br> Tiago <br> <b>Laboratório 4</b> </td>
            <td>ISW028 <br> <b>Desenvolvimento Web I</b> <br> Tiago <br> <b>Laboratório 4</b> </td>
        </tr>
        <tr class="trTd-width">
            <td class="trTd-color">SEXTA FEIRA</td>
            <td></td>
            <td>IAL010 <br> <b>Algoritmos e Lógica de Programação</b> <br> Tiago <br> <b>Laboratório 4</b> </td>
            <td>IAL010 <br> <b>Algoritmos e Lógica de Programação</b> <br> Tiago <br> <b>Laboratório 4</b> </td>
        </tr>
        </tfoot>
    </table>
</div>
@endsection
