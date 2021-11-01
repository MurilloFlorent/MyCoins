<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$banco = 'Moedas';


$connect = mysqli_connect($servername,$username, $password, $banco);
if(mysqli_connect_errno());

$consulta_bomber = "SELECT id, coletado, brlslp, usdslp from Smooth";

$bomber = mysqli_query($connect, $consulta_bomber);

if(!$bomber){
    die("Falha");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste slp</title>
</head>
<body>
    
    

    <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Moeda</th>
                        <th scope="col">coletado</th>
                        <th scope="col">USD no dia</th>
                        <th scope="col">Brl no dia</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    while($listaBomber = mysqli_fetch_assoc($bomber)){
                    ?>
                        <tr>
                            <th scope=row></th>
                            <th>Smooth Love Potion</th>
                            <th><?php echo $listaBomber["coletado"] ?></th>
                            <th><?php echo $listaBomber["usdslp"] * $listaBomber["coletado"] ?></th>
                            <th><?php echo $listaBomber["brlslp"] * $listaBomber["coletado"] ?></th>
                        </tr>

                    <?php
                    }
                ?>
                    
                </tbody>
            </table>
    </div>
    <script src="jquery-3.6.0.min.js"></script>
</body>
</html>
<?php
mysqli_close($connect);
?>