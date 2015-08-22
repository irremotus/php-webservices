<?php
	$PHP_BASE_PATH = dirname(__DIR__.'/../');
	$user_conf = NULL;
	if (file_exists('config.ini')) {
		$user_conf = parse_ini_file('config.ini');
	}
	if ($user_conf
			&& isset($user_conf['public_class_path'])
			&& isset($user_conf['private_class_path'])) {
		$PUBLIC_CLASS_PATH = $PHP_BASE_PATH.'/'.$user_conf['public_class_path'].'/';
		$PRIVATE_CLASS_PATH = $PHP_BASE_PATH.'/'.$user_conf['private_class_path'].'/';
	} else {
		$PUBLIC_CLASS_PATH = $PHP_BASE_PATH.'/../public_classes/';
		$PRIVATE_CLASS_PATH = $PHP_BASE_PATH.'/../private_classes/';
	}
	$SYSTEM_CLASS_PATH = $PHP_BASE_PATH.'/system_classes/';

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
