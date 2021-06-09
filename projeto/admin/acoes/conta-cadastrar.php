<?php
require("../includes/conexao.php");

    $credor = $_POST['credor'];
    $valor = $_POST['valor'];
    $nivel = $_POST['nivel'];
    $descricao = $_POST['desc'];
    $valor = floatval(str_replace(",",".",$valor));

    $sql = "INSERT INTO conta (valor, credor, nivelConta, creat, descricao) 
    VALUES ('$valor', '$credor', $nivel, NOW(),'$descricao')";

    if(mysqli_query($con, $sql)){
        echo "
            <script>
                location.href='../cadastrar-conta.php?save=ok';
            </script>
        ";
    }
?>