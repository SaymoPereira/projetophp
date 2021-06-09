<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<form action="admin/valida.php" method="POST">
  <fieldset>
    <legend>Login</legend>
    <label for="user">Usúario:</label>
    <input type="text" id="user" name="usuario" placeholder="John">
    <label for="password">Senha:</label>
    <input type="password" name="senha" id="password" placeholder="Minha Senha">
    <button type="submint">Login</button>
  </fieldset>
  
</form>
<?php
      if(isset($_GET['of'])){ ?>
      <div class="alert">
        <stong>Efetue o login para entrar no sistema!</stong>
      </div>
    <?php } ?>

</body>
</html>