<?php

$includePath = array(LIB_PATH, APP_PATH.DS.'classes', get_include_path()); #создание массива, содержащего каталог app и lib, а также текущее значение настройки include_path
$includePath = implode(PATH_SEPARATOR, $includePath); #объединяет элементы массива в строку
set_include_path($includePath); #устанавливает значение настройки конфигурации include_path

require_once 'PEAR'.DS.'NameScheme'.DS.'Autoload.php'; #автоматичесткое формирование и подгрузки классов из директории

include_once APP_PATH.DS.'config'.DS.'app_conf.php'; #однократное включение файла конфигурации из папки app
include_once APP_PATH.DS.'config'.DS.'routes.php'; # однократное включение файла c указанными путями (константами) из папки app
include_once LIB_PATH.DS.'function.php'; #однократное включение файла с функциями из папки lib
include_once APP_PATH.DS.'config'.DS.'db_conf.php'; #однократное включение файла с подлючением к БД

$router = Routing_Router::instance(); #переменная становится экземпляром статичного класса Routing_Router
$route = $router->getRoute($_SERVER['REQUEST_URI']); #создание массива с тремя ключами (controller, action and params)

errorReporting(); #устанавливает, о каких ошибках PHP  сообщается
dispatch($route); #запускается функция dispatch
?>