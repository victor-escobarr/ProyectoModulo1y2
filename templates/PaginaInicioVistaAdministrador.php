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
    <table style='text-align:center'>
      <tr>
        <td><img src='../statics/LogoIni.jpg' width='100'></td>
        <td colspan='2'><h1>Enigma Books</h1></td>
        <td><img src='../statics/LetrasLogo.jpg' width='150'></td>
      </tr>
      <tr>
        <form action='Resultados.php' method='post'>
          <td colspan='3'>Buscar: <input type='search' name='buscar'></td>
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
              <input type='submit' name='Historial' value='Ver Usuarios'>
              <br>
              <input type='submit' name='Cerrar' value='Cerrar Sesión'>
              <br>
          </td>
      </tr>
      <tr>
        <td colspan='3'><input type='radio' name='Buscar' value='Name'>Nombre
        <input type='radio' name='Buscar' value='Year'>Año
        <input type='radio' name='Buscar' value='Categoría'>Categoría
        <input type='radio' name='Buscar' value='Genero'>Genero
        <input type='radio' name='Buscar' value='Edit'>Editorial
        <input type='radio' name='Buscar' value='Autor'>Autor</td>
      </tr>
      <tr>
        <td>Libro id_libro <input type='submit' name='VerLib' value='Ver Libro'></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Descrpción</td>
      </tr>
    </form>
    </table>
  </body>
</html>";
?>