<?php

use Model\customersModel;
use Model\vehiclesModel;

if ($_POST) {

    require_once '../model/vehiclesModel.php';

    $id = $_POST['id'];

    $veiculo = new vehiclesModel();
    if ($id != 0) {
        //Atualiza o id do veículo para editá-lo
        $veiculo->setId($id);
    }
    $veiculo->setCustomerId($_POST['clienteId']);
    $veiculo->setMake($_POST['marca']);
    $veiculo->setModel($_POST['modelo']);
    $veiculo->setYear($_POST['ano']);
    $veiculo->setLicencePlate($_POST['placa']);
    $veiculo->setColor($_POST['cor']);
    $veiculo->setRenavam($_POST['renavam']);
    $veiculo->save();
    if ($veiculo->getTotal() > 0) {
        header('location:../listaVeiculos.php?error');
    } else {
        header('location:../listaVeiculos.php?success');
    }
} else if (isset($_REQUEST['id'])) {
    require_once './model/vehiclesModel.php';
    $veiculo = new vehiclesModel();
    //verifica o comando se é edit ou delete.
    $cmd = $_REQUEST['cmd'];
    //Verifica se o id do registro a ser deletado ou editado  foi passado na query string.
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        if ($cmd == 'edit') {
            //Se foi carrega as informações pelo id
            $veiculo = loadVehicleById($id);
        } else if ($cmd == 'delete') {
            //Apaga
            $veiculo->delete($id);
            if ($veiculo->getTotal() > 0) {
                header('location:./listaVeiculos.php?cod=success');
            } else {
                header('location:./listaVeiculos.php?cod=error');
            }
        }
    }
} 


function loadAllCustomers(){
    require_once './model/customersModel.php';
    $cliente = new customersModel();
    //Imprime no select de veículos
    return $cliente->loadAll();
}

function loadAllVehicles(){
    require_once './model/vehiclesModel.php';
    $veiculo = new vehiclesModel();
    return $veiculo->loadAll();
}

function loadVehicleById($id){
    require_once './model/vehiclesModel.php';
    $veiculo = new vehiclesModel();
    //Imprime no select de veículos
    return $veiculo->loadById($id);
}