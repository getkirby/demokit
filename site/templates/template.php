<?php snippet([$example . '/header', 'header']) ?>
<?php snippet('source', [
  'heading'    => 'Template',
  'subheading' => '/site/templates/' . $page->template()->name() . '.php',
  'text'       => 'template',
  'source'     => htmlspecialchars(F::read($page->template()->file())),
  'language'   => 'php'
]) ?>
<?php snippet([$example . '/footer', 'footer']) ?>
