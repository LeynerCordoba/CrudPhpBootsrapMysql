
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<form  action="metodos/guardar.php" method="POST" class="main">

<div class="form-group">
<label for="nombre">Nombre:</label>
<input type="text" name="nombre" placeholder="Ingrese Nombre" class="form-control">
</div>

<div class="form-group">
<label for="edad">Edad:</label>
<input type="number" name="edad" placeholder="Ingrese Edad" class="form-control">
</div>

<div class="form-group">
<label for="direccion">Direccion:</label>
<input type="text" name="direccion" placeholder="Ingrese Direccion" class="form-control">
</div>

<div class="form-group">
<button type="submit" class="btn btn-primary">Guardar</button>
</div>

</form>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
