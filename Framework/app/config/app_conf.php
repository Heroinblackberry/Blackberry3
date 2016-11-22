<?php
error_reporting(E_ALL ^ E_NOTICE); #задает, какие ошибки PHP попадут в отчет

$cnf = Config::instance(); #обращение к экземпл€ру класса instance
$cnf->set('base_uri', ''); #базовый урл, от которого идет сайт
$cnf->set('dev_mode', 0); #определ€ет поведение режима разработки сайта

$cnf->set('view_ext', '.php'); #расширение дл€ файлов вида
$cnf->set('default_layout', 'default'); #шаблон по умолчанию
$cnf->set('qz_output', 1); #включение сжати€
$cnf->set('errors_in_files', 1); #вывод ошибок в файл
$cnf->set('cache_lifetime', 60*60*24); #максимальное врем€ жизни кэша

unset($cnf); #разустанавливает данную переменную
?>