<div class="section-title">
    <h2>Quadro de Avisos</h2>
    <div class="button-add">
        @if(auth()->check() && auth()->user()->isTeacher() || auth()->check() && auth()->user()->isAdmin())
        <button id="btn-add" class="btn-add">
            Criar novo
        </button>
        @endif
    </div>
</div>
<div class="home-cards">

@foreach($alerts as $alert)
    <div class="cards">
        <div class="catalog-card">
            <h3 class="alert-title text-white">
                {{$alert->title}}
            </h3>
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

        window.location.href = 'http://localhost:8000/alerts';
    })
</script>
