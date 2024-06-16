const linkEl = document.getElementById('link-user');
const linkHourEl = document.getElementById('link-hour');
const textEl = document.querySelector('.text-h3');
// RECEBENDO A DIV QUE IRÁ EXIBIR O CONTEÚDO
const section = document.getElementById('show-template');

const btnEditEl = document.getElementById('btn-editar');

btnEditEl.addEventListener('click', (event)=>{
    let userLoaded = false;
    event.preventDefault();

    if(!userLoaded){
        const templateAtt = document.getElementById('att-user').content.cloneNode(true);
        document.getElementById('show-template').appendChild(templateAtt);
        userLoaded = true;
    }
});

// adicionando um ouvinte de click ao botão usuários

linkEl.addEventListener('click', (event)=> {
    let userLoaded = false;
    event.preventDefault();
    ajustarAltura();

    // testando se o botão já não foi carregado
    if(!userLoaded){
        const templateUser = document.getElementById('my-users').content.cloneNode(true);
        // LIMPANDO A DIV ANTES DE INSERIR O CONTEÚDO
        section.innerHTML = '';
        document.getElementById('show-template').appendChild(templateUser);
        userLoaded = true;
        // remove a div de boas vindas do html
        textEl.remove();

        pesquisarUser();
    }


});


linkHourEl.addEventListener('click', (event) => {
    let userLoaded = false;
    event.preventDefault();

    if(!userLoaded){
        const templateHour = document.getElementById('criar-hora').content.cloneNode(true);
        // LIMPANDO A DIV ANTES DE RECEBER O CONTEÚDO
        section.innerHTML = '';
        document.getElementById('show-template').appendChild(templateHour);
        userLoaded = true;
    }

    ajustarAltura();
});
const adminEl = document.getElementById('admin-container');

//função que uda a altura fixa da página para auto,
//ajustando o conteúdo a ela
function ajustarAltura(){
    adminEl.style.height = 'max-content';
}

// função para filtrar usuários
function pesquisarUser(){
    // recebendo o campo input
    const searchInput = document.querySelector('.search-user');
    // recebendo a div
    const userContainers = document.querySelectorAll('.admin-right-container');

    searchInput.addEventListener('input', function() {
        const filter = searchInput.value.toLowerCase();
        userContainers.forEach(container => {
            const userName = container.querySelector('.admin-card-username p:first-child').textContent.toLowerCase();
            const userEmail = container.querySelector('.admin-card-username p:last-child').textContent.toLowerCase();
            if (userName.includes(filter) || userEmail.includes(filter)) {
                container.style.display = '';
            } else {
                container.style.display = 'none';
            }
        });
    });
}
