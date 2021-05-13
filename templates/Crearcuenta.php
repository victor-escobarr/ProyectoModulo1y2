<?php
include("../dynamics/config.php");
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
    <form action='Crearcuenta.php' method='post'>
      <fieldset style='width: 200px'>
        <legend><h3>Crear Cuenta</h3></legend>
        <label>Nombre(s) <br>
          <input type='text' name='NombreUsuario' placeholder='Ingrese su(s) nombre(s)' required>
        </label>
        <br>
        <label>Apellido paterno<br>
          <input type='text' name='ApellidoPaterno' placeholder='Ingrese su apellido' required>
        </label>
        <br>
        <label>Apellido materno<br>
          <input type='text' name='ApellidoMaterno' placeholder='Ingrese su apellido' required>
        </label>
        <br>
        <label>Correo Institucional <br> 
          <input type='email' name='CorreoUsuario' placeholder='Ingrese su correo' required>
        </label>  
        <br>
        <label>Fecha de Nacimiento <br> 
          <input type='date' name='FNUsuario' required>
        </label>  
        <br>
        <label>Numero de Cuenta o RFC <br> 
          <input type='text' name='id_usuario' maxlength='11' placeholder='Ingrese su #decuenta o RFC' required>
        </label>  
        <br>
        <label>Contraseña <br> 
          <input type='password' name='ContraUsuario' placeholder='Ingrese su contrseña' required>
        </label>
        <br>
        <label>Usuario <br>
        <select name='tipoUsuario' required>
          <option value=''>Seleccione una opción</option>
          <option value='1'>Alumno</option>
          <option value='2'>Profesor</option>
          <option value='3'>Tecnico Académico</option>
          <option value='4'>Laboratorista</option>
        </select>
        </label>
        <br>
        <label>Tipo de Cuenta <br>
        <select name='tipoCuenta' required>
          <option value=''>Seleccione una opción</option>
          <option value='1'>Lector</option>
          <option value='2'>Bibliotecario</option>
          <option value='3'>Administrador</option>
        </select>
        </label>
        <table>
          <tr>
            <td><br><input type='submit' name='CrearCuenta'value='Crear Cuenta'></td>
          </form>
          <form action='Iniciarsesion.php'>
            <td><br><input type='submit' name='GoBack' value='Regresar'></td>
          </form>
            
          </tr>
        </table>
      </fieldset>
  </body>
</html>";

$conexion = connect_db();
if (isset($_POST["NombreUsuario"])){
  $nombre = $_POST["NombreUsuario"];
  $apellidop = $_POST["ApellidoPaterno"];
  $apellidom = $_POST["ApellidoMaterno"];
  $correo = $_POST["CorreoUsuario"];
  $fechaNacimiento = $_POST["FNUsuario"];
  $identificador = $_POST["id_usuario"];
  $contra = $_POST["ContraUsuario"];
  $usuario = $_POST["tipoUsuario"];
  $cuenta = $_POST["tipoCuenta"];

  $sql = "INSERT INTO usuario (id_usuario, Nombres, Paterno, Materno, Correo, TipoUsuario, FechaNat, Contrasenia, TipoCuenta) VALUES ('$identificador','$nombre','$apellidop','$apellidom','$correo','$usuario', '$fechaNacimiento', '$contra','$cuenta')";
  $query = mysqli_query($conexion, $sql); 
  if ($query) {
    echo "Tus datos se han subido correctamente";
  } else {
    echo "Tus datos no se han subido";
  }
}
?>
