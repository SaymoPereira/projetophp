<?php

$con = mysqli_connect("localhost", "root", "");

if($con == false){
    die("Erro! Não foi possivel conectar-se com o banco...");
}

mysqli_select_db($con, "grbd");

?>