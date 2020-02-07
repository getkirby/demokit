<?php

return [
    'build:after' => function ($demo) {
        // disable license check
        $systemFile = __DIR__ . '/kirby/src/Cms/System.php';
        $systemPHP = file_get_contents($systemFile);
        $licenseFunc = "public function license()\n    {";
        $systemPHP = str_replace($licenseFunc, $licenseFunc . "return 'K3-DEMO';", $systemPHP);
        file_put_contents($systemFile, $systemPHP);
    }
];
