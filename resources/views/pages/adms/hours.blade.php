<style>
    .centro{
        display: flex;
        align-content: center;
        justify-content: center;
    }
</style>
<div id="show-template"></div>
<template id="my-hours">
    <div class="centro">
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

<!-- SN 1 SEMESTRE -->
<template id="sn_1">
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
                @foreach ($sn1 as $hour)
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

<!-- SN 2 SEMESTRE -->
<template id="sn_2">
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
                @foreach ($sn2 as $hour)
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

<!-- SN 3 SEMESTRE -->
<template id="sn_3">
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
                @foreach ($sn3 as $hour)
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

<!-- SN 4 SEMESTRE -->
<template id="sn_4">
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
                @foreach ($sn4 as $hour)
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

<!-- SN 5 SEMESTRE -->
<template id="sn_5">
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
                @foreach ($sn5 as $hour)
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

<!-- SN 6 SEMESTRE -->
<template id="sn_6">
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
                @foreach ($sn6 as $hour)
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

<!-- CN 1 SEMESTRE -->
<template id="cn_1">
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
                @foreach ($cn1 as $hour)
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

<!-- CN 2 SEMESTRE -->
<template id="cn_2">
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
                @foreach ($cn2 as $hour)
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

<!-- CN 3 SEMESTRE -->
<template id="cn_3">
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
                @foreach ($cn3 as $hour)
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

<!-- CN 4 SEMESTRE -->
<template id="cn_4">
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
                @foreach ($cn4 as $hour)
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

<!-- CN 5 SEMESTRE -->
<template id="cn_5">
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
                @foreach ($cn5 as $hour)
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

<!-- CN 6 SEMESTRE -->
<template id="cn_6">
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
                @foreach ($cn6 as $hour)
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

<!-- GPI 1 SEMESTRE -->
<template id="gp_1">
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
                @foreach ($gp1 as $hour)
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

<!-- GPI 2 SEMESTRE -->
<template id="gp_2">
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
                @foreach ($gp2 as $hour)
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

<!-- GPI 3 SEMESTRE -->
<template id="gp_3">
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
                @foreach ($gp3 as $hour)
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

<!-- GPI 4 SEMESTRE -->
<template id="gp_4">
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
                @foreach ($gp4 as $hour)
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

<!-- GPI 5 SEMESTRE -->
<template id="gp_5">
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
                @foreach ($gp5 as $hour)
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

<!-- GPI 6 SEMESTRE -->
<template id="gp_6">
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
                @foreach ($gp6 as $hour)
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

<!-- MA 1 SEMESTRE -->
<template id="ma_1">
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
                @foreach ($ma1 as $hour)
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

<!-- MA 2 SEMESTRE -->
<template id="ma_2">
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
                @foreach ($ma2 as $hour)
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

<!-- MA 3 SEMESTRE -->
<template id="ma_3">
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
                @foreach ($ma3 as $hour)
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

<!-- MA 4 SEMESTRE -->
<template id="ma_4">
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
                @foreach ($ma4 as $hour)
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

<!-- MA 5 SEMESTRE -->
<template id="ma_5">
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
                @foreach ($ma5 as $hour)
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

<!-- MA 6 SEMESTRE -->
<template id="ma_6">
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
                @foreach ($ma6 as $hour)
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


