<?php
include ('conexion.php');
session_start();
$id = htmlentities($_GET['id']);
$_SESSION['id']=$id;
$cmd = "select *  from estudiante where id= $id";
$result = mysqli_query($con,$cmd) or die ("Error de BD ".mysqli_error($con));
$dato = mysqli_fetch_assoc($result);

?>



<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<form  action="metodos/modify.php" method="POST" class="main">

<div class="form-group">
<label for="nombre">Nombre:</label>
<input type="text" name="nombre" value=" <?php echo $dato['nombre']; ?> " placeholder="Ingrese Nombre" class="form-control">
</div>

<div class="form-group">
<label for="edad">Edad:</label>
<input type="number" name="edad" value="<?php echo $dato['edad']; ?>" placeholder="Ingrese Edad" class="form-control">
</div>

<div class="form-group">
<label for="direccion">Direccion:</label>
<input type="text" name="direccion" value="<?php echo $dato['direccion']; ?>" placeholder="Ingrese Direccion" class="form-control">
</div>

<div class="form-group">
<button type="submit" class="btn btn-primary">Guardar</button>
</div>

</form>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
