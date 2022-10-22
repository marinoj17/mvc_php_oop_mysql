<html> 
<head>
<link rel="stylesheet" href="http://localhost/MVC/Assets/css/stilo-mvc.css">
<link rel="stylesheet" href="http://localhost/MVC/MVC/Assets/css/style.css">
</head>
<body>
<div class="limiter">
<div class="container-table100">
<div class="wrap-table100">
<div class="table100">
<div class="contenedor" text-align="center"><h1>ACTUALIZAR USUARIO</h1></div>
<form action='usuario_controller.php' method='post'>
	<input type='hidden' name='action' value='update'>
		<input type='hidden' name='id' value='<?php echo $usuario->id; ?>'>
		<table>
		<thead>
			<tr>
				<td><h3><p>Registro de usuario</p></h3></td><td></td>
			</tr>
		</thead>
		<tr>
			<td><label><h4>Alias:</h4></label></td><td><input type='text' name='alias' value='<?php echo $usuario->alias; ?>'></td>
		</tr>
		<tr>
			<td><label><h4>Nombres:</h4></label></td><td><input type='text' name='nombres'  value='<?php echo $usuario->nombres; ?>'></td>
		</tr>
		<tr>
			<td><label><h4>Email:</h4></label></td><td><input type='text' name='email' value='<?php echo $usuario->email; ?>'></td>
		</tr>
	</table>
		
	<input class="button span radius" type='submit' value='Actualizar'>
</form>
</div>
</div>
</div>
</div>
</body>
</html>
