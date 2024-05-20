<link rel="stylesheet"href={{asset('css/estilos_grade.css')}}>
<title>IntegraFatec - Grade</title>
@include('pages.layouts.header')
@section('conteudo')
<script>
    var imgPathSeg ="{{asset('img/relogio_segunda.svg')}}";
    var imgPathTer ="{{asset('img/relogio_terca.svg')}}";
    var imgPathQua ="{{asset('img/relogio_quarta.svg')}}";
    var imgPathQui ="{{asset('img/relogio_quinta.svg')}}";
    var imgPathSex ="{{asset('img/relogio_sexta.svg')}}";
</script>
<script src="{{ asset('/js/grade.js')}}"></script>
        <div class="body-container">
                <h1 id="titulo">GRADE</h1>
            <div class="select">
                <select name="curso" onchange="redirectToPage(this)">
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
                <div class="conteudo"></div>
            </div>
        </div>

