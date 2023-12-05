<!DOCTYPE html>
<html>
<head>
    <title>Exercício 5</title>
</head>
<body>
    <h1>Exercício 5 - Área Triângulo Retângulo</h1>

    <!-- 
      Crie um programa que calcule a área de um triângulo retângulo, cuja fórmula segue abaixo. 
      Crie as variáveis apropriadas para o cálculo em PHP e por fim exiba uma frase com o valor da operação.
      Fórmula -> Resultado = (Base * Altura) / 2
    -->

    <?php
    $base = $altura = null;
    $mensagem = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $base = filter_input(INPUT_POST, 'base', FILTER_VALIDATE_FLOAT) ?? 0;
        $altura = filter_input(INPUT_POST, 'altura', FILTER_VALIDATE_FLOAT) ?? 0;
        if (!is_numeric($base) || !is_numeric($altura)) {
            $mensagem = 'Os valores devem ser números válidos.';
        } else {
            $result = ($base * $altura) / 2;
            $mensagem = "<p>A área do triângulo retângulo de base {$base} e altura {$altura} é {$result}.</p>";
        }
    }
    ?>

    <form method="post">
        Base: <input type="text" name="base" value="<?= $base; ?>"><br>
        Altura: <input type="text" name="altura" value="<?= $altura; ?>"><br>
        <input type="submit" value="Calcular">
    </form>

    <?php 
        if(!empty($mensagem)) { 
            echo $mensagem;
        } 
    ?>
</body>
</html>