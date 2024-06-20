<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Calculadora de Áreas</title>
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
        <h1>Resultado da Calculadora de Áreas</h1>
        <div class="resposta">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $forma = $_POST['forma'];
                $largura = $_POST['largura'];
                $altura = $_POST['altura'];
                $base = $_POST['base'];
                $altura_triangulo = $_POST['altura_triangulo'];
                $raio = $_POST['raio'];
                $erro = "";

                switch ($forma) {
                    case 'retangulo':
                        if ($largura && $altura) {
                            $area = $largura * $altura;
                            echo "Área do Retângulo: " . $area . " unidades quadradas.";
                        } else {
                            $erro = "Por favor, insira a largura e a altura para calcular a área do retângulo.";
                        }
                        break;
                    case 'triangulo':
                        if ($base && $altura_triangulo) {
                            $area = ($base * $altura_triangulo) / 2;
                            echo "Área do Triângulo: " . $area . " unidades quadradas.";
                        } else {
                            $erro = "Por favor, insira a base e a altura para calcular a área do triângulo.";
                        }
                        break;
                    case 'circulo':
                        if ($raio) {
                            $area = pi() * pow($raio, 2);
                            echo "Área do Círculo: " . $area . " unidades quadradas.";
                        } else {
                            $erro = "Por favor, insira o raio para calcular a área do círculo.";
                        }
                        break;
                    default:
                        $erro = "Forma inválida.";
                        break;
                }

                if ($erro) {
                    echo "<span class='erro'>$erro</span>";
                }
            } else {
                echo "<span class='erro'>Formulário não enviado corretamente.</span>";
            }
            ?>
        </div>
    </div>
</body>
</html>
