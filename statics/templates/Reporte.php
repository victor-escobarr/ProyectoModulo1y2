<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <?php
      echo "    <table>
      <tr>
        <td><img src='../statics/LogoIni.jpg' width='100'></td>
        <td><h1>Enigma Books</h1></td>
      </tr>
    </table>
    <form action='Solicitudes.php' method='post'>
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
        Titulo de la Obra:<input type='text' name='Obra'>
        <br>
        <br>
        Autor:<input type='text' name='Autor'>
        <br>
        <br>
        id del Libro:<input type='text' name='id'>
        <br>
        <br>
        Razones:
        <select>
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
      <input type='submit' name='GoBack' value='Regresar'>
    </form>";
    ?>
  </body>
</html>