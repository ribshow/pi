document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".form-chat");

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        const formData = new FormData(form);

        fetch(form.action, {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]')
                    .value, // Incluir o token CSRF
            },
        })
            .then((response) => response.json())
            .then((data) => {
                if (data) {
                    // Atualizar o chat com a nova mensagem
                    document.querySelector(".chat-message").innerHTML += `
                    <div class="chat-message">
                        <p class="author">${formData.get("user")}</p>
                        <div class="chat-message-content">
                            <p class="chat-message-text">${formData.get(
                                "message"
                            )}</p>
                            <p class="chat-date">${new Date().toLocaleString()}</p>
                        </div>
                    </div>`;

                    // Limpar o campo de mensagem
                    form.querySelector("#message").value = "";
                } else {
                    alert("Erro ao submeter o formulário: " + data.message);
                }
            })
            .catch((error) => {
                console.error("Erro:", error);
                alert("Erro ao submeter o formulário.");
            });
    });

    // incompleto
    function reloadContent() {
        axios
            .get("https://localhost:7125/chat")
            .then(function (response) {
                document.querySelector(".chat-message").innerHTML =
                    response.data;
            })
            .catch(function (error) {
                console.error("Erro:", error);
            });
    }
});
