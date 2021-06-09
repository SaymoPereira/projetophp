<?php
  session_start();
  require("includes/seguranca-adm.php");
  require("includes/conexao.php");
  include('includes/header.php'); 
  include('includes/menu-lateral.php'); 
  include('includes/barra-superior.php'); 
?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Editar Usúario</h1>          
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                    <?php
                        $id = $_GET['idUsu'];
                        $sql = "SELECT * FROM usuarios WHERE idUsu = $id";
                        $res = mysqli_query($con, $sql);

                        while($row = mysqli_fetch_assoc($res)){ ?>
                        
                <form action="acoes/usu-editar.php" method="post">

                    <div class="form-group">
                        <input type="hidden" name="idUsu" value="<?php echo $row['idUsu']; ?>" id="credor" class="form-control form-control-user" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Usúario:</label>
                        <input type="text" name="usuario" value="<?php echo $row['usuario']; ?>" id="credor" class="form-control form-control-user" required>
                    </div>

                    <div class="form-group">
                        <label>Senha:</label>
                        <input type="password" name="senha" value="<?php echo $row['senha']; ?>" id="valor" class="form-control form-control-user"  required>
                    </div>

                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" value="<?php echo $row['email']; ?>" id="valor" class="form-control form-control-user"  required>
                    </div>

                    <div class="form-group">
                      <label>Nivel:</label>
                      <select name="nivel" class="form-control form-control-user">
                      <?php
                          if($row['nivel'] == 1){ ?>
                            <option value="1">Administrador</option>
                            <option value="2">Usúario</option>
                      <?php }elseif($row['nivel'] == 2){ ?>
                            <option value="2">Usúario</option>
                            <option value="1">Administrador</option>
                        <?php }?>  
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <button type="submint" class="btn btn-primary col-lg-12" id="btn-cadastrar">Cadastrar</button>
                    </div>

                </form>
                <?php }?>

                </div>
            </div>            

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include('includes/footer.php');  ?>