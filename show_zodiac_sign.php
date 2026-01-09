<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<h1>Resultado do Signo</h1>

<div class="card">
<?php

$data = $_POST['data'];

$dia = date('d', strtotime($data));
$mes = date('m', strtotime($data));

$xml = simplexml_load_file(__DIR__ . "/signos.xml");

foreach ($xml->sign as $signo) {

    if ($mes == $signo->startMonth && $dia >= $signo->startDay) {
        echo "<h2>".$signo->name."</h2>";
        echo "<p>".$signo->description."</p>";
    }

    if ($mes == $signo->endMonth && $dia <= $signo->endDay) {
        echo "<h2>".$signo->name."</h2>";
        echo "<p>".$signo->description."</p>";
    }
}

?>
<br>
<a href="index.php">Voltar</a>
</div>

</body>
</html>
