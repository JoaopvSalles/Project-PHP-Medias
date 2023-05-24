<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET["valor1"] ?? 1;
        $peso1 = $_GET["peso1"] ?? 1;
        $valor2 = $_GET["valor2"] ?? 1;
        $peso2 = $_GET["peso2"] ?? 1;

        $mediaSimples = ($valor1 + $valor2) / 2;
        $mediaPonderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
    ?>

    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="">1° Valor</label>
            <input type="number" name="valor1" id="">
            <label for="">1° Peso</label>
            <input type="number" name="peso1" id="">
            <label for="">2° Valor</label>
            <input type="number" name="valor2" id="">
            <label for="">2° Peso</label>
            <input type="number" name="peso2" id="">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?=$valor1?> e <?=$valor2?></p>
        <ul>
            <li>A <strong>Médias Aritmética Simples</strong> entre os valores é igual a <?=$mediaSimples?></li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <?=$mediaPonderada?></li>
        </ul>
    </section>
</body>
</html>