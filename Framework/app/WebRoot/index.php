<?php
	
	define('APP_PATH', realpath('../')); #���������� ��������� ��� �������� app
	define('LIB_PATH', realpath('../../lib')); #���������� ��������� ��� �������� lib
	
	define ('DS', DIRECTORY_SEPARATOR); #���������� ���������, ���������� ����������� ����
	
	define('CACHE_ROOT',APP_PATH.DS.'temp'.DS.'cahe'); #���������� ��������� ��� ��������, ����������� ���
	define('LOGS_ROOT',APP_PATH.DS.'temp'.DS.'logs'); #���������� ��������� ��� ��������, ����������� ����
	define('TEMP',APP_PATH.DS.'temp'); #���������� ��������� ��� ��������, ����������� ��������� �����
	
	define('TABLE_PREFIX','');#���������� ��������� ��� ��������� ���������
	define('SERVER','http://YorDomainName.ru/'); #���������� ��������� ��� �������
	ini_set('session_cookie_lifetime',0); #������������� ����� ����� cookie
	
	include_once APP_PATH.DS.'config'.DS.'bootstrap.php'; #����������� ����������� ����� bootstrap �� ����� app 

?>