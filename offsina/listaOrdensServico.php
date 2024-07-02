<?php
require_once './shared/header.php';
include_once './controller/autenticationController.php';
?>
<br>
<h1>Lista de ordens de serviço abertas</h1>
<div class="table-responsive">
    <table id="dataClients" class="table table-striped table-hover  table-primary align-middle">
        <thead class="table-light">
            <tr>
                <th>Veículo</th>
                <th>Problema</th>
                <th>Operações</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php
            //Carrega todos os veículos
            include_once './controller/cadastroOrdersController.php';
            include_once './controller/ordersController.php';
            include_once './model/ordersModel.php';
            $ordersList = loadAllOrders();
            foreach ($ordersList as $key => $value) {
                echo '<tr class="table-primary">';
                echo '<td scope="row">'.$value['vehicles'].'</td>';
                echo '<td scope="row">'.$value['problem'].'</td>';
                echo '<td scope="row">
                        <a class="btn btn-danger" href="./controller/ordersController.php?cmd=delete&id_delete='.$value['id'].'">Excluir</a> |
                        <a class="btn btn-success" href="">Executar Ordem de serviço</a> 
                     </td>';
                echo '</tr>';
            }
            @$cod = $_REQUEST['cod'];
            if(isset($cod)){
                    if ($cod == 'success-delete') {
                        echo ('<br><div class="alert alert-success">');
                        echo ('Ordem de serviço excluída com sucesso.');
                        echo ('</div>');
                    } else if ($cod == 'error-delete') {
                        echo ('<br><div class="alert alert-warning">');
                        echo ('Ordem de serviço não excluída.');
                        echo ('</div>');
                    }
                }
           ?>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>
<?php
require_once './shared/header.php';
?>