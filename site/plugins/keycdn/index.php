<?php

use Kirby\Cms\File;
use Kirby\Cms\FileVersion;

function keycdn($url, $params = [])
{
    if (is_object($url) === true) {
        $url = $url->url();
    }

    // always convert urls to absolute urls
    $url   = url($url);
    $query = null;

    if (empty($params) === false) {
        $query = '?' . http_build_query($params);
    }

    return option('keycdn.domain') . '/' . Url::path($url) . $query;
}

Kirby::plugin('getkirby/keycdn', [
    'components' => [
        'file::version' => function (Kirby $kirby, File $file, array $options = []) {

            static $originalComponent;

            if (option('keycdn', false) !== false) {
                $url = keycdn($file->mediaUrl(), $options);

                return new FileVersion([
                    'modifications' => $options,
                    'original'      => $file,
                    'root'          => $file->root(),
                    'url'           => $url,
                ]);
            }

            if ($originalComponent === null) {
                $originalComponent = (require $kirby->root('kirby') . '/config/components.php')['file::version'];
            }

            return $originalComponent($kirby, $file, $options);
        },
        'file::url' => function (Kirby $kirby, File $file): string {
            static $originalComponent;

            if ($file->type() === 'image') {
                return keycdn($file->mediaUrl());
            }

            if ($originalComponent === null) {
                $originalComponent = (require $kirby->root('kirby') . '/config/components.php')['file::url'];
            }

            return $originalComponent($kirby, $file);
        }
    ]
]);
