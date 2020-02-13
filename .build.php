<?php

use Kirby\Cms\App;
use Kirby\Toolkit\Dir;

return [
    'build:after' => function ($demo) {
        // prevent the demo plugin from interfering
        define('DEMO_BUILD_MODE', true);

        // disable license check
        $systemFile = __DIR__ . '/kirby/src/Cms/System.php';
        $systemPHP = file_get_contents($systemFile);
        $licenseFunc = "public function license()\n    {";
        $systemPHP = str_replace($licenseFunc, $licenseFunc . "return 'K3-DEMO';", $systemPHP);
        file_put_contents($systemFile, $systemPHP);

        // create a unique-ish build ID
        $buildId = uniqid();
        file_put_contents(__DIR__ . '/.id.php', "<?php\n\nreturn '$buildId';");

        // create a new media folder for this build and copy the assets over
        $root = dirname(__DIR__, 2) . '/public/_media/' . $buildId;
        Dir::make($root);
        exec(
            'cp -r ' .
            escapeshellarg(__DIR__ . '/assets') . ' ' .
            escapeshellarg($root . '/assets'),
            $output,
            $return
        );
        if ($return !== 0) {
            throw new Exception('Could not copy assets, got return value ' . $return);
        }

        // build a media folder with all content images
        Dir::make($root . '/media');
        $kirby = new App(['roots' => ['index' => __DIR__, 'media' => $root . '/media']]);
        foreach ($kirby->site()->index() as $page) {
            foreach ($page->files() as $file) {
                $file->publish();
            }
        }

        // ensure that the cleanup script is executable
        chmod(__DIR__ . '/bin/cleanup', 755);
    }
];
