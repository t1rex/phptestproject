<?php

require_once 'SplClassLoader.php';

$requirePaths = array(
    '..' . DIRECTORY_SEPARATOR .'src',
    '..' . DIRECTORY_SEPARATOR .'lib'
);
$classLoader = new SplClassLoader('Dv', $requirePaths);
$classLoader->register();

try {
    $kernel = new \Dv\Core\Kernel();
    $kernel->run();
} catch (\RuntimeException $e) {
    echo 'Some runtime exception occurred!';
} catch (\Exception $e) {
    echo $e->getMessage();
}