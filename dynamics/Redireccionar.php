<?php
include("../dynamics/config.php");
$id="id_libro";

    /*Este gran bloque de if's permite redirigir al usuario a las diversas páginas dependiendo el botón que presione.
    Recibe la acción desde cualquier página y a su vez redireccionar.php se encarga de mandarlo a otra. Además, si el botón debe generar más allá 
    de una reubicación también se encarga de ello para que la próxima página esté lista*/
    if(isset($_POST["Perfil"])){
        header('Location:./Perfil.php');
    }
    if(isset($_POST["LibFav"])){
        header('Location:./LibrosFavoritos.php');
    }
    if(isset($_POST["Solicitud"])){
        header('Location:./SolicituddeRecursos.php');
    }
    if(isset($_POST["VerSols"])){
        header('Location:./Versolicitudesyreportes.php');
    }
    if(isset($_POST["Añdir"])){
        header('Location:./Agregarlibro.php');
    }
    if(isset($_POST["Historial"])){
        header('Location:./Descargas.php');
    }
    if(isset($_POST["VerUs"])){
        header('Location:./Verusuarios.php');
    }
    if(isset($_POST["GoBack"])){
        //Cambiar dependiendo del tipo de Usuario.
        header('Location:./Iniciarsesion.php');
    }
    if(isset($_POST["ALibFav"])){
        $Libro=$_POST["Usar"];
        echo $Libro;
        $conexion = connect_db();
        $consultasql="SELECT * FROM Libro WHERE id_libro=$Libro";
        $query= mysqli_query($conexion,$consultasql);
        while($row=mysqli_fetch_array($query)){
            $insertar="INSERT INTO LibrosFav VALUES (117001778,$row[$id])";
            $query1= mysqli_query($conexion,$insertar);
        }
        header('Location:./LibrosFavoritos.php');
    }
    if(isset($_POST["Reporte"])){
        $Libro=$_POST["Usar"];
        echo "<form action='Reporte.php' method='post'>
            <input type='hidden' name='Usar' value='$Libro'>
            <input type='submit' name='Edit Libro' value='Reportar'>
          </form>";
    }
    if(isset($_POST["Edit"])){
        $Libro=$_POST["Usar"];
        echo "<form action='Editarlibro.php' method='post'>
            <input type='hidden' name='Usar' value='$Libro'>
            <input type='submit' name='EditLibro' value='Editar'>
          </form>";
    }
    if(isset($_POST["Delete"])){
        $Libro=$_POST["Usar"];
        echo $Libro;
        $conexion = connect_db();
        $c="DELETE FROM Descarga WHERE id_libro=$Libro";
        $query1= mysqli_query($conexion,$c);
        $o="DELETE FROM LibrosFav WHERE id_libro=$Libro";
        $query2= mysqli_query($conexion,$o);
        $n="DELETE FROM Reporte WHERE id_libro=$Libro";
        $query3= mysqli_query($conexion,$n);
        $consultasql="DELETE FROM Libro WHERE id_libro=$Libro";
        $query= mysqli_query($conexion,$consultasql);   
    }
    if(isset($_POST["Serach"])){
        $Busqueda=$_POST["busca"];
        $Sehizo=$_POST["Buscar"];
        echo "<form action='Resultadosbusqueda.php' method='post'>
            <input type='hidden' name='Buscar' value='$Busqueda'>
            <input type='hidden' name='Categoria' value=$Sehizo>
            <input type='submit' name='Find' value='Buscar'>
          </form>";
    }
?>