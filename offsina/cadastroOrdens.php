<?php
require_once './shared/header.php';
require_once './model/ConexaoMysql.php';
include_once './controller/autenticationController.php';
require_once './model/ordersModel.php';
$OS = new ordersModel();
?>
<br>
<h1>Cadastro de ordens de serviço</h1>
<form action="controller/cadastroOrdersController.php" method="POST">
<?php

if($_REQUEST['id']){

 $vehiclesId = $_GET['id']; 

   $vehicles = $OS->loadById($vehiclesId);

foreach ($vehicles as $vehicles) {


 ?>
<div class="mb-3">
        <label for="vehicles" class="form-label">Veículo</label>
        <input type="text" class="form-control" id="vehicles" name="vehicles" value="<?php echo $vehicles['license_plate']; }}?>" required>
    </div>
    <div class="mb-3">
        <label for="problem" class="form-label">Problema/Defeito:</label>
        <textarea class="form-control" name="problem" id="problem" rows="5"></textarea>
    </div>
    
    <input type="submit" class="btn btn-primary" value="Cadastrar nova ordem de serviço">
    <input type="reset" class="btn btn-danger" value="Limpar campos">
    <br>
</form>

<?php
require_once './shared/footer.php';
?>