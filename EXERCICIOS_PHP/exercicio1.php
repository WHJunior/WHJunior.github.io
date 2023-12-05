<!DOCTYPE html>
<html>
<head>
    <title>Exercício 1</title>
</head>
<body>
    <h1>Exercício 1 - Soma</h1>

    <!-- 
      Criar um programa que execute a soma de três valores.
        Se a primeira variável for maior que 10, escrever o resultado da operação em azul
        Se a segunda variável for menor que a terceira, escrever o resultado em verde
        Se a terceira variável for menor que a primeira e a segunda variável escrever o resultado em vermelho 
    -->

    <?php
    $valor1 = $valor2 = $valor3 = $soma = null;
    $mensagem = '';
    $cor = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $valor1 = filter_input(INPUT_POST, 'valor1', FILTER_VALIDATE_FLOAT) ?? 0;
        $valor2 = filter_input(INPUT_POST, 'valor2', FILTER_VALIDATE_FLOAT) ?? 0;
        $valor3 = filter_input(INPUT_POST, 'valor3', FILTER_VALIDATE_FLOAT) ?? 0;
        if (!is_numeric($valor1) || !is_numeric($valor2) || !is_numeric($valor3)) {
            $mensagem = 'Os valores devem ser números válidos.';
        } else {
            $soma = $valor1 + $valor2 + $valor3;
            if ($valor1 > 10) {
                $cor = 'blue';
            } elseif ($valor2 < $valor3) {
                $cor = 'green';
            } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
                $cor = 'red';
            }
            $mensagem = 'A soma dos valores é: ' . $soma;
        }
    }
    ?>

    <form method="post">
        Valor 1: <input type="text" name="valor1" value="<?= $valor1; ?>"><br>
        Valor 2: <input type="text" name="valor2" value="<?= $valor2; ?>"><br>
        Valor 3: <input type="text" name="valor3" value="<?= $valor3; ?>"><br>
        <input type="submit" value="Calcular Soma">
    </form>

    <?php if (!empty($mensagem)) { ?>
        <p style="color: <?= $cor; ?>"><?= $mensagem; ?></p>
    <?php } ?>
</body>
</html>