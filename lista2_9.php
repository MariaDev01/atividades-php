<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Aqui estão nossos itens de estoque</h2>

<?php

$produtos = array(
    "bolsa" => 250.00,
    "short" => 400.00,
    "sandalia" => 15.99,
    "pulseira" => 1000.0,
);

echo "Lista de Produtos:<br>";


foreach ($produtos as $produto => $preco) {
    $precoFormatado = "R$ " . number_format($preco, 2, ',', '.');

    echo "Produto: '$produto', Preço: '$precoFormatado'<br>";
}
?>


</body>
</html>