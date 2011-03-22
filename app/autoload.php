<?php

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony'                       => __DIR__.'/../vendor/symfony/src',
    'Knplabs'                       => __DIR__.'/../src',
    'Synergie'                      => __DIR__.'/../src',
    'Doctrine\DBAL\Migrations'      => __DIR__.'/../vendor/doctrine-migrations/lib',
    'Doctrine\Common'               => __DIR__.'/../vendor/doctrine-common/lib',
    'Doctrine\Common\DataFixtures'  => __DIR__.'/../vendor/doctrine-data-fixtures/lib',
    'Doctrine\DBAL'                 => __DIR__.'/../vendor/doctrine-dbal/lib',
    'Doctrine'                      => __DIR__.'/../vendor/doctrine/lib',
    'Zend'                          => __DIR__.'/../vendor/zend/library',
));

$loader->registerPrefixes(array(
    'Twig_Extensions_' => __DIR__.'/../vendor/twig-extensions/lib',
    'Twig_'            => __DIR__.'/../vendor/twig/lib',
));
$loader->register();
