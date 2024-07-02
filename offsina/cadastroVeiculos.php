<?php
require_once './shared/header.php';
include_once './controller/autenticationController.php';
?>
<br>
<form method="post" action="./controller/vehiclesController.php">
<?php 
   include_once './controller/vehiclesController.php';
?>
<input type="hidden" name="id" value="<?php echo (isset($veiculo)? @$veiculo->getId() : '0'); ?>">
<div class="mb-3">
    <label for="" class="form-label">Dono (cliente):</label>
    <select class="form-select form-select-lg" name="clienteId" id="clienteId">
        <option selected>Selecione um cliente</option>
        <?php
        $listaClientes = loadAllCustomers();
        foreach ($listaClientes as $key => $value) {
           //Seleciona o dono do veículo no ato de editar.
            if(isset($veiculo)){
                if($veiculo->getCustomerId()== $value['id']){
                    echo '<option selected="true" value="' . $value['id'] . '">' . $value['first_name'] . ' ' . $value['last_name'] . '</option>';
                }else{
                    echo '<option value="' . $value['id'] . '">' . $value['first_name'] . ' ' . $value['last_name'] . '</option>';
                }
            }else{
                //Qdo for cadastro só faz isso.
                echo '<option value="' . $value['id'] . '">' . $value['first_name'] . ' ' . $value['last_name'] . '</option>';
            }
        }
        ?>
    </select>
</div>
<div class="mb-3">
    <label for="marca" class="form-label">Marca:</label>
    <input type="text" class="form-control" id="marca" name="marca" value="<?php echo (isset($veiculo)? @$veiculo->getMake() : ''); ?>" placeholder="Digite a marca do veículo">
</div>
<div class="mb-3">
    <label for="modelo" class="form-label">Modelo:</label>
    <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo (isset($veiculo)? @$veiculo->getModel() : ''); ?>" placeholder="Digite o modelo do veículo">
</div>
<div class="mb-3">
    <label for="ano" class="form-label">Ano:</label>
    <input type="number" class="form-control" id="ano" name="ano" value="<?php echo (isset($veiculo)? @$veiculo->getYear() : ''); ?>" placeholder="Digite o ano do veículo">
</div>
<div class="mb-3">
    <label for="placa" class="form-label">Placa:</label>
    <input type="text" class="form-control" id="placa" name="placa" value="<?php echo (isset($veiculo)? @$veiculo->getLicencePlate() : ''); ?>" placeholder="Digite a placa do veículo">
</div>
<div class="mb-3">
    <label for="cor" class="form-label">Cor:</label>
    <input type="text" class="form-control" id="cor" name="cor" value="<?php echo (isset($veiculo)? @$veiculo->getColor() : ''); ?>" placeholder="Digite a cor do veículo">
</div>
<div class="mb-3">
    <label for="renavam" class="form-label">Renavam:</label>
    <input type="text" class="form-control" id="renavam" name="renavam" value="<?php echo (isset($veiculo)? @$veiculo->getRenavam() : ''); ?>" placeholder="Digite o renavam do veículo">
</div>
<input type="submit" class="btn btn-primary" value="Cadastrar Veículo">
<input type="reset" class="btn btn-danger" value="Limpar campos">
</form>
<?php
require_once './shared/footer.php';
?>