<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Bilhetagem Eletrônica</title>
</head>
<body>
    <h1>Cálculo de Valor da Passagem</h1>

    <form method="post" action=""> 
        <label for="valor">Informe o valor da passagem:</label><br>
        <input type="text" id="valor" name="valor" required><br><br>
        <label for="idade">Informe sua idade:</label><br>
        <input type="text" id="idade" name="idade" required><br><br>
        <label for="categoria">Selecione a categoria:</label><br>
        <select name="categoria" id="categoria" required>
            <option value="estudante">Estudante</option>
            <option value="idoso">Idoso</option>
            <option value="outros">Outros</option>
        </select><br><br>
        <input type="submit" value="Calcular Valor da Passagem">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtendo o valor, idade e categoria do formulário
        $valor = $_POST["valor"];
        $idade = $_POST["idade"];
        $categoria = $_POST["categoria"];

        // Função para calcular o valor da passagem com base na idade e categoria
        function calcularValorPassagem($valor, $idade, $categoria) {
            if ($categoria == "estudante") {
                // Estudantes (menores de 18 anos) têm desconto de 50%
                if ($idade < 18) {
                    $valor = $valor * 0.5;
                }
            } elseif ($categoria == "idoso") {
                // Idosos (60 anos ou mais) têm desconto de 40%
                if ($idade >= 60) {
                    $valor = $valor * 0.6;
                }
            }

            return $valor;
        }

        // Chamando a função para calcular o valor da passagem
        $valorFinalPassagem = calcularValorPassagem($valor, $idade, $categoria);

        // Exibindo o resultado
        echo "<h3>Resultado:</h3>";
        echo "Valor da Passagem: R$ " . number_format($valor, 2, ',', '.') . "<br>"; // Valor inicial da passagem
        echo "Idade: " . $idade . " anos<br>";
        echo "Categoria: " . ucfirst($categoria) . "<br>";
        echo "Desconto Aplicado: " . number_format((1 - ($valorFinalPassagem / $valor)) * 100, 2, ',', '.') . "%<br>"; // Porcentagem de desconto aplicado
        echo "Valor a Pagar: R$ " . number_format($valorFinalPassagem, 2, ',', '.') . "<br>"; // Valor final da passagem com desconto
    }
    ?>
</body>
</html>
