<?php
require_once './shared/header.php';
include_once './controller/autenticationController.php';
?>
<br>
<h1>Lista de clientes</h1>
<a href="./cadastroClientes.php">Adicionar novo cliente</a>
<div class="table-responsive">
    <table id="dataClients" class="table table-striped table-hover  table-primary align-middle">
        <thead class="table-light">
            <tr>
                <th>Column 1</th>
                <th>Column 2</th>
                <th>Column 3</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr class="table-primary">
                <td scope="row">Item</td>
                <td>Item</td>
                <td>Item</td>
            </tr>
            <tr class="table-primary">
                <td scope="row">Item</td>
                <td>Item</td>
                <td>Item</td>
            </tr>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>
<?php
require_once './shared/header.php';
?>