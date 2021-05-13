<?php
include("../dynamics/config.php");
$Titulo="Titulo";
$id="id_libro";
$imagen="Imagen";
$pdf="Pdf";
$Autor="Autor";
$Editorial="Editorial";
$Año="Year";
$Genero="Genero";
$Categoria="Categoria";
$Descrpcion="Descripción";
$cuenta=0;
$Libro=$_POST["Lib"];
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
    <table style='text-align:center' border='1'>";
    $conexion = connect_db();
        $consultasql="SELECT * FROM Libro WHERE $id=$Libro";
        $query= mysqli_query($conexion,$consultasql);
        while($row=mysqli_fetch_array($query)){
          $Abrir=$row[$pdf];
          echo $Abrir;
          echo "<tr>";
            echo "<td colspan='2'><img src='".$row[$imagen]."' width=500></td>";
          echo "</tr>";
          echo "<tr>
          <td colspan='2'>
            <a href='$Abrir' target='_blank'><input type='submit' name='Online' value='Leer en el Navegador'></a>
            <a href='$Abrir' download='$Abrir'><input type='submit' name='Descargar' value='Descargar'></a>
           <form action='Redireccionar.php' method='post'>
            <input type='hidden' name='Usar' value='$row[$id]'>
            <input type='submit' name='ALibFav' value='Agregar a Favoritos'>
            <input type='submit' name='Reporte' value='Reportar'>
            <input type='submit' name='Edit' value='Editar'>
            <input type='submit' name='Delete' value='Eliminar'>
          </form>
          </td>
        </tr>
        <tr>";
        echo "<td>".$row[$Categoria]."</td>
        <td>".$row[$Genero]."</td>
      </tr>
      <tr>
        <td>".$row[$Titulo]."</td>
        <td>".$row[$id]."</td>
      </tr>
      <tr>
        <td>".$row[$Autor]."</td>
        <td>".$row[$Año]."</td>
      </tr>
      <tr>
        <td colspan='2'>".$row[$Descrpcion]."</td>
      </tr>
    </table>";

        }
    
  echo " <form action='Redireccionar.php' method='post'>
  <input type='submit' name='GoBack' value='Regresar'>
</form>
</body>
</html>";
?>
?>