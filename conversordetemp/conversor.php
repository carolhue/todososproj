<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['temperatura']) && isset($_POST['conversao'])) {
        $temperatura = $_POST['temperatura'];
        $conversao = $_POST['conversao'];
        
        if (!is_numeric($temperatura)) {
            $erro = "Por favor, insira um valor válido para a temperatura.";
            header("Location: index.php?resultado=" . urlencode("<span class='erro'>$erro</span>"));
            exit();
        }

        if ($conversao == "celsius") {
            $resultado = ($temperatura - 32) * 5 / 9;
            $resultado = number_format($resultado, 2) . " °C";
        } else if ($conversao == "fahrenheit") {
            $resultado = ($temperatura * 9 / 5) + 32;
            $resultado = number_format($resultado, 2) . " °F";
        } else {
            $erro = "Por favor, selecione uma conversão válida.";
            header("Location: index.php?resultado=" . urlencode("<span class='erro'>$erro</span>"));
            exit();
        }
        
        header("Location: index.php?resultado=" . urlencode("Resultado: $resultado"));
        exit();
    } else {
        $erro = "Todos os campos são obrigatórios.";
        header("Location: index.php?resultado=" . urlencode("<span class='erro'>$erro</span>"));
        exit();
    }
} else {
    $erro = "Formulário não enviado corretamente.";
    header("Location: index.php?resultado=" . urlencode("<span class='erro'>$erro</span>"));
    exit();
}
?>

