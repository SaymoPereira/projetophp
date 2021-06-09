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
            <h1 class="h3 mb-0 text-gray-800">Editar Conta</h1>          
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                
               <?php
                $id = $_GET['idConta'];
                $sql = "SELECT * FROM conta WHERE idConta = '$id'";
                $res = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($res)){
               ?>

                <form action="acoes/conta-cadastrar.php" method="post">
                  <div class="form-group row">
                  
                    <input type="hidden" name="idConta" value="<?php echo $row['idConta']; ?>">

                    <div class="form-group col-md-5">
                        <label>Credor:</label>
                        <input type="text" name="credor" value="<?php echo $row['credor'];?>" class="form-control form-control-user"  required>
                    </div>

                    <div class="form-group col-md-5">
                        <label>Valor:</label>
                        <input type="text" name="valor" value="<?php echo $row['valor'];?>" class="form-control form-control-user"  required>
                    </div>

                    <div class="form-group col-md-10">
                      <select class="form-control form-control-user" name="nivel">
                        <?php
                          if($row['nivelConta'] == 1){?>
                            <option value="1">A Receber</option>
                            <option value="2">A Pagar</option>
                        <?php  }else{  ?>
                          <option value="1">A Pagar</option>
                          <option value="2">A Receber</option>
                        <?php }?>
                      </select>
                    </div>
                  </div>

                    <div class="form-grop row col-md-10">
                        <label>Descrição:</label>
                        <input type="textarea" value="<?php echo $row['descricao'];?>" name="desc" rows="5" class="form-control form-control=user" required></input>
                    </div>
                    
                    <div class="form-group">
                      <button type="submint" class="btn btn-primary col-lg-10" id="btn-cadastrar">Cadastrar</button>
                    </div>
                
                  
                </form>

                <?php } ?>

                </div>
            </div>            

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include('includes/footer.php');  ?>