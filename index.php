<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$banco = 'Moedas';


$connect = mysqli_connect($servername,$username, $password, $banco);
if(mysqli_connect_errno());

if(isset($_POST["brls"])) {
    $moeda = $_POST["moeda"];
    $qtdcoletada = $_POST["qtdColetada"];
    $usdb = $_POST["usdb"];
    $brlb = $_POST["brlb"];
    $usds = $_POST["usds"];
    $brls = $_POST["brls"];

    if($moeda == "bomber") {
        $inserir = "INSERT INTO bomber (coletado,usdbomber,brlbomber) values ($qtdcoletada,$usdb,$brlb)";
    }else if($moeda == "smooth") {
        $inserir = "INSERT INTO smooth (coletado,usdslp,brlslp) values ($qtdcoletada,$usds,$brls)";
    }

    $operacao_inserir = mysqli_query($connect, $inserir);
    if(!$operacao_inserir){
        die("Falha na inserção");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Teste API</title>
</head>
<body>
    <?php include('listar_bomber.php') ?>
    <?php include('listar_slp.php') ?>

    
    <hr>
    <div class="container">
        <form action="index.php" method="post">
            <label for="moeda">Moeda</label>
            <select name="moeda" id="moeda">
                <option value="bomber">Bomber</option>
                <option value="smooth">Slp</option>
            </select>
            <label for="qtdColetada">Quantidade Coletada</label>
            <input type="number" name="qtdColetada" id="qtdColetada">
            <input type="hidden" name="usdb" id= "usdBomb" >
            <input type="hidden" name="brlb" id= "brlBomb" >
            <input type="hidden" name="usds" id= "usdSLP" >
            <input type="hidden" name="brls" id= "brlSLP" >

            <div class="d-grid gap pt-5">
                <input class="btn btn-success" type="submit" value="Adicionar">
            </div>

        </form >
    </div>
    


    <script src="jquery-3.6.0.min.js"></script>
    <script>
        
        var coins = '';
        $.ajax({
            type: "get",
            url: "https://api.coingecko.com/api/v3/simple/price?ids=bomber-coin%2Csmooth-love-potion&vs_currencies=brl%2Cusd",
            data: coins
        }).done((coins) => {
            var bomberUSD = coins["bomber-coin"].usd;
            var bomberBRL = coins["bomber-coin"].brl;

            var slpUSD = coins["smooth-love-potion"].usd;
            var slpBRL = coins["smooth-love-potion"].brl;
    
            $('input#usdBomb').val(bomberUSD);
            $('input#brlBomb').val(bomberBRL);
            $('input#usdSLP').val(slpUSD);
            $('input#brlSLP').val(slpBRL);

        }).fail(() => {
            console.log("Erro no sistema")
        })
    </script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>