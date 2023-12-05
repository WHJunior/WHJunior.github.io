<!DOCTYPE html>
<html>
<head>
    <title>Exercício 2</title>
</head>
<body>
    <h1>Exercício 2 - Número Divisível por 2</h1>

    <!-- 
      Crie um programa para testar se um número é divisível por 2.
        Caso for verdade escrever a frase “Valor divisível por 2”
        Caso for falso escrever a frase “O valor não é divisível por 2”
    -->

    <?php
    $valor = null;
    $mensagem = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $valor = filter_input(INPUT_POST, 'valor', FILTER_VALIDATE_INT) ?? 0;
        if (!is_numeric($valor)) {
            $mensagem = 'O valor deve ser um número válido.';
        } else {
            if ($valor % 2 == 0) {
              $mensagem = 'Valor divisível por 2';
            } else {
              $mensagem = 'O valor não é divisível por 2';
            }
            $mensagem = "<p>{$mensagem}</p>";
        }
    }
    ?>

    <form method="post">
        Valor: <input type="number" name="valor" value="<?= $valor; ?>">
        <input type="submit" value="Verificar">
    </form>

    <?php 
        if (!empty($mensagem)) {
            echo $mensagem;
        } 
    ?>
</body>
</html>