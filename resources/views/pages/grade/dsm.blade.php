<link rel="stylesheet" href={{asset('css/horario_2.css')}}>
@extends('pages.layouts.header')
@section('conteudo')
    <div class="main-container" id="main-container">
        <h3 style="padding: 1rem; border-bottom:1px solid gray
        ;width:100%; margin-bottom: 1rem;">
            Grade Horária
            <img style="" src={{asset('img/educa.png')}} width="24px" alt="relógio">
        </h3>
        <h3 class="title">Horários</h3>
        <div>
            <select class="select-course" name="curso" onchange="redirectToPage(this)">
                <option class="choice">Escolha um curso:</option>
                <optgroup label="Cursos:">
                @foreach ($courses as $course)
                    <option class="options" value="{{ $course->id }}">
                        {{ $course->description }}
                    </option>
                </optgroup>
                @endforeach
            </select>
            <div class="botoes"></div>
            <div id="section_1" style="display:none"></div>
            <div id="section_2" style="display:none"></div>
            <div id="section_3" style="display:none"></div>
            <div id="section_4" style="display:none"></div>
            <div id="section_5" style="display:none"></div>
            <div id="section_6" style="display:none"></div>
        </div>
    </div>

<!--DSM 1° SEMESTRE -->
<div id="section_1" class="dsm_1" style="display:none">
<template id="dsm_1">
    <h3>1° Semestre</h3>
    <table>
        <thead>
            <tr class="trTd-color">
            <td></td>
            <td>07h45 às 09h25</td>
            <td>09h30 às 11h10</td>
            <td>11h20 às 13h00</td>
            </tr>
        </thead>
        <tr class="trTd-width">
            <td class="trTd-color">{{$hour_s->dia}}</td>
            <td>{{$hour_s->block->block}}<br> <b>{{$hour_s->discipline->name}}</b> <br> {{$hour_s->user->name}} <br> <b>{{$hour_s->room->name}}</td>
            <td>{{$hour_s->block->block}}<br> <b>{{$hour_s->discipline->name}}</b> <br> {{$hour_s->user->name}} <br> <b>{{$hour_s->room->name}}</b> </td>
            <td>{{$hour_seg->block->block}}<br> <b>{{$hour_seg->discipline->name}}</b> <br> {{$hour_seg->user->name}} <br> <b>{{$hour_seg->room->name}}</b> </td>
        </tr>
        <tr class="trTd-width">
            <td class="trTd-color">{{$hour_t->dia}}</td>
            <td>{{$hour_seg->block->block}}<br><b>{{$hour_seg->discipline->name}}</b> <br> {{$hour_seg->user->name}} <br> <b>{{$hour_seg->room->name}}</td>
            <td>{{$hour_t->block->block}}<br><b>{{$hour_t->discipline->name}}</b> <br> {{$hour_t->user->name}} <br> <b>{{$hour_t->room->name}}</b></td>
            <td>{{$hour_t->block->block}}<br><b>{{$hour_t->discipline->name}}</b> <br> {{$hour_t->user->name}} <br> <b>{{$hour_t->room->name}}</b></td>
        </tr>
        <tr class="trTd-width">
            <td class="trTd-color">{{$hour_qua->dia}}</td>
            <td></td>
            <td>{{$hour_qua->block->block}}<br><b>{{$hour_qua->discipline->name}}</b> <br> {{$hour_qua->user->name}} <br> <b>{{$hour_qua->room->name}}</b></td>
            <td>{{$hour_qua->block->block}}<br><b>{{$hour_qua->discipline->name}}</b> <br> {{$hour_qua->user->name}} <br> <b>{{$hour_qua->room->name}}</b></td>
        </tr>
        <tr class="trTd-width">
            <td class="trTd-color">{{$hour_qui->dia}}</td>
            <td></td>
            <td>{{$hour_qui->block->block}}<br><b>{{$hour_qui->discipline->name}}</b> <br> {{$hour_qui->user->name}} <br> <b>{{$hour_qui->room->name}}</b></td>
            <td>{{$hour_qui->block->block}}<br><b>{{$hour_qui->discipline->name}}</b> <br> {{$hour_qui->user->name}} <br> <b>{{$hour_qui->room->name}}</b></td>
        </tr>
        <tr class="trTd-width">
            <td class="trTd-color">{{$hour_sex->dia}}</td>
            <td></td>
            <td>{{$hour_sex->block->block}}<br><b>{{$hour_sex->discipline->name}}</b> <br> {{$hour_sex->user->name}} <br> <b>{{$hour_sex->room->name}}</b></td>
            <td>{{$hour_sex->block->block}}<br><b>{{$hour_sex->discipline->name}}</b> <br> {{$hour_sex->user->name}} <br> <b>{{$hour_sex->room->name}}</b></td>
        </tr>
    </table>
    </div>
</template>
</div>

<!-- DSM 2° SEMESTRE -->
<div id="section_2" class="dsm_2" style="display:none">
<template id="dsm_2">
    <h3>2° Semestre</h3>
    <table>
        <thead>
            <tr class="trTd-color">
            <td></td>
            <td>07h45 às 09h25</td>
            <td>09h30 às 11h10</td>
            <td>11h20 às 13h00</td>
            </tr>
        </thead>
        <tr class="trTd-width">
            <td class="trTd-color">{{$hour_segunda->dia}}</td>
            <td></td>
            <td>{{$hour_segunda->block->block}}<br> <b>{{$hour_segunda->discipline->name}}</b> <br> {{$hour_segunda->user->name}} <br> <b>{{$hour_segunda->room->name}}</b> </td>
            <td>{{$hour_segunda->block->block}}<br> <b>{{$hour_segunda->discipline->name}}</b> <br> {{$hour_segunda->user->name}} <br> <b>{{$hour_segunda->room->name}}</b> </td>
        </tr>
        <tr class="trTd-width">
            <td class="trTd-color">{{$hour_terca->dia}}</td>
            <td></td>
            <td>{{$hour_terca->block->block}}<br><b>{{$hour_terca->discipline->name}}</b> <br> {{$hour_terca->user->name}} <br> <b>{{$hour_terca->room->name}}</b></td>
            <td>{{$hour_terca->block->block}}<br><b>{{$hour_terca->discipline->name}}</b> <br> {{$hour_terca->user->name}} <br> <b>{{$hour_terca->room->name}}</b></td>
        </tr>
        <tr class="trTd-width">
            <td class="trTd-color">{{$hour_quarta->dia}}</td>
            <td>{{$hour_quarta->block->block}}<br><b>{{$hour_quarta->discipline->name}}</b> <br> {{$hour_quarta->user->name}} <br> <b>{{$hour_quarta->room->name}}</b></td>
            <td>{{$hour_quarta->block->block}}<br><b>{{$hour_quarta->discipline->name}}</b> <br> {{$hour_quarta->user->name}} <br> <b>{{$hour_quarta->room->name}}</b></td>
            <td></td>
        </tr>
        <tr class="trTd-width">
            <td class="trTd-color">{{$hour_q->dia}}</td>
            <td>{{$hour_q->block->block}}<br><b>{{$hour_q->discipline->name}}</b> <br> {{$hour_q->user->name}} <br> <b>{{$hour_q->room->name}}</b></td>
            <td>{{$hour_quinta->block->block}}<br><b>{{$hour_quinta->discipline->name}}</b> <br> {{$hour_quinta->user->name}} <br> <b>{{$hour_quinta->room->name}}</b></td>
            <td>{{$hour_quinta->block->block}}<br><b>{{$hour_quinta->discipline->name}}</b> <br> {{$hour_quinta->user->name}} <br> <b>{{$hour_quinta->room->name}}</b></td>
        </tr>
        <tr class="trTd-width">
            <td class="trTd-color">{{$hour_sexta->dia}}</td>
            <td>{{$hour_sexta->block->block}}<br><b>{{$hour_sexta->discipline->name}}</b> <br> {{$hour_sexta->user->name}} <br> <b>{{$hour_sexta->room->name}}</b></td>
            <td>{{$hour_sex_2->block->block}}<br><b>{{$hour_sex_2->discipline->name}}</b> <br> {{$hour_sex_2->user->name}} <br> <b>{{$hour_sex_2->room->name}}</b></td>
            <td>{{$hour_sex_2->block->block}}<br><b>{{$hour_sex_2->discipline->name}}</b> <br> {{$hour_sex_2->user->name}} <br> <b>{{$hour_sex_2->room->name}}</b></td>
        </tr>
    </table>
</template>
</div>

<!-- SISTEMAS NAVAIS 1° SEMESTRE -->
<div id="section_1" class="sn_1" style="display:none">
    <template id="sn_1">
        <h3>1° Semestre</h3>
        <table>
            <thead>
                <tr class="trTd-color">
                <td></td>
                <td>07h45 às 09h25</td>
                <td>09h30 às 11h10</td>
                <td>11h20 às 13h00</td>
                </tr>
            </thead>
            <tr class="trTd-width">
                <td class="trTd-color">{{$hour_seg_7->dia}}</td>
                <td>{{$hour_seg_7->block->block}}<br> <b>{{$hour_seg_7->discipline->name}}</b> <br> {{$hour_seg_7->user->name}} <br> <b>{{$hour_seg_7->room->name}}</td>
                <td>{{$hour_seg_9->block->block}}<br> <b>{{$hour_seg_9->discipline->name}}</b> <br> {{$hour_seg_9->user->name}} <br> <b>{{$hour_seg_9->room->name}}</b> </td>
                <td>{{$hour_seg_11->block->block}}<br> <b>{{$hour_seg_11->discipline->name}}</b> <br> {{$hour_seg_11->user->name}} <br> <b>{{$hour_seg_11->room->name}}</b> </td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$hour_ter_7->dia}}</td>
                <td>{{$hour_ter_7->block->block}}<br><b>{{$hour_ter_7->discipline->name}}</b> <br> {{$hour_ter_7->user->name}} <br> <b>{{$hour_ter_7->room->name}}</td>
                <td>{{$hour_ter_9->block->block}}<br><b>{{$hour_ter_9->discipline->name}}</b> <br> {{$hour_ter_9->user->name}} <br> <b>{{$hour_ter_9->room->name}}</b></td>
                <td></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$hour_qua_7->dia}}</td>
                <td>{{$hour_qua_7->block->block}}<br><b>{{$hour_qua_7->discipline->name}}</b> <br> {{$hour_qua_7->user->name}} <br> <b>{{$hour_qua_7->room->name}}</b></td>
                <td>{{$hour_qua_9->block->block}}<br><b>{{$hour_qua_9->discipline->name}}</b> <br> {{$hour_qua_9->user->name}} <br> <b>{{$hour_qua_9->room->name}}</b></td>
                <td>{{$hour_qua_11->block->block}}<br><b>{{$hour_qua_11->discipline->name}}</b> <br> {{$hour_qua_11->user->name}} <br> <b>{{$hour_qua_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$hour_qui_7->dia}}</td>
                <td>{{$hour_qui_7->block->block}}<br><b>{{$hour_qui_7->discipline->name}}</b> <br> {{$hour_qui_7->user->name}} <br> <b>{{$hour_qui_7->room->name}}</b></td>
                <td>{{$hour_qui_9->block->block}}<br><b>{{$hour_qui_9->discipline->name}}</b> <br> {{$hour_qui_9->user->name}} <br> <b>{{$hour_qui_9->room->name}}</b></td>
                <td>{{$hour_qui_11->block->block}}<br><b>{{$hour_qui_11->discipline->name}}</b> <br> {{$hour_qui_11->user->name}} <br> <b>{{$hour_qui_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$hour_sex_9->dia}}</td>
                <td></td>
                <td>{{$hour_sex_9->block->block}}<br><b>{{$hour_sex_9->discipline->name}}</b> <br> {{$hour_sex_9->user->name}} <br> <b>{{$hour_sex_9->room->name}}</b></td>
                <td></td>
            </tr>
        </table>
    </template>
</div>

<!-- SISTEMAS NAVAIS 2° SEMESTRE -->
<div id="section_2" class="sn_2" style="display:none">
    <template id="sn_2">
        <h3>2° Semestre</h3>
        <table>
            <thead>
                <tr class="trTd-color">
                <td></td>
                <td>07h45 às 09h25</td>
                <td>09h30 às 11h10</td>
                <td>11h20 às 13h00</td>
                </tr>
            </thead>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn2_seg_7->dia}}</td>
                <td>{{$sn2_seg_7->block->block}}<br> <b>{{$sn2_seg_7->discipline->name}}</b> <br> {{$sn2_seg_7->user->name}} <br> <b>{{$sn2_seg_7->room->name}}</td>
                <td>{{$sn2_seg_9->block->block}}<br> <b>{{$sn2_seg_9->discipline->name}}</b> <br> {{$sn2_seg_9->user->name}} <br> <b>{{$sn2_seg_9->room->name}}</b> </td>
                <td>{{$sn2_seg_11->block->block}}<br> <b>{{$sn2_seg_11->discipline->name}}</b> <br> {{$sn2_seg_11->user->name}} <br> <b>{{$sn2_seg_11->room->name}}</b> </td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn2_ter_7->dia}}</td>
                <td>{{$sn2_ter_7->block->block}}<br><b>{{$sn2_ter_7->discipline->name}}</b> <br> {{$sn2_ter_7->user->name}} <br> <b>{{$sn2_ter_7->room->name}}</td>
                <td>{{$sn2_ter_9->block->block}}<br><b>{{$sn2_ter_9->discipline->name}}</b> <br> {{$sn2_ter_9->user->name}} <br> <b>{{$sn2_ter_9->room->name}}</b></td>
                <td></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn2_qua_7->dia}}</td>
                <td>{{$sn2_qua_7->block->block}}<br><b>{{$sn2_qua_7->discipline->name}}</b> <br> {{$sn2_qua_7->user->name}} <br> <b>{{$sn2_qua_7->room->name}}</b></td>
                <td>{{$sn2_qua_9->block->block}}<br><b>{{$sn2_qua_9->discipline->name}}</b> <br> {{$sn2_qua_9->user->name}} <br> <b>{{$sn2_qua_9->room->name}}</b></td>
                <td>{{$sn2_qua_11->block->block}}<br><b>{{$sn2_qua_11->discipline->name}}</b> <br> {{$sn2_qua_11->user->name}} <br> <b>{{$sn2_qua_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn2_qui_7->dia}}</td>
                <td>{{$sn2_qui_7->block->block}}<br><b>{{$sn2_qui_7->discipline->name}}</b> <br> {{$sn2_qui_7->user->name}} <br> <b>{{$sn2_qui_7->room->name}}</b></td>
                <td>{{$sn2_qui_9->block->block}}<br><b>{{$sn2_qui_9->discipline->name}}</b> <br> {{$sn2_qui_9->user->name}} <br> <b>{{$sn2_qui_9->room->name}}</b></td>
                <td></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn2_sex_9->dia}}</td>
                <td>{{$sn2_sex_7->block->block}}<br><b>{{$sn2_sex_7->discipline->name}}</b> <br> {{$sn2_sex_7->user->name}} <br> <b>{{$sn2_sex_7->room->name}}</b></td>
                <td>{{$sn2_sex_9->block->block}}<br><b>{{$sn2_sex_9->discipline->name}}</b> <br> {{$sn2_sex_9->user->name}} <br> <b>{{$sn2_sex_9->room->name}}</b></td>
                <td></td>
            </tr>
        </table>
    </template>
</div>

<!-- SISTEMAS NAVAIS 3° SEMESTRE -->
<div id="section_3" class="sn_3" style="display:none">
    <template id="sn_3">
        <h3>3° Semestre</h3>
        <table>
            <thead>
                <tr class="trTd-color">
                <td></td>
                <td>07h45 às 09h25</td>
                <td>09h30 às 11h10</td>
                <td>11h20 às 13h00</td>
                </tr>
            </thead>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn3_seg_7->dia}}</td>
                <td>{{$sn3_seg_7->block->block}}<br> <b>{{$sn3_seg_7->discipline->name}}</b> <br> {{$sn3_seg_7->user->name}} <br> <b>{{$sn3_seg_7->room->name}}</td>
                <td>{{$sn3_seg_9->block->block}}<br> <b>{{$sn3_seg_9->discipline->name}}</b> <br> {{$sn3_seg_9->user->name}} <br> <b>{{$sn3_seg_9->room->name}}</b> </td>
                <td>{{$sn3_seg_11->block->block}}<br> <b>{{$sn3_seg_11->discipline->name}}</b> <br> {{$sn3_seg_11->user->name}} <br> <b>{{$sn3_seg_11->room->name}}</b> </td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn3_ter_7->dia}}</td>
                <td>{{$sn3_ter_7->block->block}}<br><b>{{$sn3_ter_7->discipline->name}}</b> <br> {{$sn3_ter_7->user->name}} <br> <b>{{$sn3_ter_7->room->name}}</td>
                <td>{{$sn3_ter_9->block->block}}<br><b>{{$sn3_ter_9->discipline->name}}</b> <br> {{$sn3_ter_9->user->name}} <br> <b>{{$sn3_ter_9->room->name}}</b></td>
                <td></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn3_qua_7->dia}}</td>
                <td>{{$sn3_qua_7->block->block}}<br><b>{{$sn3_qua_7->discipline->name}}</b> <br> {{$sn3_qua_7->user->name}} <br> <b>{{$sn3_qua_7->room->name}}</b></td>
                <td>{{$sn3_qua_9->block->block}}<br><b>{{$sn3_qua_9->discipline->name}}</b> <br> {{$sn3_qua_9->user->name}} <br> <b>{{$sn3_qua_9->room->name}}</b></td>
                <td>{{$sn3_qua_11->block->block}}<br><b>{{$sn3_qua_11->discipline->name}}</b> <br> {{$sn3_qua_11->user->name}} <br> <b>{{$sn3_qua_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn3_qui_9->dia}}</td>
                <td></td>
                <td>{{$sn3_qui_9->block->block}}<br><b>{{$sn3_qui_9->discipline->name}}</b> <br> {{$sn3_qui_9->user->name}} <br> <b>{{$sn3_qui_9->room->name}}</b></td>
                <td>{{$sn3_qui_11->block->block}}<br><b>{{$sn3_qui_11->discipline->name}}</b> <br> {{$sn3_qui_11->user->name}} <br> <b>{{$sn3_qui_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn3_sex_7->dia}}</td>
                <td>{{$sn3_sex_7->block->block}}<br><b>{{$sn3_sex_7->discipline->name}}</b> <br> {{$sn3_sex_7->user->name}} <br> <b>{{$sn3_sex_7->room->name}}</b></td>
                <td>{{$sn3_sex_9->block->block}}<br><b>{{$sn3_sex_9->discipline->name}}</b> <br> {{$sn3_sex_9->user->name}} <br> <b>{{$sn3_sex_9->room->name}}</b></td>
                <td></td>
            </tr>
        </table>
    </template>
</div>

<!-- SISTEMAS NAVAIS 4° SEMESTRE -->
<div id="section_4" class="sn_4" style="display:none">
    <template id="sn_4">
        <h3>4° Semestre</h3>
        <table>
            <thead>
                <tr class="trTd-color">
                <td></td>
                <td>07h45 às 09h25</td>
                <td>09h30 às 11h10</td>
                <td>11h20 às 13h00</td>
                </tr>
            </thead>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn4_seg_9->dia}}</td>
                <td></td>
                <td>{{$sn4_seg_9->block->block}}<br> <b>{{$sn4_seg_9->discipline->name}}</b> <br> {{$sn4_seg_9->user->name}} <br> <b>{{$sn4_seg_9->room->name}}</b> </td>
                <td>{{$sn4_seg_11->block->block}}<br> <b>{{$sn4_seg_11->discipline->name}}</b> <br> {{$sn4_seg_11->user->name}} <br> <b>{{$sn4_seg_11->room->name}}</b> </td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn4_ter_9->dia}}</td>
                <td></td>
                <td>{{$sn4_ter_9->block->block}}<br><b>{{$sn4_ter_9->discipline->name}}</b> <br> {{$sn4_ter_9->user->name}} <br> <b>{{$sn4_ter_9->room->name}}</b></td>
                <td>{{$sn4_ter_11->block->block}}<br><b>{{$sn4_ter_11->discipline->name}}</b> <br> {{$sn4_ter_11->user->name}} <br> <b>{{$sn4_ter_11->room->name}}</td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn4_qua_7->dia}}</td>
                <td>{{$sn4_qua_7->block->block}}<br><b>{{$sn4_qua_7->discipline->name}}</b> <br> {{$sn4_qua_7->user->name}} <br> <b>{{$sn4_qua_7->room->name}}</b></td>
                <td>{{$sn4_qua_9->block->block}}<br><b>{{$sn4_qua_9->discipline->name}}</b> <br> {{$sn4_qua_9->user->name}} <br> <b>{{$sn4_qua_9->room->name}}</b></td>
                <td>{{$sn4_qua_11->block->block}}<br><b>{{$sn4_qua_11->discipline->name}}</b> <br> {{$sn4_qua_11->user->name}} <br> <b>{{$sn4_qua_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn4_qui_7->dia}}</td>
                <td>{{$sn4_qui_7->block->block}}<br><b>{{$sn4_qui_7->discipline->name}}</b> <br> {{$sn4_qui_7->user->name}} <br> <b>{{$sn4_qui_7->room->name}}</b></td>
                <td>{{$sn4_qui_9->block->block}}<br><b>{{$sn4_qui_9->discipline->name}}</b> <br> {{$sn4_qui_9->user->name}} <br> <b>{{$sn4_qui_9->room->name}}</b></td>
                <td>{{$sn4_qui_11->block->block}}<br><b>{{$sn4_qui_11->discipline->name}}</b> <br> {{$sn4_qui_11->user->name}} <br> <b>{{$sn4_qui_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn4_sex_9->dia}}</td>
                <td></td>
                <td>{{$sn4_sex_9->block->block}}<br><b>{{$sn4_sex_9->discipline->name}}</b> <br> {{$sn4_sex_9->user->name}} <br> <b>{{$sn4_sex_9->room->name}}</b></td>
                <td>{{$sn4_sex_11->block->block}}<br><b>{{$sn4_sex_11->discipline->name}}</b> <br> {{$sn4_sex_11->user->name}} <br> <b>{{$sn4_sex_11->room->name}}</b></td>
            </tr>
        </table>
    </template>
</div>

<!-- SISTEMAS NAVAIS 5° SEMESTRE -->
<div id="section_5" class="sn_5" style="display:none">
    <template id="sn_5">
        <h3>5° Semestre</h3>
        <table>
            <thead>
                <tr class="trTd-color">
                <td></td>
                <td>07h45 às 09h25</td>
                <td>09h30 às 11h10</td>
                <td>11h20 às 13h00</td>
                </tr>
            </thead>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn5_seg_7->dia}}</td>
                <td>{{$sn5_seg_7->block->block}}<br> <b>{{$sn5_seg_7->discipline->name}}</b> <br> {{$sn5_seg_7->user->name}} <br> <b>{{$sn5_seg_7->room->name}}</b> </td>
                <td>{{$sn5_seg_9->block->block}}<br> <b>{{$sn5_seg_9->discipline->name}}</b> <br> {{$sn5_seg_9->user->name}} <br> <b>{{$sn5_seg_9->room->name}}</b> </td>
                <td>{{$sn5_seg_11->block->block}}<br> <b>{{$sn5_seg_11->discipline->name}}</b> <br> {{$sn5_seg_11->user->name}} <br> <b>{{$sn5_seg_11->room->name}}</b> </td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn5_ter_7->dia}}</td>
                <td>{{$sn5_ter_7->block->block}}<br><b>{{$sn5_ter_7->discipline->name}}</b> <br> {{$sn5_ter_7->user->name}} <br> <b>{{$sn5_ter_7->room->name}}</td>
                <td>{{$sn5_ter_9->block->block}}<br><b>{{$sn5_ter_9->discipline->name}}</b> <br> {{$sn5_ter_9->user->name}} <br> <b>{{$sn5_ter_9->room->name}}</b></td>
                <td></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn5_qua_9->dia}}</td>
                <td></td>
                <td>{{$sn5_qua_9->block->block}}<br><b>{{$sn5_qua_9->discipline->name}}</b> <br> {{$sn5_qua_9->user->name}} <br> <b>{{$sn5_qua_9->room->name}}</b></td>
                <td>{{$sn5_qua_11->block->block}}<br><b>{{$sn5_qua_11->discipline->name}}</b> <br> {{$sn5_qua_11->user->name}} <br> <b>{{$sn5_qua_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn5_qui_7->dia}}</td>
                <td>{{$sn5_qui_7->block->block}}<br><b>{{$sn5_qui_7->discipline->name}}</b> <br> {{$sn5_qui_7->user->name}} <br> <b>{{$sn5_qui_7->room->name}}</b></td>
                <td>{{$sn5_qui_9->block->block}}<br><b>{{$sn5_qui_9->discipline->name}}</b> <br> {{$sn5_qui_9->user->name}} <br> <b>{{$sn5_qui_9->room->name}}</b></td>
                <td>{{$sn5_qui_11->block->block}}<br><b>{{$sn5_qui_11->discipline->name}}</b> <br> {{$sn5_qui_11->user->name}} <br> <b>{{$sn5_qui_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn5_sex_7->dia}}</td>
                <td>{{$sn5_sex_7->block->block}}<br><b>{{$sn5_sex_7->discipline->name}}</b> <br> {{$sn5_sex_7->user->name}} <br> <b>{{$sn5_sex_7->room->name}}</b></td>
                <td>{{$sn5_sex_9->block->block}}<br><b>{{$sn5_sex_9->discipline->name}}</b> <br> {{$sn5_sex_9->user->name}} <br> <b>{{$sn5_sex_9->room->name}}</b></td>
                <td></td>
            </tr>
        </table>
    </template>
</div>

<!-- SISTEMAS NAVAIS 6° SEMESTRE -->
<div id="section_6" class="sn_6" style="display:none">
    <template id="sn_6">
        <h3 class="title-s">6° Semestre</h3>
        <table>
            <thead>
                <tr class="trTd-color">
                <td></td>
                <td>07h45 às 09h25</td>
                <td>09h30 às 11h10</td>
                <td>11h20 às 13h00</td>
                </tr>
            </thead>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn6_seg_7->dia}}</td>
                <td>{{$sn6_seg_7->block->block}}<br> <b>{{$sn6_seg_7->discipline->name}}</b> <br> {{$sn6_seg_7->user->name}} <br> <b>{{$sn6_seg_7->room->name}}</b> </td>
                <td>{{$sn6_seg_9->block->block}}<br> <b>{{$sn6_seg_9->discipline->name}}</b> <br> {{$sn6_seg_9->user->name}} <br> <b>{{$sn6_seg_9->room->name}}</b> </td>
                <td>{{$sn6_seg_11->block->block}}<br> <b>{{$sn6_seg_11->discipline->name}}</b> <br> {{$sn6_seg_11->user->name}} <br> <b>{{$sn6_seg_11->room->name}}</b> </td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn6_ter_11->dia}}</td>
                <td></td>
                <td></td>
                <td>{{$sn6_ter_11->block->block}}<br><b>{{$sn6_ter_11->discipline->name}}</b> <br> {{$sn6_ter_11->user->name}} <br> <b>{{$sn6_ter_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn6_qua_7->dia}}</td>
                <td>{{$sn6_qua_7->block->block}}<br><b>{{$sn6_qua_7->discipline->name}}</b> <br> {{$sn6_qua_7->user->name}} <br> <b>{{$sn6_qua_7->room->name}}</b></td>
                <td>{{$sn6_qua_9->block->block}}<br><b>{{$sn6_qua_9->discipline->name}}</b> <br> {{$sn6_qua_9->user->name}} <br> <b>{{$sn6_qua_9->room->name}}</b></td>
                <td>{{$sn6_qua_11->block->block}}<br><b>{{$sn6_qua_11->discipline->name}}</b> <br> {{$sn6_qua_11->user->name}} <br> <b>{{$sn6_qua_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn6_qui_7->dia}}</td>
                <td>{{$sn6_qui_7->block->block}}<br><b>{{$sn6_qui_7->discipline->name}}</b> <br> {{$sn6_qui_7->user->name}} <br> <b>{{$sn6_qui_7->room->name}}</b></td>
                <td>{{$sn6_qui_9->block->block}}<br><b>{{$sn6_qui_9->discipline->name}}</b> <br> {{$sn6_qui_9->user->name}} <br> <b>{{$sn6_qui_9->room->name}}</b></td>
                <td></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$sn6_sex_7->dia}}</td>
                <td>{{$sn6_sex_7->block->block}}<br><b>{{$sn6_sex_7->discipline->name}}</b> <br> {{$sn6_sex_7->user->name}} <br> <b>{{$sn6_sex_7->room->name}}</b></td>
                <td>{{$sn6_sex_9->block->block}}<br><b>{{$sn6_sex_9->discipline->name}}</b> <br> {{$sn6_sex_9->user->name}} <br> <b>{{$sn6_sex_9->room->name}}</b></td>
                <td>{{$sn6_sex_11->block->block}}<br><b>{{$sn6_sex_11->discipline->name}}</b> <br> {{$sn6_sex_11->user->name}} <br> <b>{{$sn6_sex_11->room->name}}</b></td>
            </tr>
        </table>
    </template>
</div>

<!-- CONSTRUÇÃO NAVAL 1° SEMESTRE-->
<div id="section_1" class="cn_1" style="display:none">
    <template id="cn_1">
        <h3 class="title-s">1° Semestre</h3>
        <table>
            <thead>
                <tr class="trTd-color">
                <td></td>
                <td>07h45 às 09h25</td>
                <td>09h30 às 11h10</td>
                <td>11h20 às 13h00</td>
                </tr>
            </thead>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn1_seg_9->dia}}</td>
                <td></td>
                <td>{{$cn1_seg_9->block->block}}<br> <b>{{$cn1_seg_9->discipline->name}}</b> <br> {{$cn1_seg_9->user->name}} <br> <b>{{$cn1_seg_9->room->name}}</b> </td>
                <td>{{$cn1_seg_11->block->block}}<br> <b>{{$cn1_seg_11->discipline->name}}</b> <br> {{$cn1_seg_11->user->name}} <br> <b>{{$cn1_seg_11->room->name}}</b> </td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn1_ter_7->dia}}</td>
                <td>{{$cn1_ter_7->block->block}}<br><b>{{$cn1_ter_7->discipline->name}}</b> <br> {{$cn1_ter_7->user->name}} <br> <b>{{$cn1_ter_7->room->name}}</b></td>
                <td>{{$cn1_ter_9->block->block}}<br><b>{{$cn1_ter_9->discipline->name}}</b> <br> {{$cn1_ter_9->user->name}} <br> <b>{{$cn1_ter_9->room->name}}</b></td>
                <td>{{$cn1_ter_11->block->block}}<br><b>{{$cn1_ter_11->discipline->name}}</b> <br> {{$cn1_ter_11->user->name}} <br> <b>{{$cn1_ter_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn1_qua_7->dia}}</td>
                <td>{{$cn1_qua_7->block->block}}<br><b>{{$cn1_qua_7->discipline->name}}</b> <br> {{$cn1_qua_7->user->name}} <br> <b>{{$cn1_qua_7->room->name}}</b></td>
                <td>{{$cn1_qua_9->block->block}}<br><b>{{$cn1_qua_9->discipline->name}}</b> <br> {{$cn1_qua_9->user->name}} <br> <b>{{$cn1_qua_9->room->name}}</b></td>
                <td>{{$cn1_qua_11->block->block}}<br><b>{{$cn1_qua_11->discipline->name}}</b> <br> {{$cn1_qua_11->user->name}} <br> <b>{{$cn1_qua_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn1_qui_7->dia}}</td>
                <td>{{$cn1_qui_7->block->block}}<br><b>{{$cn1_qui_7->discipline->name}}</b> <br> {{$cn1_qui_7->user->name}} <br> <b>{{$cn1_qui_7->room->name}}</b></td>
                <td>{{$cn1_qui_9->block->block}}<br><b>{{$cn1_qui_9->discipline->name}}</b> <br> {{$cn1_qui_9->user->name}} <br> <b>{{$cn1_qui_9->room->name}}</b></td>
                <td></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn1_sex_7->dia}}</td>
                <td>{{$cn1_sex_7->block->block}}<br><b>{{$cn1_sex_7->discipline->name}}</b> <br> {{$cn1_sex_7->user->name}} <br> <b>{{$cn1_sex_7->room->name}}</b></td>
                <td>{{$cn1_sex_9->block->block}}<br><b>{{$cn1_sex_9->discipline->name}}</b> <br> {{$cn1_sex_9->user->name}} <br> <b>{{$cn1_sex_9->room->name}}</b></td>
                <td></td>
            </tr>
        </table>
    </template>
</div>

<!-- CONSTRUÇÃO NAVAL 2° SEMESTRE-->
<div id="section_2" class="cn_2" style="display:none">
    <template id="cn_2">
        <h3 class="title-s">2° Semestre</h3>
        <table>
            <thead>
                <tr class="trTd-color">
                <td></td>
                <td>07h45 às 09h25</td>
                <td>09h30 às 11h10</td>
                <td>11h20 às 13h00</td>
                </tr>
            </thead>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn2_seg_7->dia}}</td>
                <td>{{$cn2_seg_7->block->block}}<br> <b>{{$cn2_seg_7->discipline->name}}</b> <br> {{$cn2_seg_7->user->name}} <br> <b>{{$cn2_seg_7->room->name}}</b></td>
                <td>{{$cn2_seg_9->block->block}}<br> <b>{{$cn2_seg_9->discipline->name}}</b> <br> {{$cn2_seg_9->user->name}} <br> <b>{{$cn2_seg_9->room->name}}</b> </td>
                <td>{{$cn2_seg_11->block->block}}<br> <b>{{$cn2_seg_11->discipline->name}}</b> <br> {{$cn2_seg_11->user->name}} <br> <b>{{$cn2_seg_11->room->name}}</b> </td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn2_ter_7->dia}}</td>
                <td>{{$cn2_ter_7->block->block}}<br><b>{{$cn2_ter_7->discipline->name}}</b> <br> {{$cn2_ter_7->user->name}} <br> <b>{{$cn2_ter_7->room->name}}</b></td>
                <td>{{$cn2_ter_9->block->block}}<br><b>{{$cn2_ter_9->discipline->name}}</b> <br> {{$cn2_ter_9->user->name}} <br> <b>{{$cn2_ter_9->room->name}}</b></td>
                <td></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn2_qua_9->dia}}</td>
                <td></td>
                <td>{{$cn2_qua_9->block->block}}<br><b>{{$cn2_qua_9->discipline->name}}</b> <br> {{$cn2_qua_9->user->name}} <br> <b>{{$cn2_qua_9->room->name}}</b></td>
                <td>{{$cn2_qua_11->block->block}}<br><b>{{$cn2_qua_11->discipline->name}}</b> <br> {{$cn2_qua_11->user->name}} <br> <b>{{$cn2_qua_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn2_qui_7->dia}}</td>
                <td>{{$cn2_qui_7->block->block}}<br><b>{{$cn2_qui_7->discipline->name}}</b> <br> {{$cn2_qui_7->user->name}} <br> <b>{{$cn2_qui_7->room->name}}</b></td>
                <td>{{$cn2_qui_9->block->block}}<br><b>{{$cn2_qui_9->discipline->name}}</b> <br> {{$cn2_qui_9->user->name}} <br> <b>{{$cn2_qui_9->room->name}}</b></td>
                <td>{{$cn2_qui_11->block->block}}<br><b>{{$cn2_qui_11->discipline->name}}</b> <br> {{$cn2_qui_11->user->name}} <br> <b>{{$cn2_qui_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn2_sex_7->dia}}</td>
                <td>{{$cn2_sex_7->block->block}}<br><b>{{$cn2_sex_7->discipline->name}}</b> <br> {{$cn2_sex_7->user->name}} <br> <b>{{$cn2_sex_7->room->name}}</b></td>
                <td>{{$cn2_sex_9->block->block}}<br><b>{{$cn2_sex_9->discipline->name}}</b> <br> {{$cn2_sex_9->user->name}} <br> <b>{{$cn2_sex_9->room->name}}</b></td>
                <td></td>
            </tr>
        </table>
    </template>
</div>

<!-- CONSTRUÇÃO NAVAL 3° SEMESTRE-->
<div id="section_3" class="cn_3" style="display:none">
    <template id="cn_3">
        <h3 class="title-s">3° Semestre</h3>
        <table>
            <thead>
                <tr class="trTd-color">
                <td></td>
                <td>07h45 às 09h25</td>
                <td>09h30 às 11h10</td>
                <td>11h20 às 13h00</td>
                </tr>
            </thead>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn3_seg_9->dia}}</td>
                <td></td>
                <td>{{$cn3_seg_9->block->block}}<br> <b>{{$cn3_seg_9->discipline->name}}</b> <br> {{$cn3_seg_9->user->name}} <br> <b>{{$cn3_seg_9->room->name}}</b> </td>
                <td>{{$cn3_seg_11->block->block}}<br> <b>{{$cn3_seg_11->discipline->name}}</b> <br> {{$cn3_seg_11->user->name}} <br> <b>{{$cn3_seg_11->room->name}}</b> </td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn3_ter_7->dia}}</td>
                <td>{{$cn3_ter_7->block->block}}<br><b>{{$cn3_ter_7->discipline->name}}</b> <br> {{$cn3_ter_7->user->name}} <br> <b>{{$cn3_ter_7->room->name}}</b></td>
                <td>{{$cn3_ter_9->block->block}}<br><b>{{$cn3_ter_9->discipline->name}}</b> <br> {{$cn3_ter_9->user->name}} <br> <b>{{$cn3_ter_9->room->name}}</b></td>
                <td></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn3_qua_7->dia}}</td>
                <td>{{$cn3_qua_7->block->block}}<br><b>{{$cn3_qua_7->discipline->name}}</b> <br> {{$cn3_qua_7->user->name}} <br> <b>{{$cn3_qua_7->room->name}}</b></td>
                <td>{{$cn3_qua_9->block->block}}<br><b>{{$cn3_qua_9->discipline->name}}</b> <br> {{$cn3_qua_9->user->name}} <br> <b>{{$cn3_qua_9->room->name}}</b></td>
                <td>{{$cn3_qua_11->block->block}}<br><b>{{$cn3_qua_11->discipline->name}}</b> <br> {{$cn3_qua_11->user->name}} <br> <b>{{$cn3_qua_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn3_qui_7->dia}}</td>
                <td>{{$cn3_qui_7->block->block}}<br><b>{{$cn3_qui_7->discipline->name}}</b> <br> {{$cn3_qui_7->user->name}} <br> <b>{{$cn3_qui_7->room->name}}</b></td>
                <td>{{$cn3_qui_9->block->block}}<br><b>{{$cn3_qui_9->discipline->name}}</b> <br> {{$cn3_qui_9->user->name}} <br> <b>{{$cn3_qui_9->room->name}}</b></td>
                <td>{{$cn3_qui_11->block->block}}<br><b>{{$cn3_qui_11->discipline->name}}</b> <br> {{$cn3_qui_11->user->name}} <br> <b>{{$cn3_qui_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn3_sex_7->dia}}</td>
                <td>{{$cn3_sex_7->block->block}}<br><b>{{$cn3_sex_7->discipline->name}}</b> <br> {{$cn3_sex_7->user->name}} <br> <b>{{$cn3_sex_7->room->name}}</b></td>
                <td>{{$cn3_sex_9->block->block}}<br><b>{{$cn3_sex_9->discipline->name}}</b> <br> {{$cn3_sex_9->user->name}} <br> <b>{{$cn3_sex_9->room->name}}</b></td>
                <td></td>
            </tr>
        </table>
    </template>
</div>

<!--CONSTRUÇÃO NAVAL 4° SEMESTRE-->
<div id="section_4" class="cn_4" style="display:none">
    <template id="cn_4">
        <h3 class="title-s">4° Semestre</h3>
        <table>
            <thead>
                <tr class="trTd-color">
                <td></td>
                <td>07h45 às 09h25</td>
                <td>09h30 às 11h10</td>
                <td>11h20 às 13h00</td>
                </tr>
            </thead>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn4_seg_7->dia}}</td>
                <td>{{$cn4_seg_7->block->block}}<br> <b>{{$cn4_seg_7->discipline->name}}</b> <br> {{$cn4_seg_7->user->name}} <br> <b>{{$cn4_seg_7->room->name}}</b></td>
                <td>{{$cn4_seg_9->block->block}}<br> <b>{{$cn4_seg_9->discipline->name}}</b> <br> {{$cn4_seg_9->user->name}} <br> <b>{{$cn4_seg_9->room->name}}</b> </td>
                <td></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn4_ter_7->dia}}</td>
                <td>{{$cn4_ter_7->block->block}}<br><b>{{$cn4_ter_7->discipline->name}}</b> <br> {{$cn4_ter_7->user->name}} <br> <b>{{$cn4_ter_7->room->name}}</b></td>
                <td>{{$cn4_ter_9->block->block}}<br><b>{{$cn4_ter_9->discipline->name}}</b> <br> {{$cn4_ter_9->user->name}} <br> <b>{{$cn4_ter_9->room->name}}</b></td>
                <td></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn4_qua_7->dia}}</td>
                <td>{{$cn4_qua_7->block->block}}<br><b>{{$cn4_qua_7->discipline->name}}</b> <br> {{$cn4_qua_7->user->name}} <br> <b>{{$cn4_qua_7->room->name}}</b></td>
                <td>{{$cn4_qua_9->block->block}}<br><b>{{$cn4_qua_9->discipline->name}}</b> <br> {{$cn4_qua_9->user->name}} <br> <b>{{$cn4_qua_9->room->name}}</b></td>
                <td>{{$cn4_qua_11->block->block}}<br><b>{{$cn4_qua_11->discipline->name}}</b> <br> {{$cn4_qua_11->user->name}} <br> <b>{{$cn4_qua_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn4_qui_9->dia}}</td>
                <td></td>
                <td>{{$cn4_qui_9->block->block}}<br><b>{{$cn4_qui_9->discipline->name}}</b> <br> {{$cn4_qui_9->user->name}} <br> <b>{{$cn4_qui_9->room->name}}</b></td>
                <td>{{$cn4_qui_11->block->block}}<br><b>{{$cn4_qui_11->discipline->name}}</b> <br> {{$cn4_qui_11->user->name}} <br> <b>{{$cn4_qui_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn4_sex_7->dia}}</td>
                <td>{{$cn4_sex_7->block->block}}<br><b>{{$cn4_sex_7->discipline->name}}</b> <br> {{$cn4_sex_7->user->name}} <br> <b>{{$cn4_sex_7->room->name}}</b></td>
                <td>{{$cn4_sex_9->block->block}}<br><b>{{$cn4_sex_9->discipline->name}}</b> <br> {{$cn4_sex_9->user->name}} <br> <b>{{$cn4_sex_9->room->name}}</b></td>
                <td>{{$cn4_sex_11->block->block}}<br><b>{{$cn4_sex_11->discipline->name}}</b> <br> {{$cn4_sex_11->user->name}} <br> <b>{{$cn4_sex_11->room->name}}</b></td>
            </tr>
        </table>
    </template>
</div>

<!-- CONSTRUÇÃO NAVAL 5° SEMESTRE-->
<div id="section_5" class="cn_5" style="display:none">
    <template id="cn_5">
        <h3 class="title-s">5° Semestre</h3>
        <table>
            <thead>
                <tr class="trTd-color">
                <td></td>
                <td>07h45 às 09h25</td>
                <td>09h30 às 11h10</td>
                <td>11h20 às 13h00</td>
                </tr>
            </thead>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn5_seg_9->dia}}</td>
                <td></td>
                <td>{{$cn5_seg_9->block->block}}<br> <b>{{$cn5_seg_9->discipline->name}}</b> <br> {{$cn5_seg_9->user->name}} <br> <b>{{$cn5_seg_9->room->name}}</b> </td>
                <td>{{$cn5_seg_11->block->block}}<br> <b>{{$cn5_seg_11->discipline->name}}</b> <br> {{$cn5_seg_11->user->name}} <br> <b>{{$cn5_seg_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn5_ter_7->dia}}</td>
                <td>{{$cn5_ter_7->block->block}}<br><b>{{$cn5_ter_7->discipline->name}}</b> <br> {{$cn5_ter_7->user->name}} <br> <b>{{$cn5_ter_7->room->name}}</b></td>
                <td>{{$cn5_ter_9->block->block}}<br><b>{{$cn5_ter_9->discipline->name}}</b> <br> {{$cn5_ter_9->user->name}} <br> <b>{{$cn5_ter_9->room->name}}</b></td>
                <td>{{$cn5_ter_11->block->block}}<br><b>{{$cn5_ter_11->discipline->name}}</b> <br> {{$cn5_ter_11->user->name}} <br> <b>{{$cn5_ter_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn5_qua_7->dia}}</td>
                <td>{{$cn5_qua_7->block->block}}<br><b>{{$cn5_qua_7->discipline->name}}</b> <br> {{$cn5_qua_7->user->name}} <br> <b>{{$cn5_qua_7->room->name}}</b></td>
                <td>{{$cn5_qua_9->block->block}}<br><b>{{$cn5_qua_9->discipline->name}}</b> <br> {{$cn5_qua_9->user->name}} <br> <b>{{$cn5_qua_9->room->name}}</b></td>
                <td></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn5_qui_9->dia}}</td>
                <td></td>
                <td>{{$cn5_qui_9->block->block}}<br><b>{{$cn5_qui_9->discipline->name}}</b> <br> {{$cn5_qui_9->user->name}} <br> <b>{{$cn5_qui_9->room->name}}</b></td>
                <td>{{$cn5_qui_11->block->block}}<br><b>{{$cn5_qui_11->discipline->name}}</b> <br> {{$cn5_qui_11->user->name}} <br> <b>{{$cn5_qui_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn5_sex_7->dia}}</td>
                <td>{{$cn5_sex_7->block->block}}<br><b>{{$cn5_sex_7->discipline->name}}</b> <br> {{$cn5_sex_7->user->name}} <br> <b>{{$cn5_sex_7->room->name}}</b></td>
                <td>{{$cn5_sex_9->block->block}}<br><b>{{$cn5_sex_9->discipline->name}}</b> <br> {{$cn5_sex_9->user->name}} <br> <b>{{$cn5_sex_9->room->name}}</b></td>
                <td>{{$cn5_sex_11->block->block}}<br><b>{{$cn5_sex_11->discipline->name}}</b> <br> {{$cn5_sex_11->user->name}} <br> <b>{{$cn5_sex_11->room->name}}</b></td>
            </tr>
        </table>
    </template>
</div>

<!-- CONSTRUÇÃO NAVAL 6° SEMESTRE-->
<div id="section_6" class="cn_6" style="display:none">
    <template id="cn_6">
        <h3 class="title-s">6° Semestre</h3>
        <table>
            <thead>
                <tr class="trTd-color">
                <td></td>
                <td>07h45 às 09h25</td>
                <td>09h30 às 11h10</td>
                <td>11h20 às 13h00</td>
                </tr>
            </thead>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn6_seg_7->dia}}</td>
                <td>{{$cn6_seg_7->block->block}}<br> <b>{{$cn6_seg_7->discipline->name}}</b> <br> {{$cn6_seg_7->user->name}} <br> <b>{{$cn6_seg_7->room->name}}</b></td>
                <td>{{$cn6_seg_9->block->block}}<br> <b>{{$cn6_seg_9->discipline->name}}</b> <br> {{$cn6_seg_9->user->name}} <br> <b>{{$cn6_seg_9->room->name}}</b> </td>
                <td></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn6_ter_7->dia}}</td>
                <td>{{$cn6_ter_7->block->block}}<br><b>{{$cn6_ter_7->discipline->name}}</b> <br> {{$cn6_ter_7->user->name}} <br> <b>{{$cn6_ter_7->room->name}}</b></td>
                <td>{{$cn6_ter_9->block->block}}<br><b>{{$cn6_ter_9->discipline->name}}</b> <br> {{$cn6_ter_9->user->name}} <br> <b>{{$cn6_ter_9->room->name}}</b></td>
                <td>{{$cn6_ter_11->block->block}}<br><b>{{$cn6_ter_11->discipline->name}}</b> <br> {{$cn6_ter_11->user->name}} <br> <b>{{$cn6_ter_11->room->name}}</b></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn6_qua_7->dia}}</td>
                <td>{{$cn6_qua_7->block->block}}<br><b>{{$cn6_qua_7->discipline->name}}</b> <br> {{$cn6_qua_7->user->name}} <br> <b>{{$cn6_qua_7->room->name}}</b></td>
                <td>{{$cn6_qua_9->block->block}}<br><b>{{$cn6_qua_9->discipline->name}}</b> <br> {{$cn6_qua_9->user->name}} <br> <b>{{$cn6_qua_9->room->name}}</b></td>
                <td></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn6_qui_7->dia}}</td>
                <td>{{$cn6_qui_7->block->block}}<br><b>{{$cn6_qui_7->discipline->name}}</b> <br> {{$cn6_qui_7->user->name}} <br> <b>{{$cn6_qui_7->room->name}}</b></td>
                <td>{{$cn6_qui_9->block->block}}<br><b>{{$cn6_qui_9->discipline->name}}</b> <br> {{$cn6_qui_9->user->name}} <br> <b>{{$cn6_qui_9->room->name}}</b></td>
                <td></td>
            </tr>
            <tr class="trTd-width">
                <td class="trTd-color">{{$cn6_sex_7->dia}}</td>
                <td>{{$cn6_sex_7->block->block}}<br><b>{{$cn6_sex_7->discipline->name}}</b> <br> {{$cn6_sex_7->user->name}} <br> <b>{{$cn6_sex_7->room->name}}</b></td>
                <td>{{$cn6_sex_9->block->block}}<br><b>{{$cn6_sex_9->discipline->name}}</b> <br> {{$cn6_sex_9->user->name}} <br> <b>{{$cn6_sex_9->room->name}}</b></td>
                <td>{{$cn6_sex_11->block->block}}<br><b>{{$cn6_sex_11->discipline->name}}</b> <br> {{$cn6_sex_11->user->name}} <br> <b>{{$cn6_sex_11->room->name}}</b></td>
            </tr>
        </table>
    </template>
</div>
<script src={{asset('js/sn.js')}}></script>
@endsection
