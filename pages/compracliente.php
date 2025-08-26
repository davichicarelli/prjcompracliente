<?php
//ENTRADAS//
$nome = $_GET["nome"];
$valorcompra = filter_input(INPUT_GET, "compra", FILTER_VALIDATE_FLOAT);
$tipocliente = $_GET["tipocliente"];

//PROCESSAMENTO//
if ($tipocliente == "vip") { 
    $desconto = $valorcompra * 0.10;
} else {
    $desconto = 0;
}

$valorfinal = $valorcompra - $desconto;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra Cliente</title>
    <link rel="stylesheet" href="./../css/estilo.css">
<!-- o .. server para sair da pasta -->
</head>
<body>
    <h1>Valor da Compra:</h1>
    <div id="resultado">
    
    <?php
    //SAÍDAS//
    echo "Nome do Cliente: " . $nome . "<br>";
    echo "Valor da Compra: R$ " . number_format($valorcompra, 2, ',', '.') . "<br>";
    echo "Valor a Pagar: R$ " . number_format($valorfinal, 2, ',', '.') . "<br>";
    ?>

    </div>

</body>