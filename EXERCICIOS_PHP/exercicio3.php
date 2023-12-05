<!DOCTYPE html>
<html>
<head>
    <title>Exercício 3</title>
</head>
<body>
    <h1>Exercício 3 - Área Quadrado</h1>

    <!-- 
      Crie um programa que calcule a área de um quadrado. Você deve configurar uma variável que representa o 
      comprimento dos lados de um quadrado em metros. Após o cálculo escrever uma frase com o resultado da operação, 
      exemplo: “A área do quadrado de lado 3 metros é 9 metros quadrados”
    -->

    <?php
    $comprimento = null;
    $mensagem = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $comprimento = filter_input(INPUT_POST, 'comprimento', FILTER_VALIDATE_FLOAT) ?? 0;
        if (!is_numeric($comprimento)) {
            $mensagem = 'O comprimento deve ser um número válido.';
        } else {
            $mensagem = "A área do quadrado de lado " . $comprimento . " metros é " . $comprimento * $comprimento . " metros quadrados";
        }
        $mensagem = "<p>{$mensagem}</p>";
    }
    ?>

    <form method="post">
        Comprimento: <input type="text" name="comprimento" value="<?= $comprimento; ?>">
        <input type="submit" value="Calcular">
    </form>

    <?php 
        if (!empty($mensagem)) {
            echo $mensagem;
        } 
    ?>
</body>
</html>