<?php

use Model\employeesModel;

if ($_POST) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    @$lembrar = $_POST['lembrar'];

    require_once '../model/employeesModel.php';
    $empregado = new employeesModel();
    //se o usuario informar email e senha autentica
    if (!empty($email) && !empty($senha)) {
        $empregado->login($email, $senha);
        if($empregado->total > 0){
            @session_start();
            $_SESSION['login'] = $empregado->getId();
            $_SESSION['firstName'] = $empregado->getFirstName();
            
            if (isset($lembrar) && $lembrar == 1) {
                // Se lembrar está marcado, cria o cookie
                setcookie('email', $email, time() + (86400 * 30), "/");
            } else {
                // Se não, remove o cookie
                setcookie('email', "", time() - (86400 * 30), "/");
            }
    
            header('location:../home.php');
        }else{
            header('location:../index.php?cod=171');
        }
    } else {
        header('location:../index.php?cod=172');
    }
}