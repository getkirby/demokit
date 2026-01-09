<?php

use Kirby\Cms\App;
use Kirby\Cms\File;
use Kirby\Cms\FileVersion;
use Kirby\Http\Url;
use Kirby\Toolkit\Str;

function keycdn($file, $params = []): string|null
{
	$mediaPath  = Url::path($file->mediaUrl());
	$globalPath = null;
	if (defined('DEMO_TYPE') === true && defined('DEMO_BUILD_ID') === true) {
		$globalPath = DEMO_TYPE . '/' . DEMO_BUILD_ID . '/' . Str::after($mediaPath, '/');
	}

	// KeyCDN only manages global assets (vetted by us)
	if ($globalPath === null || is_file(dirname(__DIR__, 4) . '/' . $globalPath) === false) {
		return null;
	}

	$query = '';
	if (empty($params) === false) {
		if (empty($params['crop']) === false && $params['crop'] !== false) {
			// use the width as height if the height is not set
			$params['height'] = $params['height'] ?? $params['width'];
		}

		$query = '?' . http_build_query($params);
	}

	return option('keycdn.domain') . '/' . $globalPath . $query;
}

App::plugin('getkirby/keycdn', [
	'components' => [
		'url' => function ($kirby, $path, $options) {
			if (
				defined('DEMO_TYPE') === true && 
				defined('DEMO_BUILD_ID') === true &&
				option('keycdn', false) !== false &&
				(
					Str::startsWith($path, 'assets/') === true ||
					$path === 'favicon.ico'
				)
			) {
				return option('keycdn.domain') . '/' . DEMO_TYPE . '/' . DEMO_BUILD_ID . '/' . $path;
			}

			return $kirby->nativeComponent('url')($kirby, $path, $options);
		},
		'file::version' => function (App $kirby, File $file, array $options = []) {
			if (
				option('keycdn', false) !== false &&
				$url = keycdn($file, $options)
			) {
				return new FileVersion([
					'modifications' => $options,
					'original'      => $file,
					'root'          => $file->root(),
					'url'           => $url,
				]);
			}

			return $kirby->nativeComponent('file::version')($kirby, $file, $options);
		},
		'file::url' => function (App $kirby, File $file): string {
			if (
				$file->type() === 'image' &&
				$url = keycdn($file)
			) {
				return $url;
			}

			return $kirby->nativeComponent('file::url')($kirby, $file);
		}
	]
]);
