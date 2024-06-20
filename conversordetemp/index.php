<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: black;
            color: #ccc;
            border: none;
            padding: 15px 20px;
            cursor: pointer;
            border-radius: 5px;
            width: 50%;
            font-size: 16px;
        }
        .resposta {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: brown;
            color: white;
        }
        .erro {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Conversor de Temperatura</h1>
        <form action="conversor.php" method="POST">
            <label for="temperatura">Temperatura:</label>
            <input type="number" id="temperatura" name="temperatura" step="0.1" required>
            <label for="conversao">Converter para:</label>
            <select id="conversao" name="conversao" required>
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
            </select>
            <input type="submit" value="Converter">
        </form>
        <div class="resposta">
            <?php
            if (isset($_GET['resultado'])) {
                echo htmlspecialchars($_GET['resultado']);
            }
            ?>
        </div>
    </div>
</body>
</html>
