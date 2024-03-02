<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2> Ao atingir o número 20 , com while e Break, o sistema para: </h2>
<?php
$contador = 1;

while ($contador <= 100) {
    echo $contador . "<br>";

    // vê se o contador atingiu o valor 20
    if ($contador == 20) {
        echo "Interrupção no número 20.<br>";
        break; // sai do loop quando atinge o valor 20
    }

    $contador++; // incrementa um número

echo "Loop encerrado.";

}

?>

</body>
</html>