<?php
require_once './shared/header.php';
include_once './controller/autenticationController.php';
?>
<br>
<h1>Lista de ordens de serviço abertas</h1>
<a href="./cadastroOrdens.php">Adicionar nova Ordem de serviço</a>
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
            <tr class="table-primary">
                <td scope="row">Item</td>
                <td>Item</td>
                <td>
                    <a class="btn btn-success">Executar ordem de serviço</a>
                </td>
            </tr>
            <tr class="table-primary">
                <td scope="row">Item</td>
                <td>Item</td>
                <td>
                    <a class="btn btn-success">Executar ordem de serviço</a>
                </td>
            </tr>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>
<?php
require_once './shared/header.php';
?>