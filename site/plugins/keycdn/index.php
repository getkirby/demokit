<?php

use Kirby\Cms\File;
use Kirby\Cms\FileVersion;
use Kirby\Http\Uri;
use Kirby\Toolkit\Str;

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

    $mediaPath  = Url::path($file->mediaUrl());
    $globalPath = null;
    if (defined('DEMO_BUILD_ID') === true) {
        $globalPath = '_media/' . DEMO_BUILD_ID . '/' . Str::after($mediaPath, '/');
    }

    if ($globalPath !== null && is_file(dirname(__DIR__, 4) . '/' . $globalPath) === true) {
        $path = $globalPath;
    } else {
        $path = $mediaPath;
    }

    return option('keycdn.domain') . '/' . $path . $query;
}

Kirby::plugin('getkirby/keycdn', [
    'components' => [
        'url' => function ($kirby, $path, $options) {
            if (defined('DEMO_BUILD_ID') && option('keycdn', false) !== false && preg_match('!assets!', $path)) {
                return option('keycdn.domain') . '/_media/' . DEMO_BUILD_ID . '/' . $path;
            }

            return $kirby->nativeComponent('url')($kirby, $path, $options);
        },
        'file::version' => function (Kirby $kirby, File $file, array $options = []) {
            if (option('keycdn', false) !== false) {
                $url = keycdn($file, $options);

                return new FileVersion([
                    'modifications' => $options,
                    'original'      => $file,
                    'root'          => $file->root(),
                    'url'           => $url,
                ]);
            }

            return $kirby->nativeComponent('file::version')($kirby, $file, $options);
        },
        'file::url' => function (Kirby $kirby, File $file): string {
            if ($file->type() === 'image') {
                return keycdn($file);
            }

            return $kirby->nativeComponent('file::url')($kirby, $file);
        }
    ]
]);
