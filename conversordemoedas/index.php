<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
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
        input[type="number"], select {
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
    </div>
</body>
</html>




