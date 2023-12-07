<?php
$linhas = 5;
$colunas = 4; 
function gerarMatriz($linhas, $colunas) {
    $matriz = [];
    for ($i = 0; $i < $linhas; $i++) {
        for ($j = 0; $j < $colunas; $j++) {
            $matriz[$i][$j] = rand(1, 1000);
        }
    }
    return $matriz;
}
$matriz = gerarMatriz($linhas, $colunas);
echo "<table border='1'>";
for ($i = 0; $i < $linhas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $colunas; $j++) {
        echo "<td>{$matriz[$i][$j]}</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>