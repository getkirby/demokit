<?php snippet([$example . '/header', 'header']) ?>
<?php snippet('source', [
  'heading'    => 'Blueprint',
  'subheading' => '/site/blueprints/' . $page->blueprint()->name() . '.yml',
  'text'       => 'blueprint',
  'source'     => blueprint($page->blueprint()->name()),
  'language'   => 'yaml'
]) ?>
<?php snippet([$example . '/footer', 'footer']) ?>
