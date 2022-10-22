<?php
	/**
	* Conexión a la base de datos
	* Autor: Elivar Largo
	* Sitio Web: wwww.ecodeup.com
	*/
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
?>