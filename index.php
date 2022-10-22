<?php 
		class Db
	{
		private static $instance=NULL;
		
		private function __construct(){}

		private function __clone(){}
		
		public static function getConnect(){
			if (!isset(self::$instance)) {
				$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
				self::$instance= new PDO('mysql:dbname=heroku_0246d367bae1c3d;host=us-cdbr-east-06.cleardb.net','bd62f65351bd78','28bc1d89',$pdo_options);
			}
			return self::$instance;
		}
	}
	// la variable controller guarda el nombre del controlador y action guarda la acción por ejemplo registrar 
	//si la variable controller y action son pasadas por la url desde layout.php entran en el if
	if (isset($_GET['controller'])&&isset($_GET['action'])) {
		$controller=$_GET['controller'];
		$action=$_GET['action'];		
	} else {
		$controller='usuario';
		$action='index';
	}	
	//carga la vista layout.php
	require_once('Views/layout.php');
?>
