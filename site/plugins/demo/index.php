<?php

use Kirby\Demo\Demo;
use Kirby\Demo\Instances;
use Kirby\Http\Response;

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
        'demoExpiry' => function (bool $max = false) use ($instance) {
            if ($instance) {
                return $max ? $instance->expiryMax() : $instance->expiry();
            } else {
                return time() + rand(600, 18000);
            }
        },
        'demoExpiryHuman' => function (bool $max = false) use ($instance) {
            if ($instance) {
                return $max ? $instance->expiryMaxHuman() : $instance->expiryHuman();
            } else {
                return 'in ' . rand(2, 100) . ' quadrillion minutes';
            }
        }
    ],
    'routes' => [
        [
            'pattern' => '/delete-demo',
            'method'  => 'POST',
            'action' => function () use ($instance) {
                if ($instance) {
                    // prepare the response before the Kirby files are deleted as well...
                    $response = Response::redirect('https://getkirby.com/try/status:deleted', 302);

                    $instance->delete();
                    die($response);
                } else {
                    return new Response('Error: Could not fetch instance object', 'text/plain', 500);
                }
            }
        ]
    ]
]);
