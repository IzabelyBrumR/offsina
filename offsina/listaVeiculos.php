<?php
require_once './shared/header.php';
include_once './controller/autenticationController.php';
?>
<br>
<h1>Lista de veículos</h1>

<a href="./cadastroVeiculos.php">Adicionar novo veículo</a>
<div class="table-responsive">
    <table id="dataClients" class="table table-striped table-hover  table-primary align-middle">
        <thead class="table-light">
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Placa</th>
                <th>Cor</th>
                <th>Renavam</th>
                <th>Dono</th>
                <th>Operações</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            //Carrega todos os veículos
            include_once './controller/vehiclesController.php';
            include_once './controller/customersController.php';
            $veiculosList = loadAllVehicles();
            foreach ($veiculosList as $key => $value) {
                echo '<tr class="table-primary">';
                echo '<td scope="row">'.$value['make'].'</td>';
                echo '<td scope="row">'.$value['model'].'</td>';
                echo '<td scope="row">'.$value['year'].'</td>';
                echo '<td scope="row">'.$value['license_plate'].'</td>';
                echo '<td scope="row">'.$value['color'].'</td>';
                echo '<td scope="row">'.$value['renavam'].'</td>';
                echo '<td scope="row">'.getNameCustomerById($value['customer_id']).'</td>';
                echo '<td scope="row">
                        <a class="btn btn-primary" href="./cadastroVeiculos.php?cmd=edit&id='.$value['id'].'">Editar</a> |
                        <a class="btn btn-danger" href="./cadastroVeiculos.php?cmd=delete&id='.$value['id'].'">Excluir</a> |
                        <a class="btn btn-success" href="./cadastroOrdens.php?cmd=new&id='.$value['id'].'">Nova OS</a> 
                     </td>';
                echo '</tr>';
            }
            ?>
            <?php
            @$cod = $_REQUEST['cod'];
            if(isset($cod)){
                    if ($cod == 'success') {
                        echo ('<br><div class="alert alert-success">');
                        echo ('Registro excluído com sucesso.');
                        echo ('</div>');
                    } else if ($cod == 'error') {
                        echo ('<br><div class="alert alert-warning">');
                        echo ('Estamos com alguns problemas no nosso servidor, tente novamente mais tarde.');
                        echo ('</div>');
                    }
                }
           ?>
        </tbody>
        <tfoot>

        </tfoot>
    </table>

    <?php
    require_once './shared/footer.php';
    ?>