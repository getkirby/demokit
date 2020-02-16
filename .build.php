<?php

use Kirby\Cms\App;
use Kirby\Toolkit\Dir;

/**
 * Replaces specific file contents in a file
 * inside the Demokit
 *
 * @param string $path Relative path inside the Demokit
 * @param string $search String to search
 * @param string $replace String to replace with
 * @return void
 */
$modifyFile = function (string $path, string $search, string $replace): void
{
    $path = __DIR__ . '/' . $path;

    $contents = file_get_contents($path);
    $contents = str_replace($search, $replace, $contents);
    file_put_contents($path, $contents);
};

return [
    'build:after' => function ($demo) use ($modifyFile) {
        // disable license check
        $modifyFile(
            'kirby/src/Cms/System.php',
            "public function license()\n    {",
            "public function license()\n    {return 'K3-DEMO';"
        );

        // always use mtime for F::modified()
        // otherwise the detection of global media file breaks
        $modifyFile(
            'kirby/src/Toolkit/F.php',
            '$modified = max([$mtime, $ctime]);',
            '$modified = $mtime;'
        );

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
        $kirby = new App(['roots' => [
            'index'   => __DIR__,
            'media'   => $root . '/media',
            'plugins' => '/dev/null'
        ]]);
        foreach ($kirby->site()->index() as $page) {
            foreach ($page->files() as $file) {
                $file->publish();
            }
        }

        // ensure that the cleanup script is executable
        chmod(__DIR__ . '/bin/cleanup', 0755);
    },

    'create:after' => function ($demo, $instance) use ($modifyFile) {
        // set RewriteBase
        $modifyFile(
            '.htaccess',
            '# RewriteBase /mysite',
            'RewriteBase /' . $instance->name()
        );
    }
];
