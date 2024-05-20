@include('pages.layouts.header')
<style>
    .oi , h1 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 25vh;
        margin-top: -50px;
    }
    .cont {
        display: flex;
    }

    .btn, .btn-2 {
        padding: 1rem;
        margin: 1rem;
        font-weight: bold;
        background-color: lightgray;
        cursor: pointer;
        border-radius: 15px;
        border: none;
    }
    .btn:hover,.btn-2:hover{
        background-color: gray;
    }
    .image:hover{
        cursor: pointer;
    }
</style>
@section('conteudo')
    <h1>BEM-VINDO</h1>
    <div class="carrosel">
        <img class="image" src={{asset("img/banner.png")}} width="100%">
    </div>
    <script>
        const btnEl = document.querySelector('.btn-2')
        btnEl.addEventListener('click', () => {
            window.location.href = '/login';
        });
        const imageEl = document.querySelector('.image')
        imageEl.addEventListener('click', () => {
            window.open('https://www.vestibularfatec.com.br/home/','_blank');
        })
    </script>

@include('pages.layouts.footer')

