<?php
require_once './shared/header.php';
include_once './controller/autenticationController.php';
?>
<br>
<h1>Cadastro de clientes</h1>
<form action="cadastroClienteController.php" method="POST">
    <div class="mb-3">
        <label for="first_name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Digite o nome do cliente" required>
    </div>
    <div class="mb-3">
        <label for="last_name" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Digite o sobrenome do cliente" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Telefone</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Digite o telefone">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Digite o email">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Digite o endereço">
    </div>
    <div class="mb-3">
        <label for="city" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Digite a cidade">
    </div>
    <div class="mb-3">
        <label for="state" class="form-label">Estado</label>
        <input type="text" class="form-control" id="state" name="state" placeholder="Digite o estado">
    </div>
    <div class="mb-3">
        <label for="zip_code" class="form-label">CEP</label>
        <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Digite o CEP">
    </div>
    <input type="submit" class="btn btn-primary" value="Cadastrar Cliente">
    <input type="reset" class="btn btn-danger" value="Limpar campos">
    <br>
</form>

<?php
require_once './shared/footer.php';
?>