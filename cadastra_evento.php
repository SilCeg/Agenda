<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Evento</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <form action="valida_evento.php" method="POST">
        <fieldset>
            <legend>Cadastro de Evento</legend>
            <table>
                <tr>
                    <td>Insira o nome do evento:</td>
                    <td><input type="text" size="100" name="nome" required></td>
                </tr>
                <tr>
                    <td>Insira a data do evento:</td>
                    <td><input type="date" name="data" required></td>
                </tr>
                <tr>
                    <td>Responsável pelo evento:</td>
                    <td><input type="text" size="100" name="responsavel" required></td>
                </tr>
                <tr>
                    <td>Hora de início:</td>
                    <td><input type="time" name="hora_inicio" required></td>
                </tr>
                <tr>
                    <td>Hora de fim:</td>
                    <td><input type="time" name="hora_fim" required></td>
                </tr>
                <tr>
                    <td>Descrição do evento:</td>
                    <td><input type="text" name="descricao" rows="4" cols="50" required></td>
                </tr>
                <tr>
                    <td>Local do evento:</td>
                    <td><input type="text" name="local" rows="4" cols="50" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Cadastrar"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
