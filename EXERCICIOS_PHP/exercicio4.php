<!DOCTYPE html>
<html>
<head>
    <title>Exercício 4</title>
</head>
<body>
    <h1>Exercício 4 - Área Retângulo</h1>

    <!-- 
      Crie um programa que calcule a área de um retângulo. Você deve configurar duas variáveis que representam os 
      lados a e b desse quadrado em metros. Após o cálculo escrever uma frase com o resultado da operação, 
      exemplo: “A área do retângulo de lados 3 e 2 metros é 6 metros quadrados.” Caso a área for maior que 10 
      escreva a frase usando a tag h1, se não, escrever com h3.
    -->

    <?php
    $ladoA = $ladoB = null;
    $mensagem = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ladoA = filter_input(INPUT_POST, 'ladoA', FILTER_VALIDATE_FLOAT) ?? 0;
        $ladoB = filter_input(INPUT_POST, 'ladoB', FILTER_VALIDATE_FLOAT) ?? 0;
        if (!is_numeric($ladoA) || !is_numeric($ladoB)) {
            $mensagem = 'Os valores devem ser números válidos.';
        } else {
            $area = $ladoA * $ladoB;
            $mensagem = "A área do retângulo de lados {$ladoA} e {$ladoB} metros é {$area} metros quadrados.";
            if ($area > 10) {
                $mensagem = "<h1>{$mensagem}</h1>";
            } else {
                $mensagem = "<h3>{$mensagem}</h3>";
            }
        }
    }
    ?>

    <form method="post">
        Lado A: <input type="text" name="ladoA" value="<?= $ladoA; ?>"><br>
        Lado B: <input type="text" name="ladoB" value="<?= $ladoB; ?>"><br>
        <input type="submit" value="Calcular">
    </form>

    <?php 
        if(!empty($mensagem)) { 
            echo $mensagem;
        } 
    ?>
</body>
</html>