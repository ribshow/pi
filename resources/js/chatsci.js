import { HubConnectionBuilder } from "@microsoft/signalr";

const token = document.getElementById("token").value;

const connection = new HubConnectionBuilder()
    .withUrl("https://localhost:7125/chatHubSci", {
        accessTokenFactory: () => token,
    })
    .build();

// desabilita o botão até que a conexão seja estabelecida
document.getElementById("sendButton").disabled = true;

// função para manter o foco sempre no rodapé da div de mensagem
const scrollToBottom = () => {
    const chatBox = document.querySelector(".chat-box");
    chatBox.scrollTop = chatBox.scrollHeight;
};

// função para montar o corpo da mensagem
const messageBody = (user, message) => {
    let date = new Date().toLocaleString();

    // criando a div que conterá todos os elementos
    let divChat = document.createElement("div");
    divChat.classList.add("chat-message");

    // criando o parágrafo que conterá o autor
    let pAuthor = document.createElement("p");
    pAuthor.classList.add("author");
    pAuthor.classList.add("text-black");

    pAuthor.innerHTML = ` - ${user} <i class="bx bx-message-rounded-dots"></i>`;

    divChat.appendChild(pAuthor);

    // criando a div que receberá mensagem e data
    let divChatMessage = document.createElement("div");
    divChatMessage.classList.add("chat-message-content");

    divChat.appendChild(divChatMessage);

    let pMessage = document.createElement("p");
    pMessage.classList.add("chat-message-text");
    pMessage.classList.add("p-2");
    pMessage.style.color = "green";

    pMessage.innerHTML = message;

    let pDate = document.createElement("p");
    pDate.classList.add("chat-date");
    pDate.classList.add("text-black");

    pDate.innerHTML = `<i class="bx bx-stopwatch"></i> ${date}`;

    divChatMessage.appendChild(pMessage);
    divChatMessage.appendChild(pDate);

    // adicionando ao document
    document
        .querySelector(".chat-box")
        .appendChild(divChat, divChatMessage, pAuthor, pMessage, pDate);
};

// atualizando dinamicamente o chat com as mensagens
connection.on("ReceiveMessage", (user, message) => {
    messageBody(user, message);
    scrollToBottom();
});

connection
    .start()
    .then(() => {
        document.getElementById("sendButton").disabled = false;
    })
    .catch((err) => {
        const listElement = document.createElement("li");
        const divElement = document.getElementById("messagesList");

        listElement.innerHTML = `Erro de conexão: ${err.toString()}`;

        divElement.appendChild(listElement);
        console.log(divElement);
        return console.error(err.toString());
    });

// função que cria o formulário e salva no banco de dados
const handleForm = (user, nickname, message, token) => {
    // crio um formulário
    const formData = new FormData();

    // adiciono os campos do formulário
    formData.append("user", user);
    formData.append("nickname", nickname);
    formData.append("message", message);

    var bearer = "Bearer " + token;
    // faço uma requisição post para o servidor
    fetch("https://localhost:7125/chatsci/send", {
        method: "POST",
        headers: {
            Authorization: bearer,
        },
        body: formData,
    }) // pego a resposta da requisição
        .then((response) => {
            if (response.ok) {
                console.log("Mensagem enviada com sucesso!");
                return response.json();
            }
            return console.error("Erro ao enviar mensage!");
        })
        .catch((err) => {
            console.log(err.toString());
        });
};

// enviando a mensagem apertando enter
document
    .getElementById("messageInput")
    .addEventListener("keypress", (event) => {
        if (event.key === "Enter") {
            var user = document.getElementById("userInput").value;
            var nickname = document.getElementById("nickname").value;
            var message = document.getElementById("messageInput").value;

            if (!message) {
                alert("Digite uma mensagem!");
            } else {
                handleForm(user, nickname, message, token);
                // chamo o método SendMessage do servidor
                connection.invoke("SendMessage", user, message).catch((err) => {
                    console.log(err.toString());
                });
            }

            // limpando o campo de mensagem
            document.getElementById("messageInput").value = "";
            event.preventDefault();
        }
    });

// enviando a mensagem clicando no botão
document.getElementById("sendButton").addEventListener("click", (event) => {
    var user = document.getElementById("userInput").value;
    var nickname = document.getElementById("nickname").value;
    var message = document.getElementById("messageInput").value;

    if (!message) {
        alert("Digite uma mensagem!");
    } else {
        handleForm(user, nickname, message, token);
        // chamo o método SendMessage do servidor
        connection.invoke("SendMessage", user, message).catch((err) => {
            console.log(err.toString());
        });
    }

    // limpando o campo de mensagem
    document.getElementById("messageInput").value = "";
    event.preventDefault();
});

// função para marcar mensagem como denunciada usando event delegate
export const reportMsg = (button) => {
    const formData = new FormData();

    const token = document.getElementById("token").value;

    // cada botão possuí um identificador único atrelado ao id da mensagem
    const chatId = button.getAttribute("data-chat-id");

    const origin = "ChatSci";

    formData.append("origin", origin);
    formData.append("id", chatId);

    var bearer = "Bearer " + token;

    fetch(`https://localhost:7125/report/chathub`, {
        method: "POST",
        headers: {
            Authorization: bearer,
        },
        body: formData,
    })
        .then((response) => {
            if (response.ok) {
                alert("Report enviado com sucesso!");
                return response.json();
            }
            return console.error("Erro ao reportar mensagem!");
        })
        .catch((error) => {
            console.log(error.toString());
        });
};

// delegação de eventos, ele passa para a função reportMsg qual botão foi clicado
document.addEventListener("click", (e) => {
    if (e.target && e.target.matches("#btn-report")) {
        e.preventDefault();
        reportMsg(e.target);
    }
});
