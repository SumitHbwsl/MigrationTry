<?php
namespace Migration;
require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;
$application = new Application();
$application->add(new ReadCSV());
$application->add(new CSVJoin());
$application->run();
// ... register commands
