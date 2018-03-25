
<html lang="pt-br" data-textdirection="ltr" class="loading">    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

        <title><?php echo $nomePagina; ?></title>
    </head>

    <style type="text/css">
        body {
            margin: -15px;
            padding: -10px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>

    <body>
        <div>
            <h2 align="center" class="text-center"><?php echo "Relatório - " . $nomeAcademia; ?></h2>
            <br>
            <h3 style="text-align: center;"><?php echo $titulo; ?></h3>
            <div>
                <br>
                <div>
                    <!-- TABELA DOS EXERCÍCIOS -->
                    <table border="1" style="width: 100%; text-align: center; 
                           border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th style="padding: 5px; background-color: #A9A9A9;">Nome</th>
                                <th style="padding: 5px; background-color: #A9A9A9;">Endereço</th>
                                <th style="padding: 5px; background-color: #A9A9A9;">Telefone</th>
                                <th style="padding: 5px; background-color: #A9A9A9;">CPF</th>
                                <?php if ($tipoConta == "Todos") { ?>
                                    <th style="padding: 5px; background-color: #A9A9A9;">Tipo</th>
                                <?php } ?>
                                <?php if ($statusConta == "Todos") { ?>
                                    <th style="padding: 5px; background-color: #A9A9A9;">Status</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>                            
                            <?php
                            foreach ($informacoes as $usuarios) {
                                ?>
                                <tr>
                                    <td style="padding: 5px;">
                                        <?php
                                        if (isset($usuarios['nomeAluno'])) {
                                            echo $usuarios['nomeAluno'];
                                        } else if (isset($usuarios['nomeUsuario'])) {
                                            echo $usuarios['nomeUsuario'];
                                        }
                                        ?>    
                                    </td>
                                    <td>
                                        <?php
                                        if (isset($usuarios['enderecoAluno'])) {
                                            echo $usuarios['enderecoAluno'];
                                        } else if (isset($usuarios['enderecoUsuario'])) {
                                            echo $usuarios['enderecoUsuario'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if (isset($usuarios['telefoneAluno'])) {
                                            echo $usuarios['telefoneAluno'];
                                        } else if (isset($usuarios['telefoneUsuario'])) {
                                            echo $usuarios['telefoneUsuario'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if (isset($usuarios['cpfAluno'])) {
                                            echo $usuarios['cpfAluno'];
                                        } else if (isset($usuarios['cpfUsuario'])) {
                                            echo $usuarios['cpfUsuario'];
                                        }
                                        ?>
                                    </td>
                                    <?php if ($tipoConta == "Todos") { ?>
                                        <td>
                                            <?php
                                            if (isset($usuarios['idAluno'])) {
                                                echo "Aluno(a)";
                                            } else if (isset($usuarios['idUsuario'])) {
                                                if ($usuarios['tipoConta'] == 3) {
                                                    echo "Funcionário(a)";
                                                } else if ($usuarios['tipoConta'] == 4) {
                                                    echo "Instrutor(a)";
                                                }
                                            }
                                            ?>
                                        </td>
                                    <?php } ?>
                                    <?php if ($statusConta == "Todos") { ?>
                                        <td>
                                            <?php
                                            if (isset($usuarios['statusAluno'])) {
                                                if ($usuarios['statusAluno'] == true) {
                                                    echo "Ativo";
                                                } else if ($usuarios['statusAluno'] == false) {
                                                    echo "Bloqueado";
                                                }
                                            } else if (isset($usuarios['statusConta'])) {
                                                if ($usuarios['statusConta'] == true) {
                                                    echo "Ativo";
                                                } else if ($usuarios['statusConta'] == false) {
                                                    echo "Bloqueado";
                                                }
                                            }
                                            ?>
                                        </td> 
                                    <?php } ?>                                              
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>