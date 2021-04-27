<?php

return function ($page) {

    return [
        'tags' => $page->tags()->split(','),
    ];

};
