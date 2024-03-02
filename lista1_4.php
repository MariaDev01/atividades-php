<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Imposto de renda</title>
</head>
<body>
    <h1>Cálculo de imposto de renda:</h1>

    <form method="post" action=""> 
        <label for="salario">Informe seu salário Mensal:</label><br>
        <input type="text" id="salario" name="salario" required><br><br>
        <input type="submit" value="Calcular Imposto">
    </form>

    <?php

    // no intem acima foi feito que o usuário inserisse o valor do salário mensal (form)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtendo o salário do formulário
        $salario = $_POST["salario"];

        // Função para calcular o imposto com base no salário anual
        function calcularImposto($salario) {
            $anual = $salario * 12; // Calculando o salário anual

            if ($anual <= 22847.76) {
                $imposto = 0;
            } elseif ($anual <= 33919.80) {
                $imposto = ($anual * 0.075) - 1713.58;
            } elseif ($anual <= 45012.60) {
                $imposto = ($anual * 0.15) - 4257.57;
            } elseif ($anual <= 55976.16) {
                $imposto = ($anual * 0.225) - 7633.51;
            } else {
                $imposto = ($anual * 0.275) - 10432.32;
            }

            return $imposto;
        }

        // Chamando a função para calcular o imposto
        $imposto_a_pagar = calcularImposto($salario);

        // Exibindo o resultado
        echo "<h3>Resultado:</h3>";
        echo "Salário Mensal: R$ " . number_format($salario, 2, ',', '.') . "<br>";
        echo "Salário Anual: R$ " . number_format($salario * 12, 2, ',', '.') . "<br>"; // Exibindo o salário anual
        echo "Imposto a Pagar: R$ " . number_format($imposto_a_pagar, 2, ',', '.') . "<br>";
    }
    ?>


</body>
</html>
