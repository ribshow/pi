const linkEl = document.getElementById('link-user');
const linkHourEl = document.getElementById('link-hour');

let userLoaded = false;
// adicionando um ouvinte de click ao botão usuários
linkEl.addEventListener('click', (event)=> {
    event.preventDefault();

    // testando se o botão já não foi carregado
    if(!userLoaded){
        const templateUser = document.getElementById('my-users').content.cloneNode(true);
        document.getElementById('show-users').appendChild(templateUser);
        userLoaded = true;
    }

    ajustarAltura();
});

linkHourEl.addEventListener('click', (event) => {
    event.preventDefault();

    if(!userLoaded){
        const templateHour = document.getElementById('create-hour').content.cloneNode(true);
        document.getElementById('show-create').appendChild(templateHour);
        userLoaded = true;
    }

    ajustarAltura();
})

const adminEl = document.getElementById('admin-container');

//função que uda a altura fixa da página para auto,
//ajustando o conteúdo a ela
function ajustarAltura(){
    adminEl.style.height = 'auto';
}
