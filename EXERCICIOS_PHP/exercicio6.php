<!DOCTYPE html>
<html>
<head>
    <title>Exercício 6</title>
</head>
<body>
    <h1>Exercício 6 - Área Triângulo Retângulo</h1>

    <!-- 
      Joãozinho recebeu R$ 50,00 reais de seu pai para ir à feira comprar frutas e verduras. Ele comprou maçã, melancia, laranja, repolho, 
      cenoura, batatinha. Crie um programa que calcule o valor gasto com cada produto comprado, sendo o resultado do valor individual do 
      produto em Kg multiplicado pela quantidade em Kg comprada por Joãozinho. Ao final escrever uma frase com o valor da compra, para um 
      previsão se o dinheiro será o suficiente para pagar a conta, caso falte dinheiro escrever uma frase em vermelho com o valor que ficou 
      acima do disponível por Joãozinho, e não, escrever uma fase em azul e o valor que Joãozinho ainda poderia gastar. Caso o valor da 
      compra seja exatamente igual ao R$ 50,00 disponível, escreva uma frase em verde afirmando que o saldo para compras foi esgotado.
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

<?php
        define('valor_unitario_produtos', [9.55, 3.45, 8.64, 2.34, 5.67, 4.99]);
        define('valor_joaozinho', 50);

        /**
         * Função que calcula e escreve o resultado conforme se pede no exercício
         *
         * @param  mixed $aqtd_comprada
         * @return string
         */
        function calcula_escreve_valor_compra($aqtd_comprada) {
            try { 
                /* Percorrer todos os itens do array de quantidade comprada (entrada da função) e multiplicar pelo valor unitário,
                   somando tudo junto para retornar o valor da compra */
                $valor = 0;
                for ($item=0; $item < 6; $item++) { 
                    $valor = $valor + ($aqtd_comprada[$item] * valor_unitario_produtos[$item]);
                }
                /* Calcular o saldo que ficou após as compras */
                $troco = valor_joaozinho - $valor;
                if($troco > 0) {
                    return '<p style="color:blue">O valor da compra foi: '.$valor.', sendo suficiente para pagar. Joãozinho ainda tem '.$troco.' para gastar.</p>';
                }
                if($troco < 0) {
                    return '<p style="color:red">O valor da compra foi: '.$valor.', sendo insuficiente para pagar, faltou'.$troco.'.</p>';
                }
                if($troco == 0) {
                    return '<p style="color:green">O valor da compra foi: '.$valor.', sendo exatamente igual ao que Joãozinho tinha para pagar.</p>';
                }
            } catch (Exception $e) {
                return "Houve erro no cálculo: " . $e->getMessage();    
            }
        } 

        /* @ Aqui deve-se validar se pode chamar a função ou não, no caso de ser a primeira execução do formulário e os lados não terem sido informados */
        if(isset($_POST['campo_qtd_maca']) && 
           isset($_POST['campo_qtd_melancia']) && 
           isset($_POST['campo_qtd_laranja']) && 
           isset($_POST['campo_qtd_repolho']) &&
           isset($_POST['campo_qtd_cenoura']) &&
           isset($_POST['campo_qtd_batatinha'])) {
            echo "<p>" . calcula_escreve_valor_compra([
                $_POST['campo_qtd_maca'], 
                $_POST['campo_qtd_melancia'],
                $_POST['campo_qtd_laranja'],
                $_POST['campo_qtd_repolho'],
                $_POST['campo_qtd_cenoura'],
                $_POST['campo_qtd_batatinha']
            ]) . "</p>"; 
        } else {
            echo "<script>alert('Informe as quantidades nos campos conforme solicitado.')</script>";
        }
    ?>

    <form method="post">
        <label for="campo_qtd_maca">Quantidade Maçã:</label>
        <input type="number" id="campo_qtd_maca" name="campo_qtd_maca" step=".001"><br>
        
        <label for="campo_qtd_melancia">Quantidade Melancia:</label>
        <input type="number" id="campo_qtd_melancia" name="campo_qtd_melancia" step=".001"><br>

        <label for="campo_qtd_laranja">Quantidade Laranja:</label>
        <input type="number" id="campo_qtd_laranja" name="campo_qtd_laranja" step=".001"><br>

        <label for="campo_qtd_repolho">Quantidade Repolho:</label>
        <input type="number" id="campo_qtd_repolho" name="campo_qtd_repolho" step=".001"><br>

        <label for="campo_qtd_cenoura">Quantidade Cenoura:</label>
        <input type="number" id="campo_qtd_cenoura" name="campo_qtd_cenoura" step=".001"><br>

        <label for="campo_qtd_batatinha">Quantidade Batatinha:</label>
        <input type="number" id="campo_qtd_batatinha" name="campo_qtd_batatinha" step=".001"><br>

        <br><input type="submit" value="Calcular">
    </form>

    <?php 
        if(!empty($mensagem)) { 
            echo $mensagem;
        } 
    ?>
</body>
</html>