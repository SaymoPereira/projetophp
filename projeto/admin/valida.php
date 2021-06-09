<?php
session_start();
require("includes/conexao.php");

$nome = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE usuario = '$nome' AND senha = '$senha'";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($res);

if($row['nivel'] == 1){

    $_SESSION['logadoadm'] = true;
    $_SESSION['usuarioadm'] = $row['usuario'];
    $_SESSION['emailadm'] = $row['email'];
    $_SESSION['niveladm'] = $row['nivel'];
    
    header("Location: adm.php");

}elseif($row['nivel'] == 2){

    $_SESSION['logadousu'] = true;
    $_SESSION['usuariousu'] = $row['usuario'];
    $_SESSION['emailusu'] = $row['email'];
    $_SESSION['nivelusu'] = $row['nivel'];
    
    header("Location: usu.php");
}

?>