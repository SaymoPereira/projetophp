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
            <h1 class="h3 mb-0 text-gray-800">Cadastro de Usúarios</h1>          
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                
                <?php if(isset($_GET['salvo'])){  ?>
                  <div class="alert alert-success alert-dismissible fade show col-md-10" role="alert">
                    <strong>Salvo com Sucesso</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php } ?>

                <form action="acoes/usuario-cadastrar.php" method="post">
                    
                  <div class="form-group row">
                    <div class="form-group col-md-5">
                      <label>Usúario:</label>
                      <input type="text" name="usuario" id="valor" class="form-control form-control-user" placeholder="Informe uma Senha" required>
                    </div>

                    <div class="form-group col-md-5">
                      <label>Senha:</label>
                      <input type="password" name="senha" id="valor" class="form-control form-control-user" placeholder="Informe uma Senha" required>
                    </div>
                  
                  </div>

                  <div class="form-group row">
                    
                    <div class="form-group col-md-5">
                      <label>Email:</label>
                       <input type="text" name="email" id="valor" class="form-control form-control-user" placeholder="Informe o Email" max="20" required>
                    </div>

                    <div class="form-group col-md-5">
                      <label>Nivel:</label>
                      <select name="nivel" class="form-control form-control-user">
                        <option value="1">Administrador</option>
                        <option value="2">Usúario</option>
                      </select>
                    </div>
                  
                  </div>

                    
                    
                    <div class="form-group">
                      <button type="submint" class="btn btn-primary col-lg-10" id="btn-cadastrar">Cadastrar</button>
                    </div>

                </form>

                </div>
            </div>            

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include('includes/footer.php');  ?>