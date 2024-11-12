<link rel="stylesheet"
href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<div class="section-title">
    <h2>Quadro de Avisos</h2>
    <div class="button-add">
        @if(auth()->check() && auth()->user()->isTeacher() || auth()->check() && auth()->user()->isAdmin())
        <a href="{{route('alerts.index')}}"id="btn-add" class="btn-add">
            Criar novo
        </a>
        @endif
    </div>
</div>
<div class="home-cards">
@foreach($alerts as $alert)
    <div class="cards">
        <div class="catalog-card">
            <div class="title-card">
            <h3 class="alert-title text-white">
                {{$alert->title}}
            </h3>
            <div class="title-card-btn">
                @if(auth()->check() && auth()->user()->isTeacher() || auth()->check() && auth()->user()->isAdmin())
            <form class=".delete-alert-form" action="{{route('delete.alert', $alert->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn-delete-alert" type="submit"><i class="bx bx-trash"></i></button>
                </form>
                @endif
            </div>
            </div>
            <div class="content-center">
                <p class="alert-content text-white">
                    {{$alert->content}}
                </p>
            </div>
        </div>
        <div class="edit-card">
            <div class="author-center">
            <p class="alert-author">Criador por: {{$alert->user_id}}</p>
            </div>
        </div>
    </div>
@endforeach
</div>
<script>
    const btnElement = document.getElementById('btn-add');

    btnElement.addEventListener('click', (event) => {
        event.preventDefault();

        window.location.href = 'http://127.0.0.1:8000/alerts';
    })

    $(document).ready(function() {
        $("form").on("submit", function(){
            event.preventDefault();

            var form = $(this);
            var url = form.attr("action");
            var method = form.attr("method");

            $.ajax({
                url: url,
                method: method,
                data: form.serialize(),
                success: function (response) {
                    alert("Alerta excluído com sucesso!");
                    location.reload(response);
                },
                error: (xhr, status, error) => {
                    alert("Erro ao excluir mensagem!");
                }
            });
        });
    });
</script>
