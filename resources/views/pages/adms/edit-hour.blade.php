<link rel="stylesheet" href={{ asset('/css/style.css') }}>
<style>
    .editar-hora {
        display: flex;
        align-content: center;
        justify-content: center;
    }

    .container {
        background-color: var(--dsm-bg-color-tertiary);
        height: 100vh;
        padding-top: 1rem;
    }

    .curso,
    .disciplina,
    .professor {
        width: 26rem;
        height: 2rem;
    }

    select {
        width: 300px;
        height: 2rem;
    }

    input {
        width: 300px;
        height: 2rem;
    }

    .retornar {
        position: absolute;
        display: flex;
        align-content: left;
        justify-content: left;
        margin: 1rem;
    }

    .btn-back {
        transition: transform 0.2s;
    }

    .btn-back:hover {
        transform: scale(1.2);
    }

    .btn-2 {
        display: flex;
        align-content: center;
        justify-content: center;
        margin: 0.5rem;
    }

    .bt-alterar {
        padding: 0.5rem;
        font-weight: bold;
        transition: background-color 0.3s, color 0.2s;
        border: 1px solid var(--dsm-bg-color-quaternary);
        border-radius: 15px;
    }

    .bt-alterar:hover {
        cursor: pointer;
        background-color: var(--dsm-bg-color-septenary);
        color: var(--dsm-bg-color-secondary);
        border-radius: 15px;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            <h3 style="text-align: center"> Editar Horário</h3>
            <div>
                <label for="curso">
                    <b>Curso</b>
                </label>
                <br />
                <select name="course_id" id="courses">
                    <option value="{{ $hour->course_id }}">{{ $hour->course->description }}</option>
                    <optgroup Label="..."></optgroup>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->id }} - {{ $course->description }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="disciplina">
                    <b>Disciplina</b>
                </label>
                <br />
                <select name="discipline_id" id="disciplines">
                    <option value="{{ $hour->discipline_id }}">{{ $hour->discipline->name }}</option>
                    <optgroup label="..."></optgroup>
                    @foreach ($disciplines as $discipline)
                        <option value="{{ $discipline->id }}">{{ $discipline->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="professor">
                    <b>Professor</b>
                </label>
                <br />
                <select name="user_id" id="users">
                    <option value="{{ $hour->user_id }}">{{ $hour->user->name }}s</option>
                    <optgroup label="..."></optgroup>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="sala">
                    <b>Sala</b>
                </label>
                <br />
                <select name="room_id" id="rooms">
                    <option value="{{ $hour->room_id }}">{{ $hour->room->name }}</option>
                    <optgroup label="..."></optgroup>
                    @foreach ($rooms as $room)
                        <option value="{{ $room->id }}">{{ $room->id }} - {{ $room->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="bloco">
                    <b>Bloco</b>
                    <br />
                </label>
                <select name="block_id" id="blocks">
                    <option value="{{ $hour->block_id }}">{{ $hour->block->block }}</option>
                    <optgroup label="Blocos"></optgroup>
                    @foreach ($blocks as $block)
                        <option value="{{ $block->id }}">{{ $block->id }} - {{ $block->block }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="semestre">
                    <b>Semestre</b>
                    <br />
                </label>
                <select name="semester_id" id="semesters">
                    <option value="{{ $hour->semester_id }}">{{ $hour->semester->name }}</option>
                    <optgroup label="Semestres"></optgroup>
                    @foreach ($semesters as $semester)
                        <option value="{{ $semester->id }}">{{ $semester->id }} - {{ $semester->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="dia">
                    <b>Dia</b>
                    <br />
                </label>
                <input class="dia" type="text" name="dia" value="{{ $hour->dia }}">
            </div>
            <div>
                <label for="hora">
                    <b>Hora</b>
                    <br />
                </label>
                <input class="hora" type="text" name="hora" value="{{ $hour->hora }}">
            </div>
            <div class="btn-2">
                <button class="bt-alterar" type="submit">Alterar</button>
            </div>
        </form>
    </div>
</div>
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
