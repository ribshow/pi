document.addEventListener("DOMContentLoaded", function () {
    // Seleção dos elementos
    const linkUserEl = document.getElementById("link-user");
    const linkHourEl = document.getElementById("link-hour");
    const linkCreateHourEl = document.getElementById("link-create-hour");
    const linkChatEl = document.getElementById("link-chat");
    const textEl = document.querySelector(".text-h3");
    const section = document.getElementById("show-template");
    const adminEl = document.getElementById("admin-container");

    const buttonEl = document.querySelectorAll(".btn-editar");

    function loadAttTemplate() {
        const templateAtt = document
            .getElementById("att-user")
            .content.cloneNode(true);
        section.innerHTML = "";
        section.appendChild(templateAtt);
        if (textEl) {
            textEl.remove();
        }
    }

    // Função para ajustar a altura do container
    function ajustarAltura() {
        adminEl.style.height = "max-content";
    }

    // Função para adicionar ouvintes de evento ao formulário de criação de horários
    function addFormListeners() {
        const formEl = document.querySelector("#show-template #my-form");
        const responseDiv = document.querySelector("#show-template #response");
        const csrfToken = document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content");

        formEl.addEventListener("submit", function (event) {
            event.preventDefault();
            if (event.target) {
                let respost = prompt(
                    "Deseja realmente criar esse horário? (s/n)"
                );
                if (respost === "s") {
                    const formData = new FormData(formEl);

                    fetch(formEl.action, {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": csrfToken,
                            Accept: "application/json",
                        },
                        body: formData,
                    })
                        .then((response) => {
                            if (!response.ok) {
                                throw new Error("Network response was not ok");
                            }
                            return response.json();
                        })
                        .then((data) => {
                            if (data.success) {
                                responseDiv.textContent =
                                    "Horário criado com sucesso!";
                                formEl.reset();
                            } else {
                                responseDiv.textContent =
                                    "Ocorreu um erro ao criar o horário.";
                            }
                        })
                        .catch((error) => {
                            console.error("Erro:", error);
                            responseDiv.textContent =
                                "Ocorreu um erro ao criar o horário.";
                        });
                }
            }
        });
    }

    // Função para adicionar ouvintes de evento ao formulário de exclusão de usuários
    function addDeleteListeners() {
        const deleteForms = document.querySelectorAll(".delete-user-form");

        deleteForms.forEach((form) => {
            form.addEventListener("submit", function (event) {
                event.preventDefault();

                if (confirm("Tem certeza que deseja excluir este usuário?")) {
                    const action = this.action;
                    const csrfToken = document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content");

                    fetch(action, {
                        method: "DELETE",
                        headers: {
                            "X-CSRF-TOKEN": csrfToken,
                            "Content-Type": "application/json",
                            Accept: "application/json",
                        },
                    })
                        .then((response) => response.json())
                        .then((data) => {
                            if (data.success) {
                                this.closest(".admin-right-container").remove();
                                alert(data.success);
                            } else {
                                alert(
                                    "Ocorreu um erro ao tentar excluir o usuário."
                                );
                            }
                        })
                        .catch((error) => console.error("Erro:", error));
                }
            });
        });
    }

    // função que muda a role de um usuário para professor
    function addEditListeners() {
        const editUsers = document.querySelectorAll(".edit-user-form");
        editUsers.forEach((form) => {
            form.addEventListener("submit", function (event) {
                event.preventDefault();

                if (confirm("Deseja definir esse usuário como professor?")) {
                    const action = this.action;
                    const csrfToken = document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content");

                    fetch(action, {
                        method: "PUT",
                        headers: {
                            "X-CSRF-TOKEN": csrfToken,
                            "Content-Type": "application/json",
                            Accept: "application/json",
                        },
                    })
                        .then((response) => response.json())
                        .then((data) => {
                            if (data.success) {
                                this.closest(".admin-right-container").remove();
                                alert(data.success);
                            } else {
                                alert(
                                    "Houve um problema ao atualizar usuário!"
                                );
                            }
                        })
                        .catch((error) => console.error("Erro", error));
                }
            });
        });
    }
    // Função para carregar e exibir o template de usuários
    function loadUserTemplate() {
        const templateUser = document
            .getElementById("my-users")
            .content.cloneNode(true);
        section.innerHTML = "";
        section.appendChild(templateUser);
        if (textEl) {
            textEl.remove();
        }
        addDeleteListeners();
        addEditListeners();
        pesquisarUser();
    }

    function loadChatTemplate() {
        const templateChat = document
            .getElementById("my-chats")
            .content.cloneNode(true);
        section.innerHTML = "";
        section.appendChild(templateChat);
        if (textEl) {
            textEl.remove();
        }
    }

    // Função para carregar e exibir o template de criação de horários
    function loadHourTemplate() {
        const templateHour = document
            .getElementById("criar-hora")
            .content.cloneNode(true);
        section.innerHTML = "";
        section.appendChild(templateHour);
        addFormListeners();
    }

    function loadReadHoursTemplate() {
        const templateReadHour = document
            .getElementById("my-hours")
            .content.cloneNode(true);
        section.innerHTML = "";
        section.appendChild(templateReadHour);
        if (textEl) {
            textEl.remove();
        }
        ajustarAltura();
    }
    // Ouvinte de clique para o botão de usuários
    linkUserEl.addEventListener("click", function (event) {
        event.preventDefault();
        loadUserTemplate();
        ajustarAltura();
    });
    // Ouvinte de clique para o botão de editar

    // Ouvinte de clique para o botão de criação de horários
    linkHourEl.addEventListener("click", function (event) {
        event.preventDefault();
        loadReadHoursTemplate(); // Usar a função de usuário também para este botão (ajustar se necessário)
    });

    // Ouvinte de clique para o botão de criação de horários
    linkCreateHourEl.addEventListener("click", function (event) {
        textEl.innerHTML = "";
        event.preventDefault();
        loadHourTemplate();
        ajustarAltura();
    });

    // Ouvinte de clique para o botão de ver chat
    linkChatEl.addEventListener("click", (event) => {
        event.preventDefault();
        loadChatTemplate();
    });

    // Função para filtrar usuários dinamicamente
    function pesquisarUser() {
        const searchInput = document.querySelector(".search-user");
        const userContainers = document.querySelectorAll(
            ".admin-right-container"
        );

        searchInput.addEventListener("input", function () {
            const filter = searchInput.value.toLowerCase();
            userContainers.forEach((container) => {
                const userName = container
                    .querySelector(".admin-card-username p:first-child")
                    .textContent.toLowerCase();
                const userEmail = container
                    .querySelector(".admin-card-username p:last-child")
                    .textContent.toLowerCase();
                if (userName.includes(filter) || userEmail.includes(filter)) {
                    container.style.display = "";
                } else {
                    container.style.display = "none";
                }
            });
        });
    }

    function redirectPage(select) {
        var selectedOption = select.options[select.selectedIndex];
        var courseId = selectedOption.value;

        if (courseId == 1) {
            dsm1(courseId);
        } else if (courseId == 2) {
            sn(courseId);
        } else if (courseId == 3) {
            cn(courseId);
        } else if (courseId == 4) {
            gpi(courseId);
        } else if (courseId == 5) {
            alert("Curso modalidade EAD.");
        } else if (courseId == 6) {
            ma(courseId);
        }
    }
    // EXPORTAR A FUNÇÃO REDIRECT PARA QUE ELA POSSA SER USADA
    window.redirectPage = redirectPage;

    // CRIANDO OS BOTÕES
    function dsm1(option) {
        var optionsDsm = `<button class='dsm-s1' type='button'>1° Semestre</button>
                          <button class='dsm-s2' type='button'>2° Semestre</button>`;

        if (option == 1) {
            document.getElementById("botoes").innerHTML = optionsDsm;
            addDsmListeners();
        }
    }
    // CRIANDO OS BOTÕES DE SN
    function sn(option) {
        var optionsSn = `<button class='sn-s1' type='button'>1° Semestre</button>
                         <button class='sn-s2' type='button'>2° Semestre</button>
                         <button class='sn-s3' type='button'>3° Semestre</button>
                         <button class='sn-s4' type='button'>4° Semestre</button>
                         <button class='sn-s5' type='button'>5° Semestre</button>
                         <button class='sn-s6' type='button'>6° Semestre</button>`;
        if (option == 2) {
            // INSERE OS BOTÕES DE SN NO HTML
            document.getElementById("botoes").innerHTML = optionsSn;
            // ADICIONANDO OUVINTES PARA GARANTIR QUE O BOTÃO CORRETO SEJA ACIONADO
            addSnListeners();
        }
    }
    // CRIANDO OS BOTÕES DE CN
    function cn(option) {
        // CRIANDO OS BOTÕES
        var optionsCn = `<button class='cn-s1' type='button'>1° Semestre</button>
                             <button class='cn-s2' type='button'>2° Semestre</button>
                             <button class='cn-s3' type='button'>3° Semestre</button>
                             <button class='cn-s4' type='button'>4° Semestre</button>
                             <button class='cn-s5' type='button'>5° Semestre</button>
                             <button class='cn-s6' type='button'>6° Semestre</button>`;
        // INSERE OS BOTÕES NO HTML
        if (option == 3) {
            document.getElementById("botoes").innerHTML = optionsCn;
            // Adicione event listeners se necessário
            addCnListeners();
        }
    }
    // CRIANDO OS BOTÕES DE GPI
    function gpi(option) {
        // CRIANDO OS BOTÕES
        var optionsGp = `<button class='gp-s1' type='button'>1° Semestre</button>
        <button class='gp-s2' type='button'>2° Semestre</button>
        <button class='gp-s3' type='button'>3° Semestre</button>
        <button class='gp-s4' type='button'>4° Semestre</button>
        <button class='gp-s5' type='button'>5° Semestre</button>
        <button class='gp-s6' type='button'>6° Semestre</button>`;

        if (option == 4) {
            document.getElementById("botoes").innerHTML = optionsGp;
            addGpListeners();
        }
    }
    // CRIANDO OS BOTÕES DE MA
    function ma(option) {
        var optionsMa = `
        <button class='ma-s1' type='button'>1° Semestre</button>
        <button class='ma-s2' type='button'>2° Semestre</button>
        <button class='ma-s3' type='button'>3° Semestre</button>
        <button class='ma-s4' type='button'>4° Semestre</button>
        <button class='ma-s5' type='button'>5° Semestre</button>
        <button class='ma-s6' type='button'>6° Semestre</button>`;

        if (option == 6) {
            document.getElementById("botoes").innerHTML = optionsMa;
            addMaListeners();
        }
    }

    // ADICIONANDO BOTÕES AO DOCUMENT E OUVINTES AOS BOTÕES DOS CURSOS
    // // FUNÇÃO PARA ADICIONAR OUVINTES AOS BOTÕES DE DSM
    function addDsmListeners() {
        const buttonS1 = document.querySelector(".dsm-s1");
        const buttonS2 = document.querySelector(".dsm-s2");
        // ADICIONANDO OUVINTES DE CLICK AOS BOTÕES DE DSM
        buttonS1.addEventListener("click", () => displayContent("dsm", 1));
        buttonS2.addEventListener("click", () => displayContent("dsm", 2));
    }
    // FUNÇÃO PARA ADICIONAR OUVINTES AOS BOTÕES DE SN
    function addSnListeners() {
        const buttonSn1 = document.querySelector(".sn-s1");
        const buttonSn2 = document.querySelector(".sn-s2");
        const buttonSn3 = document.querySelector(".sn-s3");
        const buttonSn4 = document.querySelector(".sn-s4");
        const buttonSn5 = document.querySelector(".sn-s5");
        const buttonSn6 = document.querySelector(".sn-s6");
        // ADICIONANDO OUVINTES DE CLICK AOS BOTÕES DE DSM
        buttonSn1.addEventListener("click", () => displayContent("sn", 1));
        buttonSn2.addEventListener("click", () => displayContent("sn", 2));
        buttonSn3.addEventListener("click", () => displayContent("sn", 3));
        buttonSn4.addEventListener("click", () => displayContent("sn", 4));
        buttonSn5.addEventListener("click", () => displayContent("sn", 5));
        buttonSn6.addEventListener("click", () => displayContent("sn", 6));
    }
    // FUNÇÃO PARA ADICIONAR OUVINTES AOS BOTÕES DE CN
    function addCnListeners() {
        const buttonCn1 = document.querySelector(".cn-s1");
        const buttonCn2 = document.querySelector(".cn-s2");
        const buttonCn3 = document.querySelector(".cn-s3");
        const buttonCn4 = document.querySelector(".cn-s4");
        const buttonCn5 = document.querySelector(".cn-s5");
        const buttonCn6 = document.querySelector(".cn-s6");
        // ADICIONANDO OUVINTES DE CLICK AOS BOTÕES DE DSM
        buttonCn1.addEventListener("click", () => displayContent("cn", 1));
        buttonCn2.addEventListener("click", () => displayContent("cn", 2));
        buttonCn3.addEventListener("click", () => displayContent("cn", 3));
        buttonCn4.addEventListener("click", () => displayContent("cn", 4));
        buttonCn5.addEventListener("click", () => displayContent("cn", 5));
        buttonCn6.addEventListener("click", () => displayContent("cn", 6));
    }
    // FUNÇÃO PARA ADICIONAR OUVINTES AOS BOTÕES DE GPI
    function addGpListeners() {
        const buttonGp1 = document.querySelector(".gp-s1");
        const buttonGp2 = document.querySelector(".gp-s2");
        const buttonGp3 = document.querySelector(".gp-s3");
        const buttonGp4 = document.querySelector(".gp-s4");
        const buttonGp5 = document.querySelector(".gp-s5");
        const buttonGp6 = document.querySelector(".gp-s6");
        // ADICIONANDO OUVINTES DE CLICK AOS BOTÕES DE DSM
        buttonGp1.addEventListener("click", () => displayContent("gp", 1));
        buttonGp2.addEventListener("click", () => displayContent("gp", 2));
        buttonGp3.addEventListener("click", () => displayContent("gp", 3));
        buttonGp4.addEventListener("click", () => displayContent("gp", 4));
        buttonGp5.addEventListener("click", () => displayContent("gp", 5));
        buttonGp6.addEventListener("click", () => displayContent("gp", 6));
    }
    // FUNÇÃO PARA ADICIONAR OUVINTES AOS BOTÕES DE MA
    function addMaListeners() {
        const buttonMa1 = document.querySelector(".ma-s1");
        const buttonMa2 = document.querySelector(".ma-s2");
        const buttonMa3 = document.querySelector(".ma-s3");
        const buttonMa4 = document.querySelector(".ma-s4");
        const buttonMa5 = document.querySelector(".ma-s5");
        const buttonMa6 = document.querySelector(".ma-s6");
        // ADICIONANDO OUVINTES DE CLICK AOS BOTÕES DE DSM
        buttonMa1.addEventListener("click", () => displayContent("ma", 1));
        buttonMa2.addEventListener("click", () => displayContent("ma", 2));
        buttonMa3.addEventListener("click", () => displayContent("ma", 3));
        buttonMa4.addEventListener("click", () => displayContent("ma", 4));
        buttonMa5.addEventListener("click", () => displayContent("ma", 5));
        buttonMa6.addEventListener("click", () => displayContent("ma", 6));
    }

    // FUNÇÃO PARA EXIBIR O CONTEÚDO DO SEMESTRE
    function displayContent(course, semester) {
        const section1 = document.getElementById("section_1");
        const section2 = document.getElementById("section_2");
        const section3 = document.getElementById("section_3");
        const section4 = document.getElementById("section_4");
        const section5 = document.getElementById("section_5");
        const section6 = document.getElementById("section_6");

        // ESCONDE AS SEÇÕES INICIALMENTE
        section1.style.display = "none";
        section2.style.display = "none";
        section3.style.display = "none";
        section4.style.display = "none";
        section5.style.display = "none";
        section6.style.display = "none";

        // EXIBE E CARREGA O CONTEÚDO CORRESPONDENTE DO CURSO PARA CADA SEMESTRE
        //DSM 1 SEMESTRE
        if (course === "dsm" && semester === 1) {
            section1.style.display = "block";
            const template = document
                .getElementById("dsm_1")
                .content.cloneNode(true);
            section1.innerHTML = "";
            section1.appendChild(template);
            // muda a altura da main para auto
            ajustarAltura();
            // DSM 2 SEMESTRE
        } else if (course === "dsm" && semester === 2) {
            section2.style.display = "block";
            const template = document
                .getElementById("dsm_2")
                .content.cloneNode(true);
            section2.innerHTML = "";
            section2.appendChild(template);
            ajustarAltura();
            // SN 1 SEMESTRE
        } else if (course === "sn" && semester === 1) {
            section1.style.display = "block";
            const template = document
                .getElementById("sn_1")
                .content.cloneNode(true);
            section1.innerHTML = "";
            section1.appendChild(template);
            ajustarAltura();
            // SN 2 SEMESTRE
        } else if (course === "sn" && semester === 2) {
            section2.style = "block";
            const template = document
                .getElementById("sn_2")
                .content.cloneNode(true);
            section2.innerHTML = "";
            section2.appendChild(template);
            ajustarAltura();
            // SN 3 SEMESTRE
        } else if (course === "sn" && semester === 3) {
            section3.style = "block";
            const template = document
                .getElementById("sn_3")
                .content.cloneNode(true);
            section3.innerHTML = "";
            section3.appendChild(template);
            ajustarAltura();
            // SN 4 SEMESTRE
        } else if (course === "sn" && semester === 4) {
            section4.style = "block";
            const template = document
                .getElementById("sn_4")
                .content.cloneNode(true);
            section4.innerHTML = "";
            section4.appendChild(template);
            ajustarAltura();
            // SN 5 SEMESTRE
        } else if (course === "sn" && semester === 5) {
            section5.style = "block";
            const template = document
                .getElementById("sn_5")
                .content.cloneNode(true);
            section5.innerHTML = "";
            section5.appendChild(template);
            ajustarAltura();
            // SN 6 SEMESTRE
        } else if (course === "sn" && semester === 6) {
            section6.style = "block";
            const template = document
                .getElementById("sn_6")
                .content.cloneNode(true);
            section6.innerHTML = "";
            section6.appendChild(template);
            ajustarAltura();
            // CN 1 SEMESTRE
        } else if (course === "cn" && semester === 1) {
            section1.style = "block";
            const template = document
                .getElementById("cn_1")
                .content.cloneNode(true);
            section1.innerHTML = "";
            section1.appendChild(template);
            ajustarAltura();
            // CN 2 SEMESTRE
        } else if (course === "cn" && semester === 2) {
            section2.style = "block";
            const template = document
                .getElementById("cn_2")
                .content.cloneNode(true);
            section2.innerHTML = "";
            section2.appendChild(template);
            ajustarAltura();
            // CN 3 SEMESTRE
        } else if (course === "cn" && semester === 3) {
            section3.style = "block";
            const template = document
                .getElementById("cn_3")
                .content.cloneNode(true);
            section3.innerHTML = "";
            section3.appendChild(template);
            ajustarAltura();
            // CN 4 SEMESTRE
        } else if (course === "cn" && semester === 4) {
            section4.style = "block";
            const template = document
                .getElementById("cn_4")
                .content.cloneNode(true);
            section4.innerHTML = "";
            section4.appendChild(template);
            ajustarAltura();
            // CN 5 SEMESTRE
        } else if (course === "cn" && semester === 5) {
            section5.style = "block";
            const template = document
                .getElementById("cn_5")
                .content.cloneNode(true);
            section5.innerHTML = "";
            section5.appendChild(template);
            ajustarAltura();
            // CN 6 SEMESTRE
        } else if (course === "cn" && semester === 6) {
            section6.style = "block";
            const template = document
                .getElementById("cn_6")
                .content.cloneNode(true);
            section6.innerHTML = "";
            section6.appendChild(template);
            ajustarAltura();
        } else if (course === "gp" && semester === 1) {
            section1.style = "block";
            const template = document
                .getElementById("gp_1")
                .content.cloneNode(true);
            section1.innerHTML = "";
            section1.appendChild(template);
            ajustarAltura();
        } else if (course === "gp" && semester === 2) {
            section2.style = "block";
            const template = document
                .getElementById("gp_2")
                .content.cloneNode(true);
            section2.innerHTML = "";
            section2.appendChild(template);
            ajustarAltura();
        } else if (course === "gp" && semester === 3) {
            section3.style = "block";
            const template = document
                .getElementById("gp_3")
                .content.cloneNode(true);
            section3.innerHTML = "";
            section3.appendChild(template);
            ajustarAltura();
        } else if (course === "gp" && semester === 4) {
            section4.style = "block";
            const template = document
                .getElementById("gp_4")
                .content.cloneNode(true);
            section4.innerHTML = "";
            section4.appendChild(template);
            ajustarAltura();
        } else if (course === "gp" && semester === 5) {
            section5.style = "block";
            const template = document
                .getElementById("gp_5")
                .content.cloneNode(true);
            section5.innerHTML = "";
            section5.appendChild(template);
            ajustarAltura();
        } else if (course === "gp" && semester === 6) {
            section6.style = "block";
            const template = document
                .getElementById("gp_6")
                .content.cloneNode(true);
            section6.innerHTML = "";
            section6.appendChild(template);
            ajustarAltura();
        } else if (course === "ma" && semester === 1) {
            section1.style = "block";
            const template = document
                .getElementById("ma_1")
                .content.cloneNode(true);
            section1.innerHTML = "";
            section1.appendChild(template);
            ajustarAltura();
            // MA 2 SEMESTRE
        } else if (course === "ma" && semester === 2) {
            section2.style = "block";
            const template = document
                .getElementById("ma_2")
                .content.cloneNode(true);
            section2.innerHTML = "";
            section2.appendChild(template);
            ajustarAltura();
            // MA 3 SEMESTRE
        } else if (course === "ma" && semester === 3) {
            section3.style = "block";
            const template = document
                .getElementById("ma_3")
                .content.cloneNode(true);
            section3.innerHTML = "";
            section3.appendChild(template);
            ajustarAltura();
            // MA 4 SEMESTRE
        } else if (course === "ma" && semester === 4) {
            section4.style = "block";
            const template = document
                .getElementById("ma_4")
                .content.cloneNode(true);
            section4.innerHTML = "";
            section4.appendChild(template);
            ajustarAltura();
            // MA 5 SEMESTRE
        } else if (course === "ma" && semester === 5) {
            section5.style = "block";
            const template = document
                .getElementById("ma_5")
                .content.cloneNode(true);
            section5.innerHTML = "";
            section5.appendChild(template);
            ajustarAltura();
            // MA 6 SEMESTRE
        } else if (course === "ma" && semester === 6) {
            section6.style = "block";
            const template = document
                .getElementById("ma_6")
                .content.cloneNode(true);
            section6.innerHTML = "";
            section6.appendChild(template);
            ajustarAltura();
        }
        // Adicione lógica para outros semestres e cursos aqui conforme necessário
    }
});
