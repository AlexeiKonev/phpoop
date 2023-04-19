<?php
require_once ('../vendor/autoload.php');
$worker = new \App\Worker();
$visitor = new \App\Visitor('mike',23);

$visitor->Visit();
$worker->Work();