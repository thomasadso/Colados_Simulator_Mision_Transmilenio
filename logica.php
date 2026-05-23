<?php
$puntaje = $_POST['puntaje'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Operativo</title>
    <style>
        body { background-color: #222; color: white; text-align: center; font-family: sans-serif; padding-top: 50px; }
        h1 { color: #ff4444; }
        .btn { background: #ff4444; color: white; padding: 15px 25px; text-decoration: none; border-radius: 5px; font-weight: bold; }
        .btn:hover { background: #cc0000; }
        .rango { font-size: 24px; color: #ffcc00; }
    </style>
</head>
<body>
    <h1>Operativo de Evasión Finalizado</h1>
    <h2>Lograste colarte <?php echo $puntaje; ?> veces.</h2>
    
    <div class="rango">
        <?php
        if ($puntaje == 0) {
            echo "<p>Nivel: <b>Turista desubicado</b>. Ni pasaste el torniquete y ya te agarraron.</p>";
        } elseif ($puntaje > 0 && $puntaje < 5) {
            echo "<p>Nivel: <b>Estudiante promedio</b>. Aguantaste, pero la Caracas no perdona.</p>";
        } else {
            echo "<p>Nivel: <b>Zar de las troncales</b>. Eres una leyenda urbana, los tombos te temen.</p>";
        }
        ?>
    </div>
    
    <br><br><br>
    <a href='index.html' class='btn'>Volver a la estación</a>
</body>
</html>