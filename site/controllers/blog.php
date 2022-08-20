<?php

return function ($page) {

    $tag      = param('tag');
    $default  = option('kirby.blog.pagination.limit', 6);
    $limit    = $page->limit()->or($default)->toInt();
    $articles = collection('blog/articles');

    if (empty($tag) === false) {
        $articles = $articles->filterBy('tags', $tag, ',');
    }

    return [
        'tag'      => $tag,
        'articles' => $articles->paginate($limit)
    ];

};
