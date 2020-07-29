<?php 

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Cstring\CstringCommand;

$app = new Application();
$app->add(new CstringCommand());
$app->run();