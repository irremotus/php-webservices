<?php
	define("BASE_PATH", '/php-webservices'); /* the web accessible path to this folder */

	session_start();

	function my_autoload($classname) {
		if (file_exists($_SERVER['DOCUMENT_ROOT'].BASE_PATH.'/classes/'.$classname.'.class.php')) {
			require_once $_SERVER['DOCUMENT_ROOT'].BASE_PATH.'/classes/'.$classname.'.class.php';
		}
	}
	spl_autoload_register('my_autoload');
?>
