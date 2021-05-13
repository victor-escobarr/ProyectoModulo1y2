<?php
include("../dynamics/config.php");
$conexion = connect_db();
$Obra=0;
$Autor=0;
$Año=0;
$Edicion=0;
$Editorial=0;
$feedback=0;
$Usu=0;
echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width'>
    <title>repl.it</title>
    <link href='style.css' rel='stylesheet' type='text/css'/>
  </head>
  <body>
      <table>
      <tr>
        <td><img src='../statics/LogoIni.jpg' width='100'></td>
        <td><h1>Enigma Books</h1></td>
      </tr>
    </table>
    <form action='SolicituddeRecursos.php' method='post'>
      <fieldset>
        <legend><h2>Solicitar Nuevos Recursos</h2></legend>
        <h3>Datos del Solicitante:</h3>
        Numero de Cuenta o RFC:<input type='text' name='idUsuario'>
        <br><br>
        Nombre Completo:<input type='text' name='nameUsuario'>
        <br><br>
        <h3>Recurso Solicitado</h3>
        Titulo de la Obra:<input type='text' name='Obra'>
        <br><br>
        Autor:<input type='text' name='Autor'>
        <br><br>
        Año:<input type='number' name='Año'>
        <br><br>
        Edición:<input type='text' name='Edición'>
        <br><br>
        Editorial:<input type='text' name='Editorial'>
        <br><br>
        Razones:
        <br>
        <textarea rows='10' cols='50' name='feedback' placeholder='Escribe las razones por la que crees que seria un recurso escencial en la biblioteca'></textarea>
        <br>
        <br>
        <input type='submit' name='Solicutar' value='Enviar Solicitud'>
      </fieldset>
      <br>
      </form>
      <form action='Redireccionar.php' method='post'>
        <input type='submit' name='GoBack' value='Regresar'>  
    </form>";
    if (isset($_POST["Solicutar"])){
      $Obra=$_POST["Obra"];
      $Autor=$_POST["Autor"];
      $Año=$_POST["Año"];
      $Edicion=$_POST["Edición"];
      $Editorial=$_POST["Editorial"];
      $feedback=$_POST["feedback"];
      $Usu=$_POST["idUsuario"];
      $sql = "INSERT INTO Solicitud (id_usuario, Razones, Obra, Autor, Year, Edicion, Editorial) VALUES ('$Usu','$feedback','$Obra','$Autor','$Año','$Edicion','$Editorial')";
      $query = mysqli_query($conexion, $sql); 
      if ($query) {
        echo "Tu Solicitud se ha subido correctamente";
      } else {
        echo "Tu Solicitud no se ha subido correctamente";
      }
    }
    ?>
  </body>
</html>