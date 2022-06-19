<?php
include_once("conexion.php");

$id=$_POST['id'];


$sentencia=$base_de_datos->prepare("DELETE FROM usuarios WHERE id=:id;");

$sentencia->bindParam(':id', $id);


if($sentencia->execute()){
    return header("Location: modulo_usuario.php");
    //echo "script> alert('Usuario actualizado'); </script>";

}else{
    return "error";
}

?>