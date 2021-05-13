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
      echo "<table>
      <tr>
        <td><img src='../statics/LogoIni.jpg' width='100'></td>
        <td><h1>Enigma Books</h1></td>
      </tr>
    </table>
   
    <table border=1>
      <tr>
        <th colspan='2'><h2>Nombre Completo</h2></th>
      </tr>
      <tr>
        <td> </td>
        <th><h3>No. Cuenta o RFC</h3></th>
      </tr>
      <tr>
        <td>Tipo de Usuario</td>
        <td>Tipo de Cuenta</td>
      </tr>
      <tr>
        <td>Edad</td>
        <td>Fecha de Nacimiento</td>
      </tr>
      <tr>
        <td colspan='2'>Correo Electronico</td>
      </tr>
    </table>
    <br>
    <form action='Redireccionar.php' method='post'>
      <input type='submit' name='LibFav' value='Libros Favoritos'>
      <input type='submit' name='GoBack' value='Regresar'>
      <input type='submit' name='DeleteUs' value='Eliminar Usuario'>
    </form>";
    ?>
  </body>
</html>