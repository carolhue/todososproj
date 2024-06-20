<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Áreas</title>
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
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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
            border-radius: 500px;
            width: 50%;
            font-size: 16px;
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
        <h1>Calculadora de Áreas</h1>
        <form action="calculadora.php" method="POST">
            <label for="forma">Escolha a forma:</label>
            <select id="forma" name="forma" required>
                <option value="retangulo">Retângulo</option>
                <option value="triangulo">Triângulo</option>
                <option value="circulo">Círculo</option>
            </select>
            <label for="largura">Largura (para Retângulo):</label>
            <input type="number" id="largura" name="largura" step="0.1">
            <label for="altura">Altura (para Retângulo):</label>
            <input type="number" id="altura" name="altura" step="0.1">
            <label for="base">Base (para Triângulo):</label>
            <input type="number" id="base" name="base" step="0.1">
            <label for="altura_triangulo">Altura (para Triângulo):</label>
            <input type="number" id="altura_triangulo" name="altura_triangulo" step="0.1">
            <label for="raio">Raio (para Círculo):</label>
            <input type="number" id="raio" name="raio" step="0.1">
            <input type="submit" value="Calcular">
        </form>
    </div>
</body>
</html>
