<?php
$num1 = isset($_POST['num1']) ? (float) $_POST['num1'] : 0;
$num2 = isset($_POST['num2']) ? (float) $_POST['num2'] : 0;
$op   = $_POST['op'] ?? '';

switch ($op) {
    case 'multiplicacion':
        $resultado = $num1 * $num2;
        break;
    case 'division':
        $resultado = ($num2 == 0) ? 'Error: no se puede dividir entre 0' : $num1 / $num2;
        break;
    default:
        $resultado = 'Operación no válida';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Calculadora</h1>
  <p class="resultado">Resultado: <?= htmlspecialchars((string) $resultado) ?></p>
  <a href="index.html">Volver</a>
</body>
</html>
