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

	if (is_file($path) !== true) {
		return;
	}

	$contents = file_get_contents($path);
	$contents = str_replace($search, $replace, $contents);

	file_put_contents($path, $contents);
};

return [
	'build:after' => function () use ($modifyFile) {

		// disable license check
		$modifyFile(
			'kirby/src/Cms/License.php',
			"public function status(): LicenseStatus\n	{",
			"public function status(): LicenseStatus\n	{return LicenseStatus::Demo;"
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
	},

	// TODO: Can be removed when nginx is used
	'create:after' => function ($demo, $instance) use ($modifyFile) {
		// set RewriteBase
		$modifyFile(
			'.htaccess',
			'# RewriteBase /mysite',
			'RewriteBase /' . $instance->name()
		);
	},

	'cleanup' => function () {
		$path = dirname(__DIR__, 2) . '/public/_media';

		// find out our what our own media directory is
		$ownName  = require(__DIR__ . '/.id.php');
		$ownPath  = $path . '/' . $ownName;
		$ownMTime = filemtime($ownPath);

		// find all current media directories except ours
		$dirs = glob($path . '/*');
		$dirs = array_diff($dirs, [$ownPath]);

		// delete each remaining directory if more than three hours older than ours
		// (= if no instance can be still using the media directory)
		// or if our media directory is also older than three hours
		// (= no other instance directory can still be used)
		foreach ($dirs as $dir) {
			if ($ownMTime < time() - 3 * 60 * 60 || filemtime($dir) < $ownMTime - 3 * 60 * 60) {
				exec('rm -R ' . escapeshellarg($dir), $output, $return);

				if ($return !== 0) {
					echo 'Error deleting directory ' . $dir . ', got error: ' . $output . "\n";
					exit(1);
				}
			}
		}
	},

	'status' => function (): ?string {
		$path = dirname(__DIR__, 2) . '/public/_media';
		$dirs = glob($path . '/*');

		if (count($dirs) > 20) {
			return 'WARN:demokit:too-many-media-folders';
		}

		return null;
	}
];
