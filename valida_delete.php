<meta charset="utf-8"> 
<?php
$codigo = $_POST['codigo'];
$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "agenda";
$conexao = mysqli_connect($host, $user, $pass, $base);

$resultaDaQueryInsert = mysqli_query ($conexao, "DELETE FROM agenda WHERE id_evento = '$codigo'");


$resultaDaQuerySelect = mysqli_query ($conexao, "SELECT * FROM agenda");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos Cadastrados</title>
    <link rel="stylesheet" href="bd.css">
</head>
<body>
<a href="index.php">
                    <button class="button" type="button">home</button>
                </a>

    <table class='event-table'>
        <thead>
            <tr>
                <th>Código do Evento</th>
                <th>Nome do Evento</th>
                <th>Data do Evento</th>
                <th>Responsavel pelo Evento</th>
                <th>Hora inicio</th>
                <th>Hora fim</th>
                <th>descrição Evento</th>
                <th>local Evento</th>
            </tr>
        </thead>
        <tbody>
            <?php
           
            if (mysqli_num_rows($resultaDaQuerySelect) > 0) {
                while ($escrever = mysqli_fetch_array($resultaDaQuerySelect)) {
                    echo "<tr>
                            <td>" . htmlspecialchars($escrever['id_evento']) . "</td>
                            <td>" . htmlspecialchars($escrever['nome_evento']) . "</td>
                            <td>" . htmlspecialchars($escrever['date_evento']) . "</td>
                            <td>" . htmlspecialchars($escrever['responsavel_evento']) . "</td>
                            <td>" . htmlspecialchars($escrever['hora_inicio']) . "</td>
                            <td>" . htmlspecialchars($escrever['hora_fim']) . "</td>
                             <td>" . htmlspecialchars($escrever['descricao_evento']) . "</td>
                             <td>" . htmlspecialchars($escrever['local_evento']) . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Nenhum evento cadastrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <?php mysqli_close($conexao); ?>
    
</body>
</html>

