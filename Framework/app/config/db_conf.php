<?php
$config = Dbconnect::instance(); #переменна€ становитс€ экземпл€ром статического класса Dbconnect
$config->set(array(               #заполнение массива конфигураци€им дл€ подключени€ к нашим базам
	'host' => 'host_name',
	'user' => 'user',
	'pass' => 'password',
	'name' => 'database_name'
}};
$config->connect(); #попытка подключени€

unset($config); #разустанавливает данную переменную
?>