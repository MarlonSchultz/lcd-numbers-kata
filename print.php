<?php

require 'vendor/autoload.php';

$renderer = new \Bamiz\LcdNumbersKata\Renderer();
$printer = new \Bamiz\LcdNumbersKata\Printer();
$display = new \Bamiz\LcdNumbersKata\Display($renderer, $printer);

$display->display('123', 1);
