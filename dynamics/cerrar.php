<?php
    session_start();
    if(isset($_POST["Cerrar"])){
        session_unset();
        session_destroy();
    }
    header("location: ./Iniciarsesion.php");
?>