<?php

include_once __DIR__ . '/helpers.php';

Kirby::plugin('getkirby/blog', [
    'blueprints' => [
        'pages/article'     => __DIR__ . '/blueprints/pages/article.yml',
        'pages/blog'        => __DIR__ . '/blueprints/pages/blog.yml',
        'sections/articles' => __DIR__ . '/blueprints/sections/articles.yml',
    ],
    'collections' => [
        'blog/articles' => include_once __DIR__ . '/collections/articles.php'
    ],
    'controllers' => [
        'blog' => include_once __DIR__ . '/controllers/blog.php'
    ],
    'snippets' => [
        'blog/article'    => __DIR__ . '/snippets/article.php',
        'blog/articles'   => __DIR__ . '/snippets/articles.php',
        'blog/excerpt'    => __DIR__ . '/snippets/excerpt.php',
        'blog/footer'     => __DIR__ . '/snippets/footer.php',
        'blog/header'     => __DIR__ . '/snippets/header.php',
        'blog/pagination' => __DIR__ . '/snippets/pagination.php',
        'blog/prevnext'   => __DIR__ . '/snippets/prevnext.php',
        'blog/title'      => __DIR__ . '/snippets/title.php',
    ],
    'templates' => [
        'article' => __DIR__ . '/templates/article.php',
        'blog'    => __DIR__ . '/templates/blog.php'
    ]
]);
