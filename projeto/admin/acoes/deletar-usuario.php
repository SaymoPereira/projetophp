<?php
require("../includes/conexao.php");
    $id = $_GET['idUsu'];

    $sql = "DELETE FROM usuarios WHERE idUsu = $id";

    if(mysqli_query($con, $sql)){
        echo "
        <script>
            location.href='../listar-usuario.php?delet=ok';
        </script>
        ";
    }
?>