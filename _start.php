<?php
/**
 * Created by PhpStorm.
 * User: Dimitriy
 * Date: 05.09.2015
 * Time: 18:10
 */

require_once 'conf/global.conf.php';
require_once CORE_ROOT . '/include.php';
include_once CORE_LIB . '/FirePHPCore/fb.php';

$autoloader = new \FCore\Autoloader();
$autoloader->registerPackage('Sample', LIB_PATH . DIRECTORY_SEPARATOR . 'Sample');
\FCore\Autoloader::registerSpl($autoloader);
