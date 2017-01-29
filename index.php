<?php 
include ('conexion.php');
?>
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>


<table class="table table-hover table-stripper table-condensed">
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Edad</th>
		<th>Direccion</th>
		<th>Operaciones</th>
	</tr>
	<?php 
		$cmd = "select * from estudiante order by id desc";
		$query = mysqli_query($con,$cmd);
		while ($dato = mysqli_fetch_array($query)){
			echo '
				<tr>
		<th>'.$dato['id'].'</th>
		<th>'.$dato['nombre'].'</th>
		<th>'.$dato['edad'].'</th>
		<th>'.$dato['direccion'].'</th>
		<th>		
		<a href="modificar.php?id='.$dato['id'].'" class="btn btn-primary">Modificar</a>
		<a href="eliminar.php?id='.$dato['id'].'" class="btn btn-danger">Eliminar</a>
		</th>
	</tr>';
		}	
	?>
	
</table>
<br><br>

<div class="main row">
<div class="col-lg-2 col-offset-1">
<a href="nuevo.php" class="btn btn-primary">Nuevo</a>
</div>

<div class="col-lg-2 col-offset-1">
<button class="btn btn-primary">Actualizar</button>
</div>
</div>
<?php
mysqli_close($con);
?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>