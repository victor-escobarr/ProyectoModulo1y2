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
    <form>
      <fieldset>
        <legend><h3>Iniciar Sesión</h3></legend>
        Numero de Cuenta o RFC:<input type='text' name='Id_Usuario'>
        <br><br>
        Contraseña:<input type='password' name='ContraseñaIUsuario'>
        <br><br>
    </form>
        <table>
          <tr>
          <form action='Paginainicial.php'>
            <td><input type='submit' name='Iiniciar' value='Iniciar Sesión'></td>
          </form>
          <form action='Crearcuenta.php'>
            <td><input type='submit' name='Crear' value='Crear Cuenta'></td>
          </form>
          </tr>
        </table>
      </fieldset>
  </body>
</html>";
?>