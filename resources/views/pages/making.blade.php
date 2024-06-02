<form method="POST" action="{{route('store')}}">
    @csrf
    <div>
        <label for="course">Curso:</label><br/>
        <select name="courses" id="courses">
            @foreach($courses as $course)
            <option value={{$course->id}}>
                {{$course->id}}-{{$course->description}}
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
                {{$semester->id}} - {{$semester->name}}
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
                    {{$discipline->id}}-{{$discipline->name}}
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
                {{$user->id}}-{{$user->name}}
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
                {{$room->id}}-{{$room->name}}
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
                {{$block->id}}-{{$block->block}}
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

        </select>
    </div>
    <br/>
    <button type="submite">Criar</button>
    @if(session('status') === "hour-created")
        <b>Horário criado com sucesso!</b>
    @endif
    <script src={{asset('js/fazer.js')}}></script>
</form>
