<style>
    .editar-hora{
        margin: 4rem;
    }
    .curso,.disciplina,.professor{
        width: 26rem;
        height: 2rem;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="editar-hora">
    <a href="javascript:history.back()">Voltar</a>
    <form action="{{route('update.hour',$hour->id)}}" method="POST">
        @csrf
        @method('PUT')
        <h3 style="text-align: center"> Editar Horário</h3>
        <div>
            <label for="curso">
                <b>Curso</b>
            </label>
            <br/>
            <input class="curso" type="text" name="course"
            value="{{$hour->course->description}}">
        </div>
        <div>
            <label for="disciplina">
                <b>Disciplina</b>
            </label>
            <br/>
            <input class="disciplina" type="text" name="discipline"
            value="{{$hour->discipline->name}}">
        </div>
        <div>
            <label for="professor">
                <b>Professor</b>
            </label>
            <br/>
            <input class="professor" type="text" name="user"
            value="{{$hour->user->name}}">
        </div>
        <div>
            <label for="sala">
                <b>Sala</b>
            </label>
            <br/>
            <input class="sala" type="text" name="room"
            value="{{$hour->room->name}}">
        </div>
        <div>
            <label for="bloco">
                <b>Bloco</b>
                <br/>
            </label>
            <input class="bloco" type="text" name="block"
            value="{{$hour->block->block}}">
        </div>
        <div>
            <label for="semestre">
                <b>Semestre</b>
                <br/>
            </label>
            <input class="semestre" type="text" name="semester"
            value="{{$hour->semester->name}}">
        </div>
        <div>
            <label for="dia">
                <b>Dia</b>
                <br/>
            </label>
            <input class="dia" type="text" name="dia"
            value="{{$hour->dia}}">
        </div>
        <div>
            <label for="hora">
                <b>Hora</b>
                <br/>
            </label>
            <input class="hora" type="text" name="hora"
            value="{{$hour->hora}}">
        </div>
        <div>
            <button type="submit">Alterar</button>
        </div>
    </form>
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

