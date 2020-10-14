<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/app/models"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

$conn = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'xmlparser-mariadb',
    'dbname'   => 'xml',
    'user'     => 'xml',
    'password' => 'xml'
);

$entityManager = EntityManager::create($conn, $config);