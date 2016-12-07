<?php
$config = Dbconnect::instance();
$config->set(array(
    'host' => 'ovl.io',
    'user' => 'mediv1993',
    'pass' => 'alex25km',
    'name' => 'mediv1993'
));
$config->connect();
unset($config);