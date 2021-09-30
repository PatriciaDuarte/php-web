<?php
$nota1 = 7.0;
$nota2 = 5.0;
$nota_final = $nota1 + $nota2;
echo "<p>Nota Final: $nota_final </p>";

$valor_pago = 100.0;
$valor_da_compra = 75.5;
$troco = $valor_pago - $valor_da_compra;
echo "<p>Troco: R$ $troco</p>";

$preco_unitario = 10.00;
$quantidade = 2;
$preco_total = $preco_unitario * $quantidade;
echo "<p>Preço Total: R$ $preco_total</p>";

$valor_da_compra = 19999.00;
$numero_de_parcelas = 5;
$valor_da_parcela = $valor_da_compra / $numero_de_parcelas;
echo "<p>Valor da Parcela: R$ $valor_da_parcela </p>";

$dividendo = 7;
$divisor = 2;
$resto = $dividendo % $divisor;
echo "<p>Resto:  $resto </p>";