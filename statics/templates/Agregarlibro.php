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
    <form>
      <fieldset>
        <legend><h2>Agregar Libro</h2></legend>
        <table>
          <tr>
            <td>Agregar Imagen<br><input type='file' name='Portada'></td>
            <td>
              Nombre<br><input type='text' name='Obra'>
              <br>
              Autor<br><input type='text' name='Autor'>
              <br>
              Genero<br><input type='text' name='Genero'>
              <br>
              Clasificación<br><input type='text' name='Clasificación'>
              <br>
              Año<br><input type='text' name='Año'>
              <br>
              Editorial<br><input type='text' name='Editorial'>
              <br>
              Categoria<br><input type='text' name='Categoria'>
              </td>
          </tr>
          <tr>
            <td>Descripción del Libro:
              <br>
            <textarea rows='10' cols='50'></textarea> </td>
            <td> <br>Agregar Archivo PDF del libro<br><input type='file' name='PDF'></td>
          </tr>
        </table>
        <input type='submit' name='SubArchivo' value='Subir datos del libro' >
      </fieldset>
    </form>
    <br>
    <form action='Redireccionar.php' method='post'>
      <input type='submit' name='GoBack' value='Regresar'>
    </form>
  </body>
</html>";
?>