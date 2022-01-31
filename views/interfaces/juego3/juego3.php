<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        
        <div class="tetriscont">
        <hl class="tetrisTittle">TETRIS</hl>
       
        <audio id="clearsound" src="sound/pop.ogg" preload="auto"></audio>
        <canvas class="tetris" width='300' height='600'></canvas>
        <div class="button1">
            <button type="button" onclick="playButtonClicked();"><span></span>Play</button>
        </div>
        <script src='js/tetris.js'></script>
        <script src='js/controller.js'></script>
        <script src='js/render.js'></script>
        </div>
    </body>
</html>
