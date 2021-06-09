<?php
require("../includes/conexao.php");
    $id = $_POST['idUsu'];
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);
    $email = $_POST['email'];
    $nivel = $_POST['nivel'];

    $sql = "UPDATE usuarios SET usuario = '$usuario',
    senha = '$senha', email = '$email',
    nivel = '$nivel' WHERE idUsu = '$id'";

    if(mysqli_query($con, $sql)){
        echo "
        <script>
            location.href='../listar-usuario.php?edit=ok';
        </script>
        ";
    }

?>