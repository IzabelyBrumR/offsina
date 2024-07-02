<?php
require_once './shared/header.php';
?>

<h1 class="mt-5">Login</h1>
<form method="post" action="controller/loginController.php">
    <div class="mb-3">
        <label for="username" class="form-label">Nome de Usuário</label>
        <?php
                    //cookies no email
                    if (isset($_COOKIE['email'])) {
                        echo(' <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu email"
                            value="'.$_COOKIE['email'].'" required="">');
                    } else {
                        echo('<input type="email" class="form-control" id="email" 
                           placeholder="Insira seu email" name="email" required="">');
                    }?>
    </div>
    <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
    </div>
    <div class="mb-3">
    <div class="form-check form-check-inline">
    <?php
                    //botao para lembrar
                    if (isset($_COOKIE['email'])) {
                        echo ('<input type="radio" class="form-check-input" id="lembrar" 
                           name="lembrar" checked value="1">');
                    } else {
                        echo ('<input type="radio" class="form-check-input" id="lembrar" 
                           name="lembrar" value="1">');
                    }
                    ?>
            <label class="form-check-label" for="lembrar">Lembrar e-mail?</label>
        </div>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Login">
        <input type="reset" class="btn btn-danger" value="Limpar campos">
    </div>
</form>
<?php
                @$cod = $_REQUEST['cod'];
                if(isset($cod)){
                      
                        if ($cod == '171') {
                            echo ('<br><div class="alert alert-danger">');
                            echo ('Vefique usuário ou senha.');
                            echo ('</div>');
                        } else if ($cod == '172') {
                            echo ('<br><div class="alert alert-warning">');
                            echo ('Os campos não podem ser enviados em branco.');
                            echo ('</div>');
                        }
                    }
                    ?>


<?php
require_once './shared/header.php';
?>