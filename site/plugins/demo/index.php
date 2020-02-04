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
    'tags' => [
        'demo-time' => [
            'html' => function ($tag) use ($instance) {
                if (!$instance) {
                    return '...';
                }

                switch ($tag->value) {
                    case 'created':
                        return $instance->createdHuman();
                    case 'expiry':
                        return $instance->expiryHuman();
                    case 'expiry-max':
                        return $instance->expiryMaxHuman();
                    default:
                        return '';
                }
            }
        ]
    ]
]);
