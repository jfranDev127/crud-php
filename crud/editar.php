<?php
include_once("conexion.php");

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$correo=$_POST['correo'];
$sexo=$_POST['sexo'];

$sentencia=$base_de_datos->prepare("UPDATE usuarios SET nombre=:nombre, apellido=:apellido, usuario=:usuario, password=:password, correo=:correo, sexo=:sexo WHERE id=:id;");

$sentencia->bindParam(':id', $id);
$sentencia->bindParam(':nombre', $nombre);
$sentencia->bindParam(':apellido', $apellido);
$sentencia->bindParam(':usuario', $usuario);
$sentencia->bindParam(':password', $password);
$sentencia->bindParam(':correo', $correo);
$sentencia->bindParam(':sexo', $sexo);

if($sentencia->execute()){
    return header("Location: index.php");
    //echo "script> alert('Usuario actualizado'); </script>";

}else{
    return "error";
}
?>