<?php
session_start();
include ('../conexion.php');
$nombre = htmlentities($_POST['nombre']);
$edad = htmlentities($_POST['edad']);
$direccion = htmlentities($_POST['direccion']);

$cmd = "update  estudiante set  nombre = '$nombre',edad=$edad,direccion='$direccion' where id= ".$_SESSION['id'];
if($result = mysqli_query($con,$cmd)){
	session_destroy();
	header("location:../index.php");
}else{
	echo "Error al registrar: ".mysqli_error($con);
}



?>