<?php

use Kirby\Demo\Demo;
use Kirby\Demo\Instances;

$instance = null;

if (class_exists(Demo::class) === true) {
    $instance = (new Demo)->instances()->current();

    // ensure that the request came from the correct visitor
    if ($instance->ipHash() !== Instances::ipHash()) {
        http_response_code(403);
        require __DIR__ . '/etc/fail_ip.php';
        die();
    }
}

Kirby::plugin('getkirby/demo', [
    'siteMethods' => [
        'expiresIn' => function (bool $max = false) use ($instance) {
            if ($instance) {
                return $max ? $instance->expiryMaxHuman() : $instance->expiryHuman();
            } else {
                return 'in ' . rand(2,100) . ' quadrillion minutes';
            }
        }
    ]
]);
