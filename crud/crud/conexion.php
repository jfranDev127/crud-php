<?php
    $host = "localhost";
    $user = "francisco";
    $password = "081095";
    $db = "crudtest";

    try{
        $base_de_datos=new PDO('mysql:host=localhost;dbname='.$db,$user,$password);
        //echo "<script> alert('Conexion exitosa'); </script>";
    }catch(Exception$e){
        //echo "<script> alert('Conexion fallida'); </script>";
    }
?>

