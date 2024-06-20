<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Gorjetas</title>
    <style>
        body {
            font-family: cursive;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        h1 {
            color: #01579b;
        }
        label {
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
            color: #01579b;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"], input[type="button"] {
            background-color: #01579b;
            color: white;
            border: none;
            padding: 15px 20px;
            cursor: pointer;
            border-radius: 5px;
            width: 48%;
            font-size: 16px;
            margin: 5px 1%;
        }
        input[type="submit"]:hover, input[type="button"]:hover {
            background-color: #013a63;
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
    </div>
</body>
</html>
