<?php
session_start();

if (!isset($_SESSION['finished']) || !$_SESSION['finished']) {
    header("Location: index.php");
    exit;
}

$secret = $_SESSION['secret'];
$won = $_SESSION['won'];
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Resultado del juego</title>
</head>
<body>

    <h2>Resultado de la partida</h2>

    <?php if ($won): ?>
        <h3>¡Has ganado! El número era <?= htmlspecialchars($secret) ?>.</h3>
    <?php else: ?>
        <h3>¡Has perdido! El número era <?= htmlspecialchars($secret) ?>.</h3>
    <?php endif; ?>

    <a href="index.php?reset=1">Jugar otra vez</a>

</body>
</html>