<?php
if ($_POST) {
    $vehicles = $_POST['vehicles'];
    $problem = $_POST['problem'];

    require_once '../model/ordersModel.php';
    $usr = new ordersModel();
    $usr->cadastro($vehicles,$problem);

    
}  
    header('location:../listaOrdensServico.php?sucess');
?>