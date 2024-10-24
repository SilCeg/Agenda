
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edição</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <form action="valida_edicao.php" method="POST">
<fieldset>
<table>
  <tr>
  <td> Informe o codigo Do evento que você deseja alterar: </td>
  <td><input size="4" name="codigo"></td>
  </tr>
  <tr>
  <td> Informe a nova data do Evento: </td>
  <td><input type="date"  name="data"required></td> 
  </tr>
  <tr>
  <td> Informe o novos responsavel pelo Evento: </td>
  <td><input type="text" size="100" name="responsavel" required></td> 
  </tr>
  <tr>
  <td> Informe o novo Horario de inicio do evento: </td>
  <td><input type="time" name="hora_inicio" required></td> 
  </tr>
  <tr>
  <td> Informe o novo Horario do termino do evento: </td>
  <td><input type="time" name="hora_fim" required></td> 
  </tr>
  <td> Informe o novo local do evento: </td>
  <td><input type="text" name="local" required></td> 
  </tr>
  <tr>
  <td colspan=2><input type="SUBMIT" value="Cadastrar"></td>
  </tr>
</table>
</fieldset>
</form>
  </body>
  </html>  

