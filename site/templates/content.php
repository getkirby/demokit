<?php snippet([$example . '/header', 'header']) ?>
<?php snippet('source', [
  'heading'    => 'Textfile',
  'subheading' => '/content/' . $page->dirUri() . '/' . $page->intendedTemplate() . '.txt',
  'text'       => 'content',
  'source'     => Data::encode($page->content()->data(), 'txt'),
  'language'   => 'kirbycontent'
]) ?>
<?php snippet([$example . '/footer', 'footer']) ?>
