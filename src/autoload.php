<?php

require_once __DIR__.'/vendor/symfony/src/Symfony/Framework/UniversalClassLoader.php';

use Symfony\Framework\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony'                    => __DIR__.'/vendor/symfony/src',
    'Application'                => __DIR__,
    'Bundle'                     => __DIR__,
    'Doctrine\\Common'           => __DIR__.'/vendor/doctrine/lib/vendor/doctrine-common/lib',
    'Doctrine\\DBAL\\Migrations' => __DIR__.'/vendor/doctrine-migrations/lib',
    'Doctrine\\ODM\\MongoDB'     => __DIR__.'/vendor/doctrine-mongodb/lib',
    'Doctrine\\DBAL'             => __DIR__.'/vendor/doctrine/lib/vendor/doctrine-dbal/lib',
    'Doctrine'                   => __DIR__.'/vendor/doctrine/lib',
    'Zend'                       => __DIR__.'/vendor/zend/library',
));
$loader->register();
