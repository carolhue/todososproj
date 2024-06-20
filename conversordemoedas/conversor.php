<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
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
        input[type="number"], select {
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
        <h1>Conversor de Moedas</h1>
        <form action="conversor.php" method="POST">
            <label for="valor">Valor:</label>
            <input type="number" id="valor" name="valor" step="0.01" required>
            <label for="de">Converter de:</label>
            <select id="de" name="de" required>
                <option value="BRL">BRL</option>
                <option value="EUR">EUR</option>
                <option value="USD">USD</option>
            </select>
            <label for="para">Converter para:</label>
            <select id="para" name="para" required>
                <option value="BRL">BRL</option>
                <option value="EUR">EUR</option>
                <option value="USD">USD</option>
            </select>
            <input type="submit" value="Converter">
        </form>
        <div class="resposta">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $valor = $_POST['valor'];
                $de = $_POST['de'];
                $para = $_POST['para'];


                $taxas = [
                    "BRL" => ["BRL" => 1, "EUR" => 0.18, "USD" => 0.20],
                    "EUR" => ["BRL" => 5.5, "EUR" => 1, "USD" => 1.1],
                    "USD" => ["BRL" => 5, "EUR" => 0.9, "USD" => 1],
                ];


                if ($de == $para) {
                    echo "<span class='erro'>As moedas de origem e destino devem ser diferentes.</span>";
                } else {
                    $resultado = $valor * $taxas[$de][$para];
                    $resultado = number_format($resultado, 2);
                    echo "Valor convertido: $resultado $para";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>


