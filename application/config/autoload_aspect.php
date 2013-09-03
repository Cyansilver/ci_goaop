<?php
/**
 * Go! OOP&AOP PHP framework
 *
 * @copyright     Copyright 2012, Lissachenko Alexander <lisachenko.it@gmail.com>
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
if (file_exists(__DIR__.'/../../vendor/autoload.php')) {
    $loader = include __DIR__.'/../../vendor/autoload.php';
}
use Aspect\ApplicationAspectKernel;
include APPPATH . 'libraries/ApplicationAspectKernel.php';

ApplicationAspectKernel::getInstance()->init(array(
'debug'         => true,
'appDir'        => APPPATH,
'cacheDir'      => APPPATH . '/cache',
'interceptFunctions' => true // Enable support for function interception (Since 0.4.0)
));

//AnnotationRegistry::registerFile(__DIR__ . './Demo/Annotation/Cacheable.php');