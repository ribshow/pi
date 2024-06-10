<style>
    #my-table{
        width: 80%;
        border: 1px solid gray;
    }
    th,td {
        padding: 0.5rem;
        text-align: center;
        border: 1px solid gray;
    }
    th {
        background-color: gray;
        color: white;
    }
    td:hover{
        background-color: lightblue;
    }
    #editar{
        background: lightblue;
        cursor: pointer;
        padding: 1.2;
    }
    #editar:hover{
        width: 2rem;
        height: 2rem;
    }
    .courses{
        width: 300px;
        padding: 0.5rem;
    }
    .course, #botoes{
        display: flex;
        align-content: center;
        justify-content: center;
        width: 100%;
    }
    #my-table{
        margin-top: 1rem;
    }
    #botoes{
        margin-top: 1rem;
    }
    .dsm-s2{
        margin-left: 1rem;
    }
</style>
<div id="show-template"></div>
<template id="my-hours">
    <div class="admin-right-all-container">
        <div class="course">
            <select class="courses" name="course" onchange="redirectPage(this)">
                <option value="padrao">Escolha um curso</option>
                @foreach ($courses as $course)
                        <option value="{{$course->id}}">
                            {{$course->description}}
                        </option>
                @endforeach
            </select>
        </div>
        <div id="botoes"></div>
        <div id="section_1" style="display:none"></div>
        <div id="section_2" style="display:none"></div>
        <div id="section_3" style="display:none"></div>
        <div id="section_4" style="display:none"></div>
        <div id="section_5" style="display:none"></div>
        <div id="section_6" style="display:none"></div>
    </div>
</template>
<!-- DSM 1 SEMESTRE -->
<template id="dsm_1">
        <div class="course">
            <table id="my-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Professor</th>
                        <th>Disciplina</th>
                        <th>Sala</th>
                        <th>Bloco</th>
                        <th>Horário</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dsm1 as $hour)
                    <tr>
                        <td>{{$hour->id}}</td>
                        <td>{{$hour->user->name}}</td>
                        <td>{{$hour->discipline->name}}</td>
                        <td>{{$hour->room->name}}</td>
                        <td>{{$hour->block->block}}</td>
                        <td>{{$hour->dia}} | {{$hour->hora}}</td>
                        <td>
                            <form action="{{route('edit.hour',$hour->id)}}" method="POST">
                                @csrf
                                <button action="/edit" id="editar" type="submit">
                                    <img src={{asset('img/lapis.png')}} width="16px">
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</template>

<!-- DSM 2 SEMESTRE -->
<template id="dsm_2">
    <div class="course">
        <table id="my-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Professor</th>
                    <th>Disciplina</th>
                    <th>Sala</th>
                    <th>Bloco</th>
                    <th>Horário</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dsm2 as $hour)
                <tr>
                    <td>{{$hour->id}}</td>
                    <td>{{$hour->user->name}}</td>
                    <td>{{$hour->discipline->name}}</td>
                    <td>{{$hour->room->name}}</td>
                    <td>{{$hour->block->block}}</td>
                    <td>{{$hour->dia}} | {{$hour->hora}}</td>
                    <td>
                        <form action="{{route('edit.hour',$hour->id)}}" method="POST">
                            @csrf
                            <button action="/edit" id="editar" type="submit">
                                <img src={{asset('img/lapis.png')}} width="16px">
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</template>
