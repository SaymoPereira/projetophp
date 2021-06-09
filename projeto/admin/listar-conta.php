<?php
  session_start();
  require("includes/seguranca-adm.php");
  require("includes/conexao.php");
  include('includes/header.php'); 
  include('includes/menu-lateral.php'); 
  include('includes/barra-superior.php');
?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Lista de Contas</h6>
    </div>
    <div class="card-body">

    <?php
        if (isset($_GET['edit'])) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Alterado com Sucesso</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php }elseif(isset($_GET['delet'])){  ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Excluído com Sucesso</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php   } ?>

        <div class="table-responsive">
            <table class="table table-bordered" id="table-usuarios" widht="100%" cellspacing="0">
                <thead>
                    <th>#ID</th>
                    <th>Credor</th>
                    <th>Valor</th>
                    <th>Estado</th>
                    <th>Descrição</th>
                    <th>Data de Cadastro</th>
                    <th>Ações</th>
                </thead>

                <tbody>
                    <?php
                    $sql = "SELECT * FROM conta";
                    $res = mysqli_query($con, $sql);
                    $soma = 0;
                    while ($row = mysqli_fetch_assoc($res)) {
                        $soma += $row['valor'];
                    ?>
                        <tr class="centro">
                            <td><strong><?php echo $row['idConta'];  ?></strong></td>
                            <td><?php echo strtoupper($row['credor']);  ?></td>
                            <td>R$ <?php echo strtoupper($row['valor']); ?></td>
                            <td><?php
                            if($row['nivelConta'] == 1){
                                echo "A Receber";
                            }else{
                                echo "A Pagar";
                            }
                            ?></td>
                            <td><?php echo $row['descricao'];  ?></td>
                            <td><?php echo $row['creat'];   ?></td>

                            <td>
                                <a href="editar-conta.php?idConta=<?php echo $row['idConta'] ?>">
                                    <button class="btn btn-info">
                                        <i class="fas fa-edit"></i>
                                        Editar
                                    </button></a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fas fa-trash"></i>
                                        Excluir
                                    </button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"><strong>Excluir registro?</strong></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p><strong>Deseja mesmo excluir?</strong> <br> Ao fazer isso qualquer registro 
                                                        deixará de existir e não poderá ser recuperado!</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                                                        <a class="btn btn-outline-danger" href="acoes/deletar-conta.php?idConta=<?php echo $row['idConta']; ?>">Excluir</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
            <div class="table-responsive d-flex justify-content-end">
                <table class="table table-bordered col-md-1 " id="table-usuarios" widht="100%" cellspacing="0">
                    <thead>
                        <th>Total</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $soma;?></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>