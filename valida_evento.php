<?php
$codigo = $_POST['nome'];
$nome = $_POST['nome'];
$data = $_POST['data'];
$responsavel = $_POST['responsavel'];
$hr_inicio = $_POST['hora_inicio'];
$hr_fim = $_POST['hora_fim'];
$descricao = $_POST['descricao'];
$local = $_POST['local'];
$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "agenda";


$conexao = mysqli_connect($host, $user, $pass, $base);

$resultaDaQueryInsert = mysqli_query($conexao, "INSERT INTO agenda(id_evento, nome_evento, date_evento, responsavel_evento, hora_inicio, hora_fim, descricao_evento, local_evento ) VALUES('$codigo' ,'$nome', '$data', '$responsavel', '$hr_inicio ','$hr_fim','$descricao', '$local')");


if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}


$resultaDaQuerySelect = mysqli_query($conexao, "SELECT * FROM agenda");


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
