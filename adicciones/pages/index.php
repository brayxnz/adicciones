<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" href="../imgs/mx.ico" type="image/x-icon">
    <link rel="stylesheet" href="../indexCSS.css">
</head>
<style>
    #back{
        display: none;
    }
</style>
<?php
include '../include/menu.html';
?>
<body>
    <div class="titulo">
        <h1 class="titulo">Orientaciones para Madres, Padres <br>y Familias</h1>
        <hr>
    </div>
    <div class="pre-cont">
        <h2>Esta guía brinda información sobre qué son las drogas, con el fin de prevenir y detectar el inicio del consumo.</h2>
        <div class="separator"></div>
        <img src="../imgs/orientaciones_-removebg-preview.png" alt="logo" style="width: 40%;"/>
    </div>
    <div class="cont">
        <div>
            <h1>¿Qué son las adicciones?</h1>
            <p>El fentanilo es un opioide sintético extremadamente potente, utilizado en medicina para aliviar el dolor intenso en pacientes con cáncer terminal o después de cirugías mayores.</p>
            <a href="definicion.php">
                <button class="btn">Leer más</button>
            </a>
        </div>
        <div>
            <h1>Efectos</h1>
            <p>El fentanilo actúa rápidamente sobre el sistema nervioso central, provocando efectos intensos y peligrosos incluso en dosis mínimas. Su consumo genera relajación profunda, pérdida de conciencia y puede provocar la muerte en cuestión de minutos.</p> 
            <a href="efectos.php">
                <button class="btn">Leer más</button>
            </a>
        </div>
        <div>
            <h1>Consecuencias</h1>
            <p>El consumo de fentanilo puede tener consecuencias físicas y psicológicas devastadoras. Esta sustancia afecta los órganos vitales y la salud mental, deteriorando gravemente la calidad de vida del consumidor y su entorno familiar.</p>
            <a href="consecuencias.php">
                <button class="btn">Leer más</button>
            </a> 
        </div>
        <div>
            <h1>Señales de alerta</h1>
            <p>Identificar a tiempo las señales de alerta puede marcar la diferencia entre la prevención y una tragedia. Estas señales se presentan de forma progresiva y varían según la etapa del consumo: desde síntomas leves hasta conductas graves y desorientación.</p>
            <a href="sintomas.php">
                <button class="btn">Leer más</button>
            </a>
        </div>
        <div class="ultima">
            <h1>Fuentes</h1>
            <p>Fuente de información: </p>
            <a href="../src/Guia_Orientaciones.pdf">
                <button class="btn">Descargar</button>
            </a>
        </div>
    </div>
</body>
</html>
<?php
include '../footer.html';
?>