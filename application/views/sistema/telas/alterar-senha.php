<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Palmer - Alterar Senha</title>

        <link href="css/login/bootstrap.css" rel="stylesheet">
        <link href="css/login/bootstrap.min.css" rel="stylesheet">      
        <link href="css/login/sb-admin.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">
        <link rel="shortcut icon" href="imagens/icone_logo_palmer_364x364_1.png">

    </head>

    <?php
    if (isset($_GET['cnpj'])) {
        $cnpj = $_GET['cnpj'];
    }
    ?>

    <body class="bg-orange">
        <div class="container">
            <div class="card card-login mx-auto mt-10">
                <div class="card-body">
                    <img src="imagens/logo_Palmer_laranja_App.png" id="login-logo">
                    <form name="formAlterarSenha" id="formAlterarSenha" action="db/alterarSenha.php" method="post">
                        <input type="hidden" name="cnpj" id="cnpj" value="<?php echo $cnpj; ?>">  
                        <div class="form-group">
                            <br>
                            <label style="text-align: center;">Digite a nova senha</label>
                            <label></label>
                            <input class="form-control"autofocus="" type="password" name="senhaUsuario" placeholder="Digite a nova senha" required="">
                        </div>
                        <div class="form-group">
                            <label style="text-align: center;">Confirme a senha</label>
                            <input class="form-control" type="password" name="confirmarSenhaUsuario" placeholder="Confirme a senha" required=""> 
                        </div>  
                        <input type="submit" id="botao-alterar-senha" name="botao-alterar-senha" value="ALTERAR SENHA" class="btn btn-warning btn-block">                
                    </form>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!--<script src="js/request_data_base.js"></script>-->

    </body>
</html>