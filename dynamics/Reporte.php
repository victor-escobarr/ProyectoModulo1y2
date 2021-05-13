<?php
include("../dynamics/config.php");
$conexion = connect_db();
$Titulo="Titulo";
$id="id_libro";
$Autor="Autor";
$name=0;
$no=0;
$Creador=0;
if(isset($_POST["Usar"])){
  $Libro=$_POST["Usar"];
        $consultasql="SELECT * FROM Libro WHERE id_libro=$Libro";
        $query= mysqli_query($conexion,$consultasql);
        while($row=mysqli_fetch_array($query)){
        $name=$row[$Titulo];
        $no=$row[$id];
        $Creador=$row[$Autor];
      }
}
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
    <form action='Reporte.php' method='post'>
      <fieldset>
        <legend><h2>Reporte</h2></legend>
        <h3>Datos del Usuario:</h3>
        Numero de Cuenta o RFC:<input type='text' name='idUsuario'>
        <br>
        <br>
        Nombre Completo:<input type='text' name='nameUsuario'>
        <br>
        <br>
        <h3>Recurso a Reportar</h3>
        Titulo de la Obra:<input type='text' name='Obra' value='".$name."'>
        <br>
        <br>
        Autor:<input type='text' name='Autor' value='".$Creador."'>
        <br>
        <br>
        id del Libro:<input type='text' name='id' value='".$no."'>
        <br>
        <br>
        Razones:
        <select name='TipoRepo'>
          <option value='1'>Contenido más 18</option>
          <option value='2'>Contenido Violento</option>
          <option value='3'>Presenta un Discurso de Odio</option>
          <option value='4'>Contribuye a la Desinformación</option>
          <option value='5'>Incita a atentar contra la integridad propia o de otros</option>
        </select>
        <br><br>
        <input type='submit' name='Solicutar' value='Enviar Reporte'>
      </fieldset>
      <br>
    </form>
    <form action='Redireccionar.php' method='post'>
    <input type='submit' name='GoBack' value='Regresar'>
    </form>";
  if (isset($_POST["Solicutar"])){
  $idus = $_POST["idUsuario"];
  $Val = $_POST["id"];
  $Repo = $_POST["TipoRepo"];
  $sql = "INSERT INTO Reporte (id_libro, id_usuario, TipoRepo) VALUES ('$Val','$idus','$Repo')";
  $query = mysqli_query($conexion, $sql); 
  if ($query) {
    echo "Tu Reporte se ha subido correctamente";
  } else {
    echo "Tu Reporte no se ha subido correctamente";
  }
}
    ?>
  </body>
</html>