<?php

use Kirby\Cms\File;
use Kirby\Cms\FileVersion;
use Kirby\Http\Uri;

function keycdn($file, $params = [])
{
    $query = null;

    if (empty($params) === false) {
        if (empty($params['crop']) === false && $params['crop'] !== false) {
            // use the width as height if the height is not set
            $params['height'] = $params['height'] ?? $params['width'];
        }

        $query = '?' . http_build_query($params);
    }

    if ($file->demo()->isTrue() && defined('DEMO_BUILD_ID') === true) {
        $uri  = new Uri($file->mediaUrl());
        $path = '_media/' . DEMO_BUILD_ID . '/' . $uri->path()->offset(1);
    } else {
        $path = Url::path($file->mediaUrl());
    }

    return option('keycdn.domain') . '/' . $path . $query;
}

Kirby::plugin('getkirby/keycdn', [
    'components' => [
        'url' => function ($kirby, $path, $options, $original) {
            if (defined('DEMO_BUILD_ID') && option('keycdn', false) !== false && preg_match('!assets!', $path)) {
                return option('keycdn.domain') . '/_media/' . DEMO_BUILD_ID . '/' . $path;
            }

            return $original($path, $options);
        },
        'file::version' => function (Kirby $kirby, File $file, array $options = []) {

            static $originalComponent;

            if (option('keycdn', false) !== false) {
                $url = keycdn($file, $options);

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
                return keycdn($file);
            }

            if ($originalComponent === null) {
                $originalComponent = (require $kirby->root('kirby') . '/config/components.php')['file::url'];
            }

            return $originalComponent($kirby, $file);
        }
    ]
]);
