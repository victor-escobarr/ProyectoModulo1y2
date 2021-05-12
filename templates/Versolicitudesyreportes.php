<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <?php
      echo "    <table>
      <tr>
        <td><img src='../statics/LogoIni.jpg' width='100'></td>
        <td><h1>Enigma Books</h1></td>
      </tr>
    </table>
    <fieldset>
      <legend><h2>Solicitudes y Reportes</h2></legend>
      <table border=1 style='text-align: center;'>
        <tr>
          <td>Usuario</td>
          <th>Reporte/Solicitud</th>
        </tr>
        <tr>
          <td>Libro</td>
          <td>Autor</td>
        </tr>
        <tr>
          <td>Año</td>
          <td>Editorial</td>
        </tr>
        <tr>
          <td colspan='2'>Razones del Reporte o Solicitud</td>
        </tr>
        <tr>
          <td><input type='submit' name='Ok' value='Aceptar'></td>
          <td><input type='submit' name='Nop' value='Rechazar'></td>
        </tr>
      </table>
    </fieldset>
    <br>
      <input type='submit' name='GoBack' value='Regresar'>";
    ?>
  </body>
</html>