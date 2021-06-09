<?php
require("../includes/conexao.php");
    $id = $_GET['idConta'];

    $sql = "DELETE FROM conta WHERE idConta = $id";

    if(mysqli_query($con, $sql)){
        echo "
        <script>
            location.href='../listar-conta.php?exclui=ok';
        </script>
        ";
    }
?>