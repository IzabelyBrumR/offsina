<?php
require_once './shared/header.php';
include_once './controller/autenticationController.php';
?>

<h1 class="mt-5">Bem vindo 
    <?php
    @session_start();
    echo ' '.$_SESSION['firstName'];
    ?>
</h1>
<p class="lead">Este sistema foi desenvolvido para facilitar o gerenciamento de clientes, veículos e ordens de serviço em nossa oficina mecânica.</p>
            <hr class="my-4">
            <p>Abaixo estão algumas orientações para utilizar o sistema de forma eficiente:</p>
            <ul>
                <li><strong>Cadastro de Clientes:</strong> Utilize a página de cadastro de clientes para registrar novos clientes, inserindo informações como nome, endereço, telefone e email.</li>
                <li><strong>Cadastro de Veículos:</strong> Registre os veículos dos clientes com detalhes como marca, modelo, ano e placa.</li>
                <li><strong>Ordens de Serviço:</strong> Crie ordens de serviço detalhadas para cada veículo, incluindo a descrição do serviço, custo estimado e status atual.</li>
                <li><strong>Listagem e Consulta:</strong> Acesse as listas de clientes, veículos e ordens de serviço para verificar ou atualizar as informações conforme necessário.</li>
                <li><strong>Login e Logout:</strong> Certifique-se de realizar login para acessar as funcionalidades do sistema e sempre saia de sua conta ao finalizar o uso para garantir a segurança dos dados.</li>
            </ul>
            <p class="lead">Obrigado por seu trabalho dedicado e por utilizar o Sistema OFFSINA para manter nosso serviço eficiente e organizado.</p>
<?php
require_once './shared/header.php';
?>