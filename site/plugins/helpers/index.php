<?php

function blueprint($name) {
    $file = kirby()->root('blueprints') . '/' . $name . '.yml';
    return F::read($file);
}

function styles($example) {

    $styles = [
        'assets/lightbox/lightbox.css',
        'assets/css/index.css'
    ];

    $path = 'assets/css/' . $example . '.css';
    $file = kirby()->root() . '/' . $path;

    if (file_exists($file) === true) {
        $styles[] = $path;
    }

    $styles[] = '@auto';

    return css($styles);

}
