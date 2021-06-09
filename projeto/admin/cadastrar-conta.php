<?php
  session_start();
  require("includes/seguranca-adm.php");
  include('includes/header.php'); 
  include('includes/menu-lateral.php'); 
  include('includes/barra-superior.php'); 
?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Cadastro de Contas</h1>          
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                
                <?php if(isset($_GET['save'])){  ?>
                  <div class="alert alert-success alert-dismissible fade show col-md-10" role="alert">
                    <strong>Salvo com Sucesso</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <?php } ?>

                <form action="acoes/conta-cadastrar.php" method="post">
                  <div class="form-group row">
                  
                    <div class="form-group col-md-5">
                        <label>Credor:</label>
                        <input type="text" name="credor" id="credor" class="form-control form-control-user" placeholder="Informe o nome do Credor" required>
                    </div>

                    <div class="form-group col-md-5">
                        <label>Valor:</label>
                        <input type="text" name="valor" id="valor" class="form-control form-control-user" placeholder="Informe o valor da Dívida" required>
                    </div>

                    <div class="form-group col-md-10">
                      <select class="form-control form-control-user" name="nivel">
                        <option value="1">A Receber</option>
                        <option value="2">A Pagar</option>
                      </select>
                    </div>
                  </div>


                    <div class="form-grop row col-md-10">
                        <label>Descrição:</label>
                        <textarea type="textarea" name="desc" rows="5" class="form-control form-control=user" required></textarea>
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