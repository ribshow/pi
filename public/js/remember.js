const formEl = document.querySelector('.form-width');
const divAlertEl = document.querySelector('.alert');

if(formEl){
    formEl.addEventListener('submit', (event) => {
        event.preventDefault();
        divAlertEl.innerHTML = 'Carregando...';

        fetch('/relembrar', {
            method: 'POST',
            body: new FormData(formEl)
        })
        .then(response => {
            if(response.ok){
                divAlertEl.innerHTML = '';
                // aplicando transition ao appendChild
                divAlertEl.appendChild(document.createTextNode('Email enviado com sucesso, verifique sua caixa de Email!'));
                event.preventDefault();
            }
            else {
                divAlertEl.innerHTML = '';
                divAlertEl.appendChild(document.createTextNode('Erro ao enviar email!'));
                event.preventDefault();
            }
        })
    });
}
