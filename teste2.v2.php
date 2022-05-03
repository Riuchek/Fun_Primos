<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Function Primos</title>
</head>

<body>
    <form action="teste2.v2.php" method="post">
        <input type="text" id="nI" placeholder="Numero Inicial" name="nI">
        <input type="text" id="nF" placeholder="Numero Final" name="nF"> 
        <input type="submit" value="Testar" id="Enviar" name="submit">

    </form>


    <?php
    if (isset($_POST["nI"])) {
        $nI = $_POST["nI"];
    }
    if (isset($_POST["nF"])) {
        $nF = $_POST["nF"];
    }
    for ($i = $nI; $i <= $nF; $i++) {
        //mandar para ca a variavel 
        $div = 0;

        for ($j = $i; $j >= 1; $j--) {
            if (($i % $j) == 0) {
                $div++;
            }
        }
        if ($div==2) {
            echo$i.',';
        }
    }
    ?>
</body>

</html>