<?php

require __DIR__ . '/kirby/bootstrap.php';

// load the code from the demo manager if available
if (file_exists(__DIR__ . '/../../src/Demo/Demo.php') === true) {
    // autoload demo classes
    load([
        'Kirby\Demo\Config'    => __DIR__ . '/../../src/Demo/Config.php',
        'Kirby\Demo\Demo'      => __DIR__ . '/../../src/Demo/Demo.php',
        'Kirby\Demo\Instance'  => __DIR__ . '/../../src/Demo/Instance.php',
        'Kirby\Demo\Instances' => __DIR__ . '/../../src/Demo/Instances.php',
        'Kirby\Demo\Lock'      => __DIR__ . '/../../src/Demo/Lock.php'
    ]);
}

// load the build ID
if (is_file(__DIR__ . '/.id.php') === true) {
    define('DEMO_BUILD_ID', require __DIR__ . '/.id.php');
}

echo (new Kirby)->render();
