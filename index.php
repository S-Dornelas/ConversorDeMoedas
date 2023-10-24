<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Conversor de Dolar</title>
</head>
<body>
    <header>
        <h1>Conversor de Dolar</h1>
    </header>
    <main>
        <?php 
        $quantidadeMoedas = $_GET["moeda"] ?? 0;
        $dolar = 4.9312;
        $converter = $quantidadeMoedas / $dolar;
        
        //FORMATO DE MOEDAS COM INTERNACIONALIZAÇÃO       
        echo "Seus R\$ " . number_format($quantidadeMoedas, 2, ",", ".") . " equivalem a R\$$ " . number_format($converter, 2, ",", ".");    
        ?>
     <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>