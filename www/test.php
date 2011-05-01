<?php
require 'h2o/h2o.php';
require 'lib/core.php';

$header = new h2o('templates/header.html');

$page = array('title' => 'Hello, world');

echo $header->render(compact('page'));
?>
