<?php $puntaje = $_POST['puntaje']; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fin del Juego</title>
    <style>
        body { background-color: #2c3e50; color: white; text-align: center; font-family: sans-serif; padding-top: 100px; }
        .btn { background: #e74c3c; color: white; padding: 15px 25px; text-decoration: none; border-radius: 5px; font-weight: bold; }
    </style>
</head>
<body>
    <h1>¡Te agarró el trancón!</h1>
    <h2>Lograste cruzar <?php echo $puntaje; ?> veces la troncal.</h2>
    <p><?php echo ($puntaje > 5) ? "¡Eres el Zar de la Caracas!" : "¡A estudiar más, que la calle no perdona!"; ?></p>
    <br><br>
    <a href='index.html' class='btn'>Volver al andén</a>
</body>
</html>