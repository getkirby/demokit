<?php

return function ($page) {

    $default = option('kirby.blog.pagination.limit', 6);
    $limit   = $page->limit()->or($default)->toInt();

    return [
        'articles' => collection('blog/articles')->paginate($limit)
    ];

};
