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
        <td><img src='../statics/LogoIni.jpg' width='100'></td>
        <td><h1>Enigma Books</h1></td>
      </tr>
    </table>
    <form action='VistaSeguncuenta.php' method='post'>
      <fieldset style='width: 200px'>
        <legend><h3>Crear Cuenta</h3></legend>
        Nombre(s) <br> <input type='text' name='NombreUsuario' placeholder='Ingrese su(s) nombre(s)'>
        <br>
        Apellidos<br><input type='text' name='ApellidosUsuario' placeholder='Ingrese sus apellidos'>
        <br>
        Correo Instituciional <br> <input type='email' name='CorreoUsuario' placeholder='Ingrese su correo'>
        <br>
        Fecha de Nacimiento <br> <input type='date' name='FNUsuario'>
        <br>
        Numero de Cuenta o RFC <br> <input type='text' name='id_usuario' placeholder='Ingrese su #decuenta o RFC'>
        <br>
        Contraseña <br> <input type='password' name='ContraUsuario' placeholder='Ingrese su contrseña'>
        <br>
        Usuario <br>
        <select>
          <option value='1'>Alumno</option>
          <option value='2'>Profesor</option>
          <option value='2'>Tecnico Académico</option>
           <option value='2'>Laboratorista</option>
        </select>
        <br>
        Tipo de Cuenta <br>
        <select>
          <option value='Lector'>Lector</option>
          <option value='Bibliotecario'>Bibliotecario</option>
          <option value='Administrador'>Administrador</option>
        </select>
        <table>
          <tr>
            <td><br><input type='submit' name='CrearCuenta'value='Crear Cuenta'></td>
          </form>
          <form>
            <td><br><input type='submit' name='GoBack' value='Regresar'></td>
          </form>
            
          </tr>
        </table>
      </fieldset>
  </body>
</html>";
?>