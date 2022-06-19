<?php
//registro de usuarios
    include_once("conexion.php");
    
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    $correo=$_POST['correo'];
    $sexo=$_POST['sexo'];


    $sentencia=$base_de_datos->prepare("INSERT INTO usuarios (nombre, apellido, usuario, password, correo, sexo) VALUES (:nombre, :apellido, :usuario, :password, :correo, :sexo);");

    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->bindParam(':apellido', $apellido);
    $sentencia->bindParam(':usuario', $usuario);
    $password = password_hash($password, PASSWORD_BCRYPT);
    $sentencia->bindParam(':password', $password);
    $sentencia->bindParam(':correo', $correo);
    $sentencia->bindParam(':sexo', $sexo);

    if($sentencia->execute()){
        return header("Location: modulo_usuario.php");
        echo "script> alert('Usuario agregado'); </script>";
    }else{
        return "error";
    }
?>