#!/usr/bin/env php
<?php
// show errors at least initially
ini_set('display_errors','1'); error_reporting(E_ALL ^ E_NOTICE);

// set a default timezone to avoid PHP5 warnings
$tmz = date_default_timezone_get();
date_default_timezone_set( !empty($tmz) ? $tmz : 'Europe/Paris' );

ob_start();
include __DIR__.'/demo.php';
$output = ob_get_contents();
ob_end_clean();

if (false!==file_put_contents(__DIR__.'/../demo/index.html', $output)) {
    echo "OK - 'demo/index.html' has been refreshed!".PHP_EOL;
} else {
    echo "KO ! - An error occures while trying to write in 'demo/index.html'!".PHP_EOL;
}

exit();

// Endfile
