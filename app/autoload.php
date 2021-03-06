<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader([$loader, 'loadClass']);
$loader->add( 'AppBundle\Entity', __DIR__.'/../vendor/friendsofsymfony/user-bundle' );

return $loader;
