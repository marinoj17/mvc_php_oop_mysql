
<div class="limiter">
<div class="container-table100">
<div class="wrap-table100">
<div class="table100">
<div class="contenedor" text-align="center"><h1>REGISTRAR USUARIO</h1></div>	
<form action='Controllers/usuario_controller.php' method='post'>
	<input type='hidden' name='action' value='register'>
	<table>
		<thead>
			<tr>
				<td><h5><p>Registro de usuario</p></h5></td><td></td>
			</tr>
		</thead>
		<tr>
			<td><label>Alias:</label></td><td><input type='text' name='alias'></td>
		</tr>
		<tr>
			<td><label>Nombres: </label></td><td><input type='text' name='nombres'></td>
		</tr>
		<tr>
			<td><label>Email:</label></td><td><input type='text' name='email'></td>
		</tr>
	</table>
		
	<input class="button span radius" type='submit' value='Guardar'>
</form>
</div>
</div>
</div>
</div>