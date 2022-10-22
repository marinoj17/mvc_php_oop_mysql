<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://localhost/mvc/assets/css/stilo-mvc.css">
<link rel="stylesheet" href="https://localhost/mvc/assets/css/style.css">
</head>
<body>

<div class="limiter">
<div class="container-table100">
<div class="wrap-table100">
<div class="table100">	
<div class="contenedor" text-align="center"><h1>LISTADO</h1></div>
<table>
	<thead>
	<tr class="table100-head" >
		<td><h3>Id</h3></td>
		<td><h3>Alias</h3></td>
		<td><h3>Nombres</h3></td>
		<td><h3>Email</h3></td>
		<td colspan=2 ><h3>Acciones</h3></td>
	</tr>
</thead>
<?php
var_dump($usuarios);
	foreach ($usuarios as $usuario) { ?>
		
			<tr>
				<td><?php echo $usuario->id; ?></td>
				<td><?php echo $usuario->alias; ?></td>
				<td><?php echo $usuario->nombres;?></td>
				<td><?php echo $usuario->email;?></td>
				<td><a class="button small radius" href="Controllers/usuario_controller.php?action=update&id=<?php echo $usuario->id ?>">Actualizar</a> </td>
				<td><a class="button small radius" href="Controllers/usuario_controller.php?action=delete&id=<?php echo $usuario->id ?>">Eliminar</a> </td>
			</tr>		
	<?php } ?>
</table>
	</div>
	</div>
	</div>
	</div>
</body>
</html>