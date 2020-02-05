<?php

require 'kirby/bootstrap.php';

$kirby = kirby();
$kirby->impersonate('kirby');

set_time_limit(0);

foreach (page('portfolio/projects')->children() as $page) {

    foreach ($page->images() as $image) {

        $image->update([
            'template' => 'portfolio-project-image'
        ]);

    }

}
