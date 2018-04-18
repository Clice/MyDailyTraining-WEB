<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teste MDT</title>
    </head>
    <body>

        <h2>Enviar Notificação:</h2>

        <form name="treinos" action="enviarNotificacaoInstrutor.php" method="POST">

            <label for="nomeAluno">Nome do Aluno:</label>
            <input type="text" id="nomeAluno" name="nomeAluno">
            <br><br>
            <label for="tokenInstrutor">Token do Instrutor:</label>
            <input type="text" id="tokenInstrutor" name="tokenInstrutor">

            <button type="submit" value="enviar" name="btEnviar">Enviar</button>
        </form>
    </body>
</html>