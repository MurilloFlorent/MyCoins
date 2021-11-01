<?php 
$servername = "localhost";
$username = "root";
$password = "";
$banco = "Moedas";


$connect = mysqli_connect($servidor,$username,$password,$banco);

if(mysqli_connect_errno()) {
    die("conexao falhou: " . mysqli_connect_errno());
}

$consulta_moeda_bomber = "SELECT coletada,usdbomb,brlbomb";
$consulta_moeda_bomber += " FROM Bomber ";

$consulta_moeda_slp = "SELECT coletada,usdslp,brlslp";
$consulta_moeda_slp += " FROM Smooth ";

$bomberMoeda = mysqli_query($connect, $consulta_moeda_bomber);
if( !$bomberMoeda) {
    die("Falha na consulta do bomber");
}
$slpMoeda = mysqli_query($connect, $consulta_moeda_slp);
if( !$slpMoeda) {
    die("Falha na consulta do SLP");
}

mysqli_close($connect);
?>