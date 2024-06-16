
<style>
    select{
        padding: 0.5rem;
        background: lightblue;
        border: lightblue;
        border-radius: 15px;
        cursor: pointer;
        font-weight:300;
    }
    input{
        padding: 0.5rem;
        border-radius: 15px;
        border: none;
    }
    select:focus{
        border: lightblue;
        color: gray;
    }
    .btn{
        padding: 0.5rem;
        border-radius: 15px;
        border: 1px solid
    }
    .btn:hover{
        background-color: green;
        border: 1px solid lightblue;
        cursor: pointer;
        color: white;
        font-weight: bold;
    }
</style>
<div id="show-template"></div>
<template id="criar-hora">
    <form id="my-form" method="POST" action="/store">
        @csrf
        <div>
            <label for="course">Curso:</label><br/>
            <select name="courses" id="courses">
                @foreach($courses as $course)
                <option value={{$course->id}}>
                    {{$course->description}}
                </option>
                @endforeach
            </select>
        </div>
        <br/>
        <div>
            <label for="semester">Semestre:</label><br/>
            <select name="semesters" id="semesters">
                @foreach ($semesters as $semester)
                <option value={{$semester->id}}>
                    {{$semester->name}}
                </option>
                @endforeach
            </select>
        </div>
        <br/>
        <div>
            <label for="discipline">Disciplina:</label><br/>
            <input type="text" id="search" placeholder="Digite para pesquisar..."/>
            <select name="disciplines" id="disciplines">
                @foreach ($disciplines as $discipline)
                    <option value={{$discipline->id}}>
                        {{$discipline->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <br/>
        <div>
            <label for="user">Professor:</label><br/>
            <input type="text" id="search_2" placeholder="Digite para pesquisar..."/>
            <select name="users" id="users">
                @foreach ($users as $user)
                <option value={{$user->id}}>
                    {{$user->name}}
                </option>
                @endforeach
            </select>
        </div>
        <br/>
        <div>
            <label for="room">Sala:</label><br/>
            <input type="text" id="search_3" placeholder="Digite para pesquisar..."/>
            <select name="rooms" id="rooms">
                @foreach ($rooms as $room)
                <option value={{$room->id}}>
                    {{$room->name}}
                </option>
                @endforeach
            </select>
        </div>
        <br/>
        <div>
            <label for="block">Bloco:</label><br/>
            <select name="blocks" id="blocks">
                @foreach ($blocks as $block)
                <option value={{$block->id}}>
                    {{$block->block}}
                </option>
                @endforeach
            </select>
        </div>
        <br/>
        <div>
            <label for="hour">Hora:</label><br/>
            <select name="hours" id="hours">
                <option value="7:45 às 9:25">7:45 às 9:25</option>
                <option value="9:30 às 11:10">9:30 às 11:10</option>
                <option value="11:20 às 13:00">11:20 às 13:00</option>
                <option value="19:00 às 20:40">19:00 às 20:40</option>
                <option value="20:50 às 22:30">20:50 às 22:30</option>
            </select>
        </div>
        <br/>
        <div>
            <label for="day">Dia:</label><br/>
            <select name="days" id="days">
                <option value="Segunda-feira">Segunda-feira</option>
                <option value="Terça-feira">Terça-feira</option>
                <option value="Quarta-feira">Quarta-feira</option>
                <option value="Quinta-feira">Quinta-feira</option>
                <option value="Sexta-feira">Sexta-feira</option>
                <option value="Sábado">Sábado</option>
            </select>
        </div>
        <br/>
        <button class="btn" type="submit">Criar</button>
        @if(session('status') === "hour-created")
            <b>Horário criado com sucesso!</b>
        @endif
        <script src={{asset('js/fazer.js')}}></script>
    </form>
    <div id="response"></div>
</template>
