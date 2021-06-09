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
            <h1 class="h3 mb-0 text-gray-800">GERENCIAMENTO DE CAPITAL</h1>          
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card col-md-5">
                <div class="card-body">
                  <p><strong><?php echo $_SESSION['usuarioadm'];?></strong> Seja bem-vindo!  saiba que todas suas ações podem prejudicar o sistema permanentemente, pois dados 
                  apagados não poderam ser recuperados como: usúarios e/ou cadastros! Por isso cuidado com suas ações.</p>
                </div>
              </div>
            </div>

            
           
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include('includes/footer.php');  ?>