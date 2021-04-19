<?php

return function ($page) {

    return [
        'location' => $page->location()->yaml(),
    ];

};
