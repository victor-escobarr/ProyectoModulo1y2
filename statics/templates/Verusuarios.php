<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <!-- <link href="style.css" rel="stylesheet" type="text/css"> -->
  </head>
  <body>
    <?php
      echo "<table>
      <tr>
        <td><img src='../statics/LogoIni.jpg' width='100'></td>
        <td><h1>Enigma Books</h1></td>
      </tr>
    </table>
    <fieldset>
      <legend><h2>Ver Usuarios</h2></legend>
      <form action='' method='POST'>
      <input type='submit' name='Agregar' value='Agregar Usuario'>
      <br><br>
      <table border=1>
        <tr>
          <td>Usuario</td>
          <td>id_Usuario</td>
        </tr>
        <tr>
          <td colspan>Tipo de Cuenta</td>
          <td colspan>
          <form action='' method='POST'>
            <input type='submit' name='Eliminar' value='Eliminar Usuario'>
          </form>
          </td>
        </tr>
      </table>
    </fieldset>
    <br>
    <form action='Redireccionar.php' method='post'>
      <input type='submit' name='GoBack' value='Regresar'>
    </form>";
    ?>
  </body>
</html>