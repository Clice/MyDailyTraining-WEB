
<html lang="pt-br" data-textdirection="ltr" class="loading">    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

        <title>Ficha de Treino</title>
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
        <div style="border: 2px solid #000; padding: 5px; border-radius: 20px;">
            <h2 align="center" class="text-center">FICHA DE TREINO</h2>
            <br>
            <div style="padding: 5px;">
                <div>
                    <?php foreach ($perfilAluno as $aluno) { ?>
                        <h3>Nome: <?php echo $aluno->nomeAluno; ?></h3>
                    <?php } ?>
                </div>
                <br><br>
                <div>
                    <!-- TABELA DOS EXERCÍCIOS -->
                    <table border="2" cellspacing="0" cellpadding="2" bordercolor="#00" style="border: 4px solid #000;">
                        <thead>
                            <tr>
                                <th style="padding: 15px">EXERCÍCIO</th>
                                <th style="padding: 10px">SÉRIE</th>
                                <th style="padding: 10px">REPETIÇÕES</th>
                                <th style="padding: 10px">CARGA</th>
                                <th style="padding: 10px">PESO</th>
                                <th style="padding: 5px">DOM</th>
                                <th style="padding: 5px">SEG</th>
                                <th style="padding: 5px">TER</th>
                                <th style="padding: 5px">QUA</th>
                                <th style="padding: 5px">QUI</th>
                                <th style="padding: 5px">SEX</th>
                                <th style="padding: 5px">SAB</th>
                            </tr>
                        </thead>
                        <tbody>  
                            <?php foreach ($treinosAluno as $treinoAluno) { ?>
                                <tr>
                                    <td>
                                        <?php
                                        for ($i = 0; $i < count($exerciciosTreinos); $i++) {
                                            for ($j = 0; $j < count($exerciciosTreinos[$i]); $j++) {
                                                if ($exerciciosTreinos[$i][$j]['idTreino'] == $treinoAluno->idTreino) {
                                                    echo $exerciciosTreinos[$i][$j]['nomeExercicio'] . "; ";
                                                }
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $treinoAluno->nomeTreino; ?></td>

                                    <td>
                                        <?php
                                        for ($i = 0; $i < count($exerciciosTreinos); $i++) {
                                            for ($j = 0; $j < count($exerciciosTreinos[$i]); $j++) {
                                                if ($exerciciosTreinos[$i][$j]['idTreino'] == $treinoAluno->idTreino) {
                                                    echo $exerciciosTreinos[$i][$j]['nomeExercicio'] . "; ";
                                                }
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <!-- DOMINGO -->
                                    <td style="text-align: center">
                                        <?php
                                        if ($treinoAluno->domingo == true) {
                                            echo "X";
                                        }
                                        ?>
                                    </td>
                                    <!-- SEGUNDA -->
                                    <td style="text-align: center">
                                        <?php
                                        if ($treinoAluno->segunda == true) {
                                            echo "X";
                                        }
                                        ?>
                                    </td>
                                    <!-- TERÇA -->
                                    <td style="text-align: center">
                                        <?php
                                        if ($treinoAluno->terca == true) {
                                            echo "X";
                                        }
                                        ?>
                                    </td>
                                    <!-- QUARTA -->
                                    <td style="text-align: center">
                                        <?php
                                        if ($treinoAluno->quarta == true) {
                                            echo "X";
                                        }
                                        ?>
                                    </td>
                                    <!-- QUINTA -->
                                    <td style="text-align: center">
                                        <?php
                                        if ($treinoAluno->quinta == true) {
                                            echo "X";
                                        }
                                        ?>
                                    </td>
                                    <!-- SEXTA -->
                                    <td style="text-align: center">
                                        <?php
                                        if ($treinoAluno->sexta == true) {
                                            echo "X";
                                        }
                                        ?>
                                    </td>
                                    <!-- SÁBADO -->
                                    <td style="text-align: center">
                                        <?php
                                        if ($treinoAluno->sabado == true) {
                                            echo "X";
                                        }
                                        ?>
                                    </td>  
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>