<?php
include ('../conexion.php');
$nombre = htmlentities($_POST['nombre']);
$edad = htmlentities($_POST['edad']);
$direccion = htmlentities($_POST['direccion']);

$cmd = "insert into estudiante(nombre,edad,direccion) value('$nombre',$edad,'$direccion')";
if($result = mysqli_query($con,$cmd)){
	header("location:../index.php");
}else{
	echo "Error al registrar: ".mysqli_error($con);
}



?>