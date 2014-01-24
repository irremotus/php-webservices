<?php
	define("WEB_BASE_PATH", '/php-webservices'); /* the web accessible path to this folder */
	$PHP_BASE_PATH = dirname(__DIR__.'/../');
	$SYSTEM_CLASS_PATH = $PHP_BASE_PATH.'/system_classes/';
	$PUBLIC_CLASS_PATH = $PHP_BASE_PATH.'/public_classes/';
	$PRIVATE_CLASS_PATH = $PHP_BASE_PATH.'/private_classes/';

	session_start();

	function my_autoload($classname) {
		global $PHP_BASE_PATH;
		global $SYSTEM_CLASS_PATH;
		global $PUBLIC_CLASS_PATH;
		global $PRIVATE_CLASS_PATH;
		if (file_exists($SYSTEM_CLASS_PATH.$classname.'.class.php')) {
			require_once($SYSTEM_CLASS_PATH.$classname.'.class.php');
		} else if (file_exists($PRIVATE_CLASS_PATH.$classname.'.class.php')) {
			require_once($PRIVATE_CLASS_PATH.$classname.'.class.php');
		} else if (file_exists($PUBLIC_CLASS_PATH.$classname.'.class.php')) {
			require_once($PUBLIC_CLASS_PATH.$classname.'.class.php');
		}

	}
	spl_autoload_register('my_autoload');
?>
