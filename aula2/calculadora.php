<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
    <style>
        body {
            font-family:cursive;
            background-color:cornflowerblue;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 40;
        }
        .container {
            background-color:dimgrey;
            padding: 50px;
            border-radius: 10px;
            box-shadow:0ch;
            max-width: 400px;
            width: 100%;
            text-align:center;
        }
        h1 {
            color:black;
        }
        label {
            display: block;
            margin-top: 20px;
            margin-bottom: 5px;
            color:black;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color:black;
            color:#ccc;
            border: none;
            padding: 15px 20px;
            cursor: pointer;
            border-radius: 500px;
            width: 50%;
            font-size: 16px;
        }
        .resposta {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color:brown;
        }
        .erro {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora IMC</h1>
        <form action="calculadora.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="ano_nascimento">Ano de nascimento:</label>
            <input type="number" id="ano_nascimento" name="ano_nascimento" required>
            <label for="peso">Peso (kg):</label>
            <input type="number" id="peso" name="peso" step="0.1" required>
            <label for="altura">Altura (m):</label>
            <input type="number" id="altura" name="altura" step="0.1" required>
            <input type="submit" value="Calcular">
        </form>
        <div class="resposta">
            <?php
            $ano_atual = date("Y");
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['nome']) && isset($_POST['ano_nascimento']) && isset($_POST['peso']) && isset($_POST['altura'])) {
                    $nome = $_POST['nome'];
                    $ano_nascimento = $_POST['ano_nascimento'];
                    $peso = $_POST['peso'];
                    $altura = $_POST['altura'];

                    $idade = $ano_atual - $ano_nascimento;

                    $erro = empty($nome) || empty($ano_nascimento) || empty($peso) || empty($altura) ? "Todos os campos são obrigatórios." : ((!is_numeric($altura) || $peso <= 0 || $altura <= 0 || $ano_nascimento >= $ano_atual) ? "Por favor, insira valores válidos para peso, altura e ano de nascimento." : "");

                    if ($erro) {
                        echo "<span class='erro'>$erro</span>";
                    } else {
                        $imc = $peso / ($altura * $altura);
                        $imc = number_format($imc, 2);
                        $classificacao = ($imc < 18.5) ? "Abaixo do peso" : (($imc < 24.9) ? "Peso normal" : (($imc < 29.9) ? "Sobrepeso" : "Obesidade"));

                        echo "Nome: $nome <br>";
                        echo "Idade: $idade <br>";
                        echo "IMC: $imc <br>";
                        echo "Classificação: $classificacao";
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

