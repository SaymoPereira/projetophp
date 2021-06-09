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
        <h6 class="m-0 font-weight-bold text-primary"> Lista de Usúarios</h6>
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
                    <th>Usúario</th>
                    <th>Email</th>
                    <th>Nivel</th>
                    <th>Ações</th>
                </thead>

                <tbody>
                    <?php
                    $sql = "SELECT * FROM usuarios";
                    $res = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                        <tr class="centro">
                            <td><strong><?php echo $row['idUsu']  ?></strong></td>
                            <td><?php echo strtoupper($row['usuario']);  ?></td>
                            <td><?php echo strtoupper($row['email']) ?></td>
                            <td><?php
                             if($row['nivel'] == 1){
                                echo "Administrador";
                             }else{
                                 echo "Usúario";
                             }  ?></td>

                            <td>
                                <a href="editar-usuario.php?idUsu=<?php echo $row['idUsu'] ?>">
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
                                                        <a class="btn btn-outline-danger" href="acoes/deletar-usuario.php?idUsu=<?php echo $row['idUsu']; ?>">Excluir</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </a>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>