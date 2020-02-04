<?php

return [
  'debug' => true,
  'kirby' => [
    'blog' => [
      'date' => 'd M, Y',
      'pagination' => [
        'limit' => 6
      ]
    ]
  ],
  'routes' => [
    [
      'pattern' => 'blog/feed',
      'action'  => function () {
        return collection('blog/articles')->limit(10)->feed([
          'title'       => 'Blog',
          'description' => 'The latest updates from the blog.',
          'link'        => 'blog',
        ]);
      }
    ],
  ]
];
