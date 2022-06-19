<?php
    include_once("conexion.php");

    $query=$base_de_datos->query("SELECT * FROM usuarios;");
    $usuarios=$query->fetchAll(PDO :: FETCH_OBJ);
    //print_r($usuarios);
    

?>