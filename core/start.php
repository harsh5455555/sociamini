<?php
/*
 *This file loades the sociamini engine
 *
 *
 *@package sociamini
 *@subpackage core
 *
 */
 
// Auto loading the socia mini engine via symphony class loader
require_once __DIR__ . '/external/Symfony/Component/ClassLoader/UniversalClassLoader.php';
    $loader = new \Symfony\Component\ClassLoader\UniversalClassLoader();
    $loader->registerNamespace('Sociamini', __DIR__.'/core'); 
    $loader->register();
	
//Using ToroPHP for URL routing
require_once _DIR__ . '/external/Toro/Toro.php';

	?>
