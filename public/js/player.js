const player = document.querySelector("#player");
const musicName = document.querySelector("#musicName");
const playPauseButton = document.querySelector("#playPauseButton");
const prevButton = document.querySelector("#prevButton");
const nextButton = document.querySelector("#nextButton");
const currentTime = document.querySelector("#currentTime");
const duration = document.querySelector("#duration");
const volumeControl = document.querySelector("#volumeControl");
const progressBar = document.querySelector(".progress-bar");
const progress = document.querySelector(".progress");

import songs from "./songs.js";

const textButtonPlay = "<i class='bx bx-caret-right'></i>";
const textButtonPause = "<i class='bx bx-pause'></i>";

// variável para o indice da música atual
let index = 0;

// função para voltar ou passar a música

prevButton.onclick = () => prevNextMusic("prev");
nextButton.onclick = () => prevNextMusic();

playPauseButton.onclick = () => playPause();

const playPause = () => {
    if (player.paused) {
        player.play();
        playPauseButton.innerHTML = textButtonPause;
    } else {
        player.pause();
        playPauseButton.innerHTML = textButtonPlay;
    }
};

player.ontimeupdate = () => updateTime();

// função para atualizar o tempo da música
const updateTime = () => {
    const currentMinutes = Math.floor(player.currentTime / 60);
    const currentSeconds = Math.floor(player.currentTime % 60);

    currentTime.textContent = currentMinutes + ":" + formatZero(currentSeconds);

    const durationFormatted = isNaN(player.duration) ? 0 : player.duration;

    const durationMinutes = Math.floor(durationFormatted / 60);
    const durationSeconds = Math.floor(durationFormatted % 60);

    duration.textContent = durationMinutes + ":" + formatZero(durationSeconds);

    const progressWidth = durationFormatted
        ? (player.currentTime / durationFormatted) * 100
        : 0;

    progress.style.width = progressWidth + "%";
};

// transforma n em "0n"
const formatZero = (n) => (n < 10 ? "0" + n : n);

// função para que a música vá para o ponto onde foi clicado em progress
progressBar.onclick = (e) => {
    const newTime = (e.offsetX / progressBar.offsetWidth) * player.duration;
    player.currentTime = newTime;
};

// controlando o volume
volumeControl.addEventListener("input", (event) => {
    player.volume = event.target.value;
});

const prevNextMusic = (type = "next") => {
    // se eu estiver na última música e apertar next ele retorna para o inicio
    if ((type == "next" && index + 1 === songs.length) || type === "init") {
        index = 0;
    } else if (type === "prev" && index === 0) {
        // se eu estiver na primeira música e aperta prev ele toca a última música
        index = songs.length - 1;
    } else {
        index = type === "prev" && index ? index - 1 : index + 1;
    }

    player.src = songs[index].src;
    musicName.innerHTML = songs[index].name;

    if (type !== "init") playPause();

    updateTime();
};

// troca a música se houver chegado ao final da execução
player.addEventListener("ended", () => {
    prevNextMusic("next");
});

prevNextMusic("init");
