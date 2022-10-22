<?php
	class Db
	{
		private static $instance=NULL;
		
		private function __construct(){}

		private function __clone(){}
		
		public static function getConnect(){
			if (!isset(self::$instance)) {
				$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
				self::$instance= new PDO('mysql:host=us-cdbr-east-06.cleardb.net;dbname=heroku_0246d367bae1c3d','bd62f65351bd78','28bc1d89');
			}
			return self::$instance;
		}
	}
?>