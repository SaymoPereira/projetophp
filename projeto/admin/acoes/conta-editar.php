<?php
require("../includes/conexao.php");

    $id = $_POST['idConta'];
    $credor = $_POST['credor'];
    $valor = $_POST['valor'];
    $valor = floatval(str_replace(",",".",$valor));
    $desc = $_POST['descricao'];

    $sql = "UPDATE conta SET credor= '$credor',
     valor = '$valor', modific = NOW(),
      descricao = '$desc' WHERE idConta = '$id'";

    if(mysqli_query($con, $sql)){
        echo "
            <script>
                location.href='../listar-conta?edit=ok';
            </script>
        ";
    }

?>