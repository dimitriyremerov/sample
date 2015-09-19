<?php
/**
 * Created by PhpStorm.
 * User: Dimitriy
 * Date: 04.09.2015
 * Time: 21:00
 */

require_once dirname(__DIR__) . '/_start.php';

$application = new \FCore\Application();

$pageRequest = $application->getPageRequest();

$router = new \Sample\Router($pageRequest);

$application->setRouter($router);

echo $application->run();
