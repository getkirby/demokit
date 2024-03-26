<?php

use Kirby\Cms\App;
use Kirby\Filesystem\F;

function blueprint($name) {
	$file = App::instance()->root('blueprints') . '/' . $name . '.yml';
	return F::read($file);
}

function styles($example) {
	$kirby    = App::instance();
	$template = $kirby->site()->page()->template();
	$styles   = [
		'assets/lightbox/lightbox.css',
		'assets/css/index.css',
		'assets/css/' . $example . '.css',
		'assets/css/templates/' . $template . '.css'
	];

	$root     = $kirby->root();
	$filtered = array_filter($styles, fn($path) => file_exists($root . '/' . $path));

	return css($filtered);
}
