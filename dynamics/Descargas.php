<?php
echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width'>
    <title>repl.it</title>
    <link href='style.css' rel='stylesheet' type='text/css' />
  </head>
  <body>
    <table>
      <tr>
        <td style='text-align:center'><img src='../statics/LogoIni.jpg' width='100'></td>
        <td><h1>Enigma Books</h1></td>
      </tr>
    </table>
    <fieldset>
      <legend><h2>Descargas</h2></legend>
      <table border=1;>
        <tr>
          <td rowspan='3'>Imagen del Libro</td>
          <td>Nombre Libro</td>
          <td>id_Libro</td>
        </tr>
        <tr>
          <td>Usuario</td>
          <td>id_Usuario</td>
        </tr>
        <tr>
          <td colspan='2'>Fecha y hora de Descarga</td>
        </tr>
      </table>
    </fieldset>
    <br>
    <form action='Redireccionar.php' method='post'>
      <input type='submit' name='GoBack' value='Regresar'>
    </form>
  </body>
</html>";
?>