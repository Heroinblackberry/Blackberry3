<?php
$config = Dbconnect::instance(); #���������� ���������� ����������� ������������ ������ Dbconnect
$config->set(array(               #���������� ������� �������������� ��� ����������� � ����� �����
	'host' => 'host_name',
	'user' => 'user',
	'pass' => 'password',
	'name' => 'database_name'
}};
$config->connect(); #������� �����������

unset($config); #���������������� ������ ����������
?>