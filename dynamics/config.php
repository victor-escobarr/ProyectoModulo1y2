<?php
define("dbuser", "root");
define("dbhost", "localhost");
define ("PASSWORD","");
define ("DB", "Biblioteca");

function connect_db(){
    $con = mysqli_connect(dbhost,dbuser,  PASSWORD,DB );
    if(!$con){
        echo "NO se pudo acerder a la base de datos";
    }
    return $con;
}
?>