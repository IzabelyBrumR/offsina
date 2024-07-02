<?php

use Model\customersModel;

if($_POST){
    $id = $_POST['id'];
    if($id==0){
        //Novo cliente
    }else{
        //Editar cliente
    }

}else if($_REQUEST){
    //verifica o comando se é edit ou delete.
}else{
    //só carrega a listagem de clientes.
}

function getNameCustomerById($id){
    require_once './model/customersModel.php';
    $customer = new customersModel();
    $result = $customer->getCustomerById($id);
    if($result){
        return $customer->getFirst_name();
    }
    return 'Precisa completar o método getNameCustomer na customersController';
}

?>