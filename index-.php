#!/user/env/php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use MianMuhammad\Atm\AtmMachine;
use Symfony\Component\Console\Application;

$atm = new AtmMachine();

$app = new Application();

$app->add($atm);
$app->setDefaultCommand($atm->getName());

$app->run();