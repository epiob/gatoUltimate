<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="shortcut icon" href="favicon.ico" />
    <title>Agente Gato Ultimate</title>
</head>
<body style="background-color:#21222c;">>
<center>

<div class="relative">
    <canvas id="myCanvas" width="800" height="850">
        Su navegador no soporta el elmento de canvas.
    </canvas>

    <div class="absolute" id="startMenu">
        <p class="centeredbig">Agente Gato Ultimate</p>
        <p class="centered" onclick="pickTurns()"><button>1 Jugador</button></p>
        <p class="centered" onclick="startGame(1)"><button>2 Jugadores</button></p>
    </div>
    <div class="absolute" id="turnMenu" hidden="hidden">
        <p class="centeredbig">Agente Gato Ultimate</p>
        <p class="centered" onclick="setGame(0)"><button>Jugador Primero</button></p>
        <p class="centered" onclick="setGame(1)"><button>Agente Primero</button></p>
    </div>
    <div class="absolute" id="winMenu" hidden="hidden">
        <p class="centeredbig" id="result">Jugador 1 Gano!</p>
        <p class="centered" onclick="menu()"><button>Volver a Jugar</button></p>
    </div>
    <div class="absolute fade" id="loader" hidden>
        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
    </div>
</div>
</center>

