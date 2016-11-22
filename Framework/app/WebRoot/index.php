<?php
	
	define('APP_PATH', realpath('../')); #определена константа для каталога app
	define('LIB_PATH', realpath('../../lib')); #определена константа для каталога lib
	
	define ('DS', DIRECTORY_SEPARATOR); #определена константа, содержащая разделитель пути
	
	define('CACHE_ROOT',APP_PATH.DS.'temp'.DS.'cahe'); #определена константа для каталога, содержащего кэш
	define('LOGS_ROOT',APP_PATH.DS.'temp'.DS.'logs'); #определена константа для каталога, содержащего логи
	define('TEMP',APP_PATH.DS.'temp'); #определена константа для каталога, содержащего временные файлы
	
	define('TABLE_PREFIX','');#определена константа для табличных префиксов
	define('SERVER','http://YorDomainName.ru/'); #определена константа для сервера
	ini_set('session_cookie_lifetime',0); #устанавливает время жизни cookie
	
	include_once APP_PATH.DS.'config'.DS.'bootstrap.php'; #однократное подключение файла bootstrap из папки app 

?>