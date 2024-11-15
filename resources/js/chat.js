import { HubConnectionBuilder } from "@microsoft/signalr";

const connection = new HubConnectionBuilder()
    .withUrl("https://localhost:7125/chatHub")
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

    let divChat = document.createElement("div");
    divChat.classList.add("chat-message");

    let pAuthor = document.createElement("p");
    pAuthor.classList.add("author");

    pAuthor.innerHTML = ` - ${user} <i class="bx bx-message-rounded-dots"></i>`;

    divChat.appendChild(pAuthor);

    let divChatMessage = document.createElement("div");
    divChatMessage.classList.add("chat-message-content");

    divChat.appendChild(divChatMessage);

    let pMessage = document.createElement("p");
    pMessage.classList.add("chat-message-text");
    pMessage.classList.add("text-black");
    pMessage.classList.add("p-2");

    pMessage.innerHTML = message;

    let pDate = document.createElement("p");
    pDate.classList.add("chat-date");

    pDate.innerHTML = `<i class="bx bx-stopwatch"></i> ${date}`;

    divChatMessage.appendChild(pMessage);
    divChatMessage.appendChild(pDate);

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
const handleForm = (user, nickname, message) => {
    // crio um formulário
    const formData = new FormData();

    // adiciono os campos do formulário
    formData.append("user", user);
    formData.append("nickname", nickname);
    formData.append("message", message);

    // faço uma requisição post para o servidor
    fetch("https://localhost:7125/chat/send", {
        method: "POST",
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
                handleForm(user, nickname, message);
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

    console.log(nickname);

    if (!message) {
        alert("Digite uma mensagem!");
    } else {
        handleForm(user, nickname, message);
        // chamo o método SendMessage do servidor
        connection.invoke("SendMessage", user, message).catch((err) => {
            console.log(err.toString());
        });
    }

    // limpando o campo de mensagem
    document.getElementById("messageInput").value = "";
    event.preventDefault();
});
