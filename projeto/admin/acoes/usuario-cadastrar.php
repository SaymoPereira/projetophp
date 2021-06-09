<?php
require("../includes/conexao.php");

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $nivel = $_POST['nivel'];

    $sql = "INSERT INTO usuarios (usuario, senha, email, nivel) VALUES ('$usuario', '$senha', '$email','$nivel')";

    if(mysqli_query($con, $sql)){
        echo "
        <script>
             location.href='../cadastrar-usuario.php?salvo=ok';
        </script>
        ";
    }
    
?>