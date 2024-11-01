import { HubConnectionBuilder } from "@microsoft/signalr";

const connection = new HubConnectionBuilder()
    .withUrl("https://localhost:7125/chatHub")
    .build();

// desabilita o botão até que a conexão seja estabelecida
document.getElementById("sendButton").disabled = true;

const buttonEl = document.querySelector(".btn-form");

buttonEl.disabled = true;

// função para manter o foco sempre no rodapé da div de mensagem
const scrollToBottom = () => {
    const chatBox = document.querySelector(".chat-box");
    chatBox.scrollTop = chatBox.scrollHeight;
};

connection.on("ReceiveMessage", (user, message) => {
    let date = new Date().toLocaleString();

    let divChat = document.createElement("div");
    divChat.classList.add("chat-message");

    let pAuthor = document.createElement("p");
    pAuthor.classList.add("author");

    pAuthor.innerHTML = user;

    divChat.appendChild(pAuthor);

    let divChatMessage = document.createElement("div");
    divChatMessage.classList.add("chat-message-content");

    divChat.appendChild(divChatMessage);

    let pMessage = document.createElement("p");
    pMessage.classList.add("chat-message-text");

    pMessage.innerHTML = message;

    let pDate = document.createElement("p");
    pDate.classList.add("chat-date");

    pDate.innerHTML = date;

    divChatMessage.appendChild(pMessage);
    divChatMessage.appendChild(pDate);

    document
        .querySelector(".chat-box")
        .appendChild(divChat, divChatMessage, pAuthor, pMessage, pDate);

    scrollToBottom();
});

connection
    .start()
    .then(() => {
        document.getElementById("sendButton").disabled = false;
    })
    .catch((err) => {
        return console.error(err.toString());
    });

document.getElementById("sendButton").addEventListener("click", (event) => {
    var user = document.getElementById("userInput").value;
    var message = document.getElementById("messageInput").value;

    try {
        connection.invoke("SendMessage", user, message).catch((err) => {
            console.log(err.toString());
        });
    } catch (err) {
        console.log(err);
    }
    // limpando o campo de mensagem
    document.getElementById("messageInput").value = "";
    event.preventDefault();
});
