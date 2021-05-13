<?php
include("../dynamics/config.php");
$Titulo="Titulo";
$id="id_libro";
$imagen="Imagen";
$cuenta=0;
 echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width'>
    <title>repl.it</title>
    <link href='style.css' rel='stylesheet' type='text/css' />
  </head>
  <body>
    <table style='text-align:center'>
      <tr>
        <td><img src='../statics/LogoIni.jpg' width='100'></td>
        <td colspan='2'><h1>Enigma Books</h1></td>
        <td><img src='../statics/LetrasLogo.jpg' width='150'></td>
      </tr>
      <tr>
        <form action='Redireccionar.php' method='post'>
          <td colspan='4'>Buscar: <input type='search' name='buscar'></td>
          <td rowspan='3'>
              <input type='submit' name='Perfil' value='Perfil'>
              <br>
              <input type='submit' name='LibFav' value='Libros Favoritos'>
              <br>
              <input type='submit' name='VerSols' value='Ver Solicitudes'>
              <br>
              <input type='submit' name='Añdir' value='Añadir Material'>
              <br>
              <input type='submit' name='Historial' value='Historial de Descargas'>
              <br>
              <input type='submit' name='VerUs' value='Ver Usuarios'>
              <br>
              <input type='submit' name='Cerrar' value='Cerrar Sesión'>
              <br>
          </td>
        </form>
      </tr>
      <tr>
        <td colspan='4'><input type='radio' name='Buscar' value='Name'>Nombre
        <input type='radio' name='Buscar' value='Year'>Año
        <input type='radio' name='Buscar' value='Categoría'>Categoría
        <input type='radio' name='Buscar' value='Genero'>Genero
        <input type='radio' name='Buscar' value='Edit'>Editorial
        <input type='radio' name='Buscar' value='Autor'>Autor</td>
      </tr>";
      $conexion = connect_db();
      $consultasql="SELECT * FROM Libro";
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
        echo "<form action='Datos.php' method='post'>";
          echo "<input type='hidden' name='Lib' value=$row[$id]>";
          echo "<input type='submit' name='VerLib' value='Ver Libro'>";
        echo "</form>";
        echo "</td>";
        if($cuenta==4)
        {
          echo "</tr>";
        }
      }
      echo "
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Equipo Tea Rexes UWU <br> Proyecto del Modulo 1 y del 2 <br> Ayuda nos estamos Muriendo</td>
      </tr>
    </table>
  </body>
</html>";
?>