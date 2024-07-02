<?php

use Model\vehiclesModel;

    if (isset($_REQUEST['id_delete'])) {
        require_once '../model/ordersModel.php';
        $orders = new ordersModel();
        //verifica o comando se é edit ou delete.
        $cmd = $_REQUEST['cmd'];
        //Verifica se o id do registro a ser deletado ou editado  foi passado na query string.
        if (isset($_REQUEST['id_delete'])) {
            $id = $_REQUEST['id_delete'];
            if ($cmd == 'delete') {
                //Apaga

                $total = $orders->delete($id);
                if ($total > 0) {
                    header('location:../listaOrdensServico.php?cod=success-delete');
                } else {
                    header('location:../listaOrdensServico.php?cod=error-delete');
                }
            }
        }
    } 

function loadAllOrders() {
    require_once './model/ordersModel.php';
    $orders = new ordersModel();
    $listarOrders = $orders->loadAll();
    return $listarOrders;
}

function loadOrdersById($id) {

    //Criar um objeto de conexão
    $db = new ConexaoMysql();

    //Abrir conexão com banco de dados
    $db->Conectar();

    //Criar consulta
    $sql = 'SELECT * FROM vehicles where id =' . $id;
    //Executar método de consulta
    $resultList = $db->Consultar($sql);

    foreach ($resultList as $asd){
        return $asd['license_plate'];
    }
}
?>