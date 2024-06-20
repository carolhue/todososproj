<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Gorjetas</title>
    <style>
        body {
            font-family: cursive;
            background-color: cornflowerblue;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: dimgrey;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        h1 {
            color: black;
        }
        label {
            display: block;
            margin-top: 20px;
            margin-bottom: 5px;
            color: black;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"], input[type="button"] {
            background-color: black;
            color: #ccc;
            border: none;
            padding: 15px 20px;
            cursor: pointer;
            border-radius: 5px;
            width: 48%;
            font-size: 16px;
            margin: 5px 1%;
        }
        .resposta {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: brown;
        }
        .erro {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Gorjetas</h1>
        <form action="calculadora_gorjeta.php" method="POST">
            <label for="valor_conta">Valor da Conta (R$):</label>
            <input type="number" id="valor_conta" name="valor_conta" step="0.01" required>
            <label for="porcentagem_gorjeta">Porcentagem da Gorjeta (%):</label>
            <input type="number" id="porcentagem_gorjeta" name="porcentagem_gorjeta" required>
            <input type="submit" value="Calcular">
            <input type="button" value="Limpar" onclick="location.reload()">
        </form>
        <div class="resposta">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['valor_conta']) && isset($_POST['porcentagem_gorjeta'])) {
                    $valor_conta = $_POST['valor_conta'];
                    $porcentagem_gorjeta = $_POST['porcentagem_gorjeta'];
                    if ($valor_conta > 0 && $porcentagem_gorjeta >= 0) {
                        $gorjeta = ($valor_conta * $porcentagem_gorjeta) / 100;
                        $total = $valor_conta + $gorjeta;
                        echo "Valor da Conta: R$ " . number_format($valor_conta, 2, ',', '.') . "<br>";
                        echo "Gorjeta: R$ " . number_format($gorjeta, 2, ',', '.') . "<br>";
                        echo "Total a Pagar: R$ " . number_format($total, 2, ',', '.');
                    } else {
                        echo "<span class='erro'>Por favor, insira valores válidos.</span>";
                    }
                } else {
                    echo "<span class='erro'>Formulário não enviado corretamente.</span>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
