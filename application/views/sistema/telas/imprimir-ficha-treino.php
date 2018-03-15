
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
        <div>
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
                    <table border="1" cellspacing="0" cellpadding="2" bordercolor="666633" style="width: 100%; text-align: center; 
                           border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th style="padding: 15px; background-color: #A9A9A9;">EXERCÍCIO</th>
                                <th style="padding: 10px; background-color: #A9A9A9;">SÉRIE</th>
                                <th style="padding: 10px; background-color: #A9A9A9;">REPETIÇÕES</th>
                                <th style="padding: 10px; background-color: #A9A9A9;">CARGA (kg)</th>
                                <th style="padding: 5px; background-color: #A9A9A9;">DOM</th>
                                <th style="padding: 5px; background-color: #A9A9A9;">SEG</th>
                                <th style="padding: 5px; background-color: #A9A9A9;">TER</th>
                                <th style="padding: 5px; background-color: #A9A9A9;">QUA</th>
                                <th style="padding: 5px; background-color: #A9A9A9;">QUI</th>
                                <th style="padding: 5px; background-color: #A9A9A9;">SEX</th>
                                <th style="padding: 5px; background-color: #A9A9A9;">SAB</th>
                            </tr>
                        </thead>
                        <tbody>  
                            <?php
                            foreach ($treinosAluno as $treinoAluno) {
                                for ($i = 0; $i < count($exerciciosTreinos); $i++) {
                                    for ($j = 0; $j < count($exerciciosTreinos[$i]); $j++) {
                                        if ($exerciciosTreinos[$i][$j]['idTreino'] == $treinoAluno->idTreino) {
                                            ?>
                                            <tr>
                                                <td><?php echo $exerciciosTreinos[$i][$j]['nomeExercicio']; ?></td>
                                                <td><?php echo $exerciciosTreinos[$i][$j]['serieExercicioTreino']; ?></td>
                                                <td><?php echo $exerciciosTreinos[$i][$j]['repeticoesExercicioTreino']; ?></td>
                                                <td><?php echo $exerciciosTreinos[$i][$j]['cargaExercicioTreino']; ?></td>
                                                <td><?php if ($treinoAluno->domingo == true) echo "X" ?></td>
                                                <td><?php if ($treinoAluno->segunda == true) echo "X" ?></td>
                                                <td><?php if ($treinoAluno->terca == true) echo "X" ?></td>
                                                <td><?php if ($treinoAluno->quarta == true) echo "X" ?></td>
                                                <td><?php if ($treinoAluno->quinta == true) echo "X" ?></td>
                                                <td><?php if ($treinoAluno->sexta == true) echo "X" ?></td>
                                                <td><?php if ($treinoAluno->sabado == true) echo "X" ?></td>                                                
                                            </tr>
                                            <?php
                                        }
                                    }
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>