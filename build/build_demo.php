#!/usr/bin/env php
<?php
/**
 * Show errors at least initially
 *
 * `E_ALL` => for hard dev
 * `E_ALL & ~E_STRICT` => for hard dev in PHP5.4 avoiding strict warnings
 * `E_ALL & ~E_NOTICE & ~E_STRICT` => classic setting
 */
//@ini_set('display_errors','1'); @error_reporting(E_ALL);
//@ini_set('display_errors','1'); @error_reporting(E_ALL & ~E_STRICT);
@ini_set('display_errors','1'); @error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);

/**
 * Set a default timezone to avoid PHP5 warnings
 */
$dtmz = @date_default_timezone_get();
date_default_timezone_set($dtmz?:'Europe/Paris');

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
