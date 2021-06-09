<?php
session_start();

if(isset($_SESSION['logadoadm'])){
    
unset(
    $_SESSION['logadoadm'],
    $_SESSION['usuarioadm'],
    $_SESSION['emailadm'],
    $_SESSION['niveladm']
);

header("Location: ../../index.php");

}elseif(isset($_SESSION['logadousu'])){

unset(
    $_SESSION['logadousu'],
    $_SESSION['usuariousu'],
    $_SESSION['emailusu'],
    $_SESSION['nivelusu']
);

    header("Location: ../../index.php");

}

session_destroy();
?>