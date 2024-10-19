const buttonEl = document.querySelector('.b-1')
buttonEl.addEventListener('click', () => {
    const formTemplateEl = document.getElementById('formTemplate').content.cloneNode(true)
    document.querySelector('.form-view').appendChild(formTemplateEl)
    buttonEl.disabled = true
})

// Tratando a exclusão de um post
const removeEl = document.querySelectorAll('.remove');
if(removeEl){
    removeEl.forEach((el) => {
        el.addEventListener('click', (event) => {
            event.preventDefault();

            if(confirm('Deseja realmente excluir?')) {
                const post = event.target.getAttribute('data-post-id');
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                fetch(`/mural/delete/${post}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => {
                    if(response.ok){
                        alert('Post apagado com sucesso!');
                        window.location.reload();
                    }
                    else {
                        alert('Erro ao apagar post!');
                    }
                })
            }
        });
    });
}



