<?php
include("../dynamics/config.php");
$conexion = connect_db();
$Titulo="Titulo";
$id="id_libro";
$imagen="Imagen";
$cuenta=0;
if(isset($_POST['Find'])){
  $SeBusco=$_POST['Buscar'];
  $por=0;
  if(isset($_POST['Categoria'])){
    $p=$_POST['Categoria'];
  
    switch ($p) {
      case 1:
      $por="Year";
      break;
      case 2:
      $por="Categoria";
      break;
      case 3:
      $por="Genero";
      break;
      case 4:
      $por="Editorial";
      break;
      case 5:
      $por="Autor";
      break;
      default:
      $por="Titulo";
      break;
    }
  }
  else{
    $por="Titulo";
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
    <table style='text-align:center'>
    <tr>
      <td>Se busco: ".$SeBusco." Por: ".$por."</td>
    </tr>  
    <tr>";
    $consultasql="SELECT * FROM Libro WHERE $por LIKE '%$SeBusco%'";
    $query= mysqli_query($conexion,$consultasql);
    while($row=mysqli_fetch_array($query)){
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
    echo "</tr>
   </table>";
    ?>
  </body>
</html>