$(document).ready(function () {
    $("form").on("submit", function (event) {
        event.preventDefault(); // Impede o envio padrão do formulário

        var form = $(this);
        var url = form.attr("action");
        var method = form.attr("method");

        $.ajax({
            url: url,
            method: method,
            data: form.serialize(),
            success: function (response) {
                // limpa o formulário e recarrega a página
                form.closest(".chat-message").remove();
                location.reload(response);
            },
            error: function (xhr, status, error) {
                // Aqui você pode adicionar uma mensagem de erro ou tratar o erro de outra forma
                const liErrorEl = document.createElement("li");
                liErrorEl.textContent = `Error apagar mensagem: ${
                    (error, status, xhr)
                }`;
                const listEl = document.getElementById("messagesList");
                listEl.appendChild(liErrorEl);
            },
        });
    });
});

/*
const statusElement = document.getElementById("chat").value;

if(statusElement == "Denunciado")
{
    const divChat = document.querySelectorAll(".chat-message");
    divChat.forEach((chat) => {
        chat.classList.add("background-red");
    })
} */
