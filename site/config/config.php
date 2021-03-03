<?php

return [
  'debug' => false,
  'content' => [
    // make the media tokens independent from the instance
    // otherwise the global _media CDN directory won't work
    'salt' => 'demodemo'
  ],
  'panel' => [
    'css' => 'assets/css/panel.css'
  ],
  'kirby' => [
    'blog' => [
      'date' => 'd M, Y',
      'pagination' => [
        'limit' => 6
      ]
    ]
  ],
  'thumbs' => [
    'driver' => 'im',
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
    [
      'pattern' => '(:all).(html|yml|txt)',
      'action'  => function ($path, $type) {
        if ($page = page($path)) {
          // set all template vars for the page
          $page->render();

          $templates = [
            'yml'  => 'blueprint',
            'html' => 'template',
            'txt'  => 'content'
          ];

          // render a different template
          return kirby()->template($templates[$type])->render([
            'example' => $page->parents()->count() ? $page->parents()->last()->slug() : $page->slug(),
            'page'    => $page
          ]);
        }
      }
    ]
  ],
  'sylvainjule.locator.tiles' => 'voyager',
];
