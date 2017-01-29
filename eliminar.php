<?php
include ('conexion.php');
$id = htmlentities($_GET['id']);

$cmd = "delete from estudiante where id= $id";
if($result = mysqli_query($con,$cmd)){
	header("location:index.php");
}else{
	echo "Error al Eliminar: ".mysqli_error($con);
}



?>