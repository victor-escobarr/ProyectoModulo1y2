<?php
include("../dynamics/config.php");
$conexion = connect_db();
$Titulo="Titulo";
$id="id_libro";
$imagen="Imagen";
$cuenta=0;
$lib="id_libro";
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
    <table style='text-align:center'>
      <tr>
        <td><img src='../statics/LogoIni.jpg' width='100'></td>
        <td colspan='2'><h1>Enigma Books</h1></td>
        <td><img src='../statics/LetrasLogo.jpg' width='150'></td>
      </tr>
    </table>
    <table>
    <tr>
      <td><img src='../statics/heart-png.png' width='50'></td>
      <td><h2>Libros Favoritos</h2></td>
      <td><img src='../statics/heart-png.png' width='50'></td>
    </tr>
  </table>
    <table style='text-align:center'>
    <tr>";
    $consultasql="SELECT * FROM LibrosFav WHERE id_usuario=117001778";
    $query= mysqli_query($conexion,$consultasql);
    while($row1=mysqli_fetch_array($query)){
      $key=$row1[$lib];
      $c="SELECT * FROM Libro WHERE id_libro=$key";
      $q= mysqli_query($conexion,$c);
      while($row=mysqli_fetch_array($q)){
        if($cuenta==4)
      {
        $cuenta=1;
      }
      else{
        $cuenta++;
      }
     if($cuenta==1)
     {
       echo "<tr>";
     }
      echo "<td>";
      echo "<img src='".$row[$imagen]."' width=200>";
      echo "<br>";
      echo $row[$Titulo];
      echo "<br>";
      echo $row[$id];
      echo "<br>";
      //Cambia de acuerdo al Tipo de Usuario
      echo "<form action='DatosdelLibro.php' method='post'>";
        echo "<input type='hidden' name='Lib' value=$row[$id]>";
        echo "<input type='submit' name='VerLib' value='Ver Libro'>";
      echo "</form>";
      echo "</td>";
      if($cuenta==4)
      {
        echo "</tr>";
    }
  }
}
    echo "</tr>
   </table>
   <br>
   <form action='Redireccionar.php' method='post'>
    <input type='submit' name='GoBack' value='Regresar'>
  </form>
  </body>
</html>";
?>