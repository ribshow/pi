<link href={{asset('css/player.css')}} rel="stylesheet" />
<div class="player">
        <div class="logo-player">
            <span id="musicName"></span>
            <i class="bx bx-music"></i>
        </div>
        <audio id="player" src="" controls></audio>
        <div class="controls">
            <button id="prevButton"><i class="bx bx-skip-previous"></i></button>
            <button id="playPauseButton"><i class="bx bx-caret-right"></i></button>
            <button id="nextButton"><i class="bx bx-skip-next"></i></button>
        </div>
        <div class="footer-player">
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
            <div class="time">
                <span id="currentTime">0:00</span>
                <input id="volumeControl" type="range" min="0" max="1" step="0.01" value="0.7" />
                <span id="duration">0:00</span>
            </div>
        </div>
    </div>

    <script type="module" src="{{ asset('js/player.js')}} "></script>