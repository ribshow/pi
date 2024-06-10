document.addEventListener('DOMContentLoaded', function() {
    // Seleção dos elementos
    const linkUserEl = document.getElementById('link-user');
    const linkHourEl = document.getElementById('link-hour');
    const linkCreateHourEl = document.getElementById('link-create-hour');
    const textEl = document.querySelector('.text-h3');
    const section = document.getElementById('show-template');
    const adminEl = document.getElementById('admin-container');

    // Função para ajustar a altura do container
    function ajustarAltura() {
        adminEl.style.height = 'max-content';
    }

    // Função para adicionar ouvintes de evento ao formulário de criação de horários
    function addFormListeners() {
        const formEl = document.querySelector('#show-template #my-form');
        const responseDiv = document.querySelector('#show-template #response');
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        formEl.addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(formEl);

            fetch(formEl.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    responseDiv.textContent = 'Horário criado com sucesso!';
                    formEl.reset();
                } else {
                    responseDiv.textContent = 'Ocorreu um erro ao criar o horário.';
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                responseDiv.textContent = 'Ocorreu um erro ao criar o horário.';
            });
        });
    }

    // Função para adicionar ouvintes de evento ao formulário de exclusão de usuários
    function addDeleteListeners() {
        const deleteForms = document.querySelectorAll('.delete-user-form');

        deleteForms.forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                if (confirm('Tem certeza que deseja excluir este usuário?')) {
                    const action = this.action;
                    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                    fetch(action, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            this.closest('.admin-right-container').remove();
                            alert(data.success);
                        } else {
                            alert('Ocorreu um erro ao tentar excluir o usuário.');
                        }
                    })
                    .catch(error => console.error('Erro:', error));
                }
            });
        });
    }

    // Função para carregar e exibir o template de usuários
    function loadUserTemplate() {
        const templateUser = document.getElementById('my-users').content.cloneNode(true);
        section.innerHTML = '';
        section.appendChild(templateUser);
        if (textEl) {
            textEl.remove();
        }
        addDeleteListeners();
        pesquisarUser();
    }

    // Função para carregar e exibir o template de criação de horários
    function loadHourTemplate() {
        const templateHour = document.getElementById('criar-hora').content.cloneNode(true);
        section.innerHTML = '';
        section.appendChild(templateHour);
        addFormListeners();
    }

    function loadReadHoursTemplate(){
        const templateReadHour = document.getElementById('my-hours').content.cloneNode(true);
        section.innerHTML = '';
        section.appendChild(templateReadHour);
        if (textEl) {
            textEl.remove();
        }
        ajustarAltura();
    }

    // Ouvinte de clique para o botão de usuários
    linkUserEl.addEventListener('click', function(event) {
        event.preventDefault();
        loadUserTemplate();
        ajustarAltura();
    });

    // Ouvinte de clique para o botão de criação de horários
    linkHourEl.addEventListener('click', function(event) {
        event.preventDefault();
        loadReadHoursTemplate(); // Usar a função de usuário também para este botão (ajustar se necessário)
    });

    // Ouvinte de clique para o botão de criação de horários
    linkCreateHourEl.addEventListener('click', function(event) {
        textEl.innerHTML = '';
        event.preventDefault();
        loadHourTemplate();
        ajustarAltura();
    });

    // Função para filtrar usuários dinamicamente
    function pesquisarUser() {
        const searchInput = document.querySelector('.search-user');
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

    function redirectPage(select) {
        var selectedOption = select.options[select.selectedIndex];
        var courseId = selectedOption.value;

        if(courseId == 1){
            dsm1(courseId);
        }
    }
    // EXPORTAR A FUNÇÃO REDIRECT PARA QUE ELA POSSA SER USADA
    window.redirectPage = redirectPage;

    function dsm1(option){
        var optionsDsm = `<button class='dsm-s1' type='button'>1° Semestre</button>
                          <button class='dsm-s2' type='button'>2° Semestre</button>`;

        if(option == 1){
            document.getElementById('botoes').innerHTML = optionsDsm;
            addDsmListeners();
        }
    }

    function addDsmListeners() {
        const buttonS1 = document.querySelector('.dsm-s1');
        const buttonS2 = document.querySelector('.dsm-s2');
        // ADICIONANDO OUVINTES DE CLICK AOS BOTÕES DE DSM
        buttonS1.addEventListener('click', () => displayContent('dsm', 1));
        buttonS2.addEventListener('click', () => displayContent('dsm', 2));
    }

    // FUNÇÃO PARA EXIBIR O CONTEÚDO DO SEMESTRE
    function displayContent(course, semester) {
        const section1 = document.getElementById('section_1');
        const section2 = document.getElementById('section_2');
        const section3 = document.getElementById('section_3');
        const section4 = document.getElementById('section_4');
        const section5 = document.getElementById('section_5');
        const section6 = document.getElementById('section_6');

        // ESCONDE AS SEÇÕES INICIALMENTE
        section1.style.display = 'none';
        section2.style.display = 'none';
        section3.style.display = 'none';
        section4.style.display = 'none';
        section5.style.display = 'none';
        section6.style.display = 'none';

        // EXIBE E CARREGA O CONTEÚDO CORRESPONDENTE DO CURSO PARA CADA SEMESTRE
            //DSM 1 SEMESTRE
        if (course === 'dsm' && semester === 1) {
            section1.style.display = 'block';
            const template = document.getElementById('dsm_1').content.cloneNode(true);
            section1.innerHTML = '';
            section1.appendChild(template);
            // muda a altura da main para auto
            ajustarAltura();
            // DSM 2 SEMESTRE
        } else if (course === 'dsm' && semester === 2) {
            section2.style.display = 'block';
            const template = document.getElementById('dsm_2').content.cloneNode(true);
            section2.innerHTML = '';
            section2.appendChild(template);
            ajustarAltura();
            // SN 1 SEMESTRE
        } else if (course === 'sn' && semester === 1) {
            section1.style.display = 'block';
            const template = document.getElementById('sn_1').content.cloneNode(true);
            section1.innerHTML = '';
            section1.appendChild(template);
            ajustarAltura();
            // SN 2 SEMESTRE
        }else if (course === 'sn' && semester === 2) {
            section2.style = 'block';
            const template = document.getElementById('sn_2').content.cloneNode(true);
            section2.innerHTML = '';
            section2.appendChild(template);
            ajustarAltura();
            // SN 3 SEMESTRE
        }else if (course === 'sn' && semester === 3){
            section3.style = 'block';
            const template = document.getElementById('sn_3').content.cloneNode(true);
            section3.innerHTML = '';
            section3.appendChild(template);
            ajustarAltura();
            // SN 4 SEMESTRE
        }else if (course === 'sn' && semester === 4){
            section4.style = 'block';
            const template = document.getElementById('sn_4').content.cloneNode(true);
            section4.innerHTML = '';
            section4.appendChild(template);
            ajustarAltura();
            // SN 5 SEMESTRE
        }else if (course === 'sn' && semester === 5){
            section5.style = 'block';
            const template = document.getElementById('sn_5').content.cloneNode(true);
            section5.innerHTML = '';
            section5.appendChild(template);
            ajustarAltura();
            // SN 6 SEMESTRE
        }else if (course === 'sn' && semester === 6){
            section6.style = 'block';
            const template = document.getElementById('sn_6').content.cloneNode(true);
            section6.innerHTML = '';
            section6.appendChild(template);
            ajustarAltura();
            // CN 1 SEMESTRE
        }else if (course === 'cn' && semester === 1){
            section1.style = 'block';
            const template = document.getElementById('cn_1').content.cloneNode(true);
            section1.innerHTML = '';
            section1.appendChild(template);
            ajustarAltura();
            // CN 2 SEMESTRE
        }else if (course === 'cn' && semester === 2){
            section2.style = 'block';
            const template = document.getElementById('cn_2').content.cloneNode(true);
            section2.innerHTML = '';
            section2.appendChild(template);
            ajustarAltura();
            // CN 3 SEMESTRE
        }else if (course === 'cn' && semester === 3){
            section3.style = 'block';
            const template = document.getElementById('cn_3').content.cloneNode(true);
            section3.innerHTML = '';
            section3.appendChild(template);
            ajustarAltura();
            // CN 4 SEMESTRE
        }else if (course === 'cn' && semester === 4){
            section4.style = 'block';
            const template = document.getElementById('cn_4').content.cloneNode(true);
            section4.innerHTML = '';
            section4.appendChild(template);
            ajustarAltura();
            // CN 5 SEMESTRE
        }else if (course === 'cn' && semester === 5){
            section5.style = 'block';
            const template = document.getElementById('cn_5').content.cloneNode(true);
            section5.innerHTML = '';
            section5.appendChild(template);
            ajustarAltura();
            // CN 6 SEMESTRE
        }else if (course === 'cn' && semester === 6){
            section6.style = 'block';
            const template = document.getElementById('cn_6').content.cloneNode(true);
            section6.innerHTML = '';
            section6.appendChild(template);
            ajustarAltura();
        }else if (course === 'gp' && semester === 1){
            section1.style = 'block';
            const template = document.getElementById('gp_1').content.cloneNode(true);
            section1.innerHTML = '';
            section1.appendChild(template);
            ajustarAltura();
        }else if (course === 'gp' && semester === 2){
            section2.style = 'block';
            const template = document.getElementById('gp_2').content.cloneNode(true);
            section2.innerHTML = '';
            section2.appendChild(template);
            ajustarAltura();
        }else if (course === 'gp' && semester === 3){
            section3.style = 'block';
            const template = document.getElementById('gp_3').content.cloneNode(true);
            section3.innerHTML = '';
            section3.appendChild(template);
            ajustarAltura();
        }else if (course === 'gp' && semester === 4){
            section4.style = 'block';
            const template = document.getElementById('gp_4').content.cloneNode(true);
            section4.innerHTML = '';
            section4.appendChild(template);
            ajustarAltura();
        }else if (course === 'gp' && semester === 5){
            section5.style = 'block';
            const template = document.getElementById('gp_5').content.cloneNode(true);
            section5.innerHTML = '';
            section5.appendChild(template);
            ajustarAltura();
        }else if (course === 'gp' && semester === 6){
            section6.style = 'block';
            const template = document.getElementById('gp_6').content.cloneNode(true);
            section6.innerHTML = '';
            section6.appendChild(template);
            ajustarAltura();
        }
        // Adicione lógica para outros semestres e cursos aqui conforme necessário
    }
});
