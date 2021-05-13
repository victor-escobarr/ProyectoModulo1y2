<?php
session_start();
include("../dynamics/config.php");

if (!isset($_POST['I_Id_Usuario'])) {
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
    <form action='Iniciarsesion.php' method='POST'>
      <fieldset>
        <legend><h3>Iniciar Sesión</h3></legend>
        <label>Numero de Cuenta o RFC:
          <input type='text' name='I_Id_Usuario' required>
        </label>
        <br><br>
        <label>Contraseña:
        <input type='password' name='I_ContraseñaIUsuario' required>
        </label>
        <br><br>
        <table>
          <tr>
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
} 


$conexion = connect_db();
if (isset($_POST['I_Id_Usuario'])) {
  $In_RFC = $_POST['I_Id_Usuario'];
  $In_cont = $_POST['I_ContraseñaIUsuario'];

  $_SESSION["In_usuario"] = $_POST["I_Id_Usuario"];
  $_SESSION["In_cont"] = $_POST["I_ContraseñaIUsuario"];

  if ("SELECT id_usuario FROM usuario WHERE id_usuario==$In_RFC" && "SELECT contrasenia FROM usuario WHERE contrasenia==$In_cont") {
    $SQL_cuenta = "SELECT * FROM usuario WHERE id_usuario=$In_RFC";
    $queryCuenta = mysqli_query($conexion, $SQL_cuenta);
    $row_cuenta = mysqli_fetch_array($queryCuenta);
  
    if ($row_cuenta["TipoCuenta"] == "3") {
      header("location: PaginaInicioVistaAdministrador.php");
    } elseif ($row_cuenta["TipoCuenta"] == "2") {
      header("location: PaginaInicioVistaBibliotecario.php");
    } elseif ($row_cuenta["TipoCuenta"] == "1") {
      header("location: PaginaInicioVistaLector.php");
    }
  } else {
    echo "<h1>Su Número de cuenta o contraseña no concuerdan con los datos registrados. Intente ingresar nuevamente.</h1>
        <form action='Iniciarsesion.php'>
          <td><input type='submit' value='Intentar de nuevo'></td>
        </form>";
  }
}
?>