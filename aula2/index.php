<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
    <style>
        body {
            font-family:cursive;
            background-color:black;
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
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #01579b;
            color: white;
            border: none;
            padding: 15px 20px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #013a63;
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
    </div>
</body>
</html>

