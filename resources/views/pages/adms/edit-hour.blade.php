<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar - IntegraFATEC</title>
    <link rel="stylesheet" href={{ asset('/css/edit_adm.css') }}>
</head>
@vite("resources/css/app.css")
<body>
<div class="container">
    <div class="retornar">
        <a class="btn-back" href="javascript:history.back()">
            <img src="{{ asset('img/voltar.png') }}" width="48" alt="voltar">
        </a>
    </div>
    <div class="editar-hora">
        <form action="{{ route('update.hour', $hour->id) }}" method="POST">
            @csrf
            @method('PUT')
            <h3 class="text-black text-center title-hour"> Editar Horário</h3>
            <div class="course">
                <label for="curso">
                    <b>Curso</b>
                </label>
                <br />
                <select name="course_id" id="courses" class="input courses text-black text-center">
                    <option value="{{ $hour->course_id }}">{{ $hour->course->description }}</option>
                    <optgroup Label="..."></optgroup>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->id }} - {{ $course->description }}</option>
                    @endforeach
                </select>
            </div>
            <div class="discipline">
                <label for="disciplina">
                    <b>Disciplina</b>
                </label>
                <br />
                <select name="discipline_id" id="disciplines" class="input disciplines text-black text-center">
                    <option value="{{ $hour->discipline_id }}">{{ $hour->discipline->name }}</option>
                    <optgroup label="..."></optgroup>
                    @foreach ($disciplines as $discipline)
                        <option value="{{ $discipline->id }}">{{ $discipline->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="professor">
                <label for="professor">
                    <b>Professor</b>
                </label>
                <br />
                <select name="user_id" id="users" class="input professors text-black text-center">
                    <option value="{{ $hour->user_id }}">{{ $hour->user->name }}s</option>
                    <optgroup label="..."></optgroup>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="room">
                <label for="sala">
                    <b>Sala</b>
                </label>
                <br />
                <select name="room_id" id="rooms" class="input rooms text-black text-center">
                    <option value="{{ $hour->room_id }}">{{ $hour->room->name }}</option>
                    <optgroup label="..."></optgroup>
                    @foreach ($rooms as $room)
                        <option value="{{ $room->id }}">{{ $room->id }} - {{ $room->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="block">
                <label for="bloco">
                    <b>Bloco</b>
                    <br />
                </label>
                <select name="block_id" id="blocks" class="input blocks text-black text-center">
                    <option value="{{ $hour->block_id }}">{{ $hour->block->block }}</option>
                    <optgroup label="Blocos"></optgroup>
                    @foreach ($blocks as $block)
                        <option value="{{ $block->id }}">{{ $block->id }} - {{ $block->block }}</option>
                    @endforeach
                </select>
            </div>
            <div class="semester">
                <label for="semestre">
                    <b>Semestre</b>
                    <br />
                </label>
                <select name="semester_id" id="semesters" class="input semesters text-black text-center">
                    <option value="{{ $hour->semester_id }}">{{ $hour->semester->name }}</option>
                    <optgroup label="Semestres"></optgroup>
                    @foreach ($semesters as $semester)
                        <option value="{{ $semester->id }}">{{ $semester->id }} - {{ $semester->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="day">
                <label for="dia">
                    <b>Dia</b>
                    <br />
                </label>
                <input class="input days text-black" type="text" name="dia" value="{{ $hour->dia }}">
            </div>
            <div class="hours">
                <label for="hora">
                    <b>Hora</b>
                    <br />
                </label>
                <input class="input hours text-black" type="text" name="hora" value="{{ $hour->hora }}">
            </div>
            <div class="btn-2">
                <button class="bt-alterar" type="submit">Alterar</button>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('form').on('submit', function(event) {
            event.preventDefault(); // Impede o envio padrão do formulário

            var form = $(this);
            var url = form.attr('action');
            var method = form.attr('method');

            $.ajax({
                url: url,
                method: method,
                data: form.serialize(),
                success: function(response) {
                    // Aqui você pode adicionar uma mensagem de sucesso ou fazer outra ação desejada
                    alert('Dados atualizados com sucesso!');
                },
                error: function(xhr, status, error) {
                    // Aqui você pode adicionar uma mensagem de erro ou tratar o erro de outra forma
                    alert('Ocorreu um erro ao atualizar os dados.');
                }
            });
        });
    });
</script>

</body>
</html>