<html>
<link rel="stylesheet" href="Assets/css/stilo-mvc.css">
<link rel="stylesheet" href="Assets/css/style.css">

<head>
	<title>Bienvenido MVC </title>
</head>
<body>
	<div class="contenedor" text-align="center"><h1>CRUD MVC PDO CON INTEGRACION MYSQL</h1></div>

<div class="table100">	
	<table>
	<thead>
		<tr class="table100-head">			
			<td><h5><a class="button radius" href="?controller=usuario&action=register"><span class="icon-user-plus"></span>Ingresar</a></h5></td>
			<td><h5><a class="button radius" href="?controller=usuario&action=index"><span class="icon-table"></span>Ver Usuarios</a></h5></td>
		</tr>
</thead>
	</table>
</div>
	<?php require_once('routes.php'); ?>
</body>
<footer>
<div class="contenedor" text-align="center"><h4>Realizado por: Marcos M. 2020</h4></div>
</footer>
</html>