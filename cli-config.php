<?php

$system_path = 'system';
$application_folder = 'application';
define('BASEPATH', str_replace("\\", "/", $system_path));
define('APPPATH', $application_folder . '/');

include __DIR__ . "/vendor/autoload.php";
include __DIR__ . "/application/libraries/doctrine.php";

$doctrine = new Doctrine(array('host' => '192.168.56.202', 'user' => 'bibliothouris', 'password' => '123', 'dbname' => 'bibliothouris'));
$em = $doctrine->em;
//var_dump($em->getConnection());
$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));

return $helperSet;