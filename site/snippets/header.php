<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">

  <title><?= $site->title()->html() . ' / ' . html(implode(' / ', $site->breadcrumb()->not('home')->pluck('title'))) ?></title>

  <?= css('assets/lightbox/lightbox.css') ?>
  <?= css('assets/css/index.css') ?>
  <?= css('assets/css/' . ($example ?? 'home') . '.css') ?>
  <?= css('@auto') ?>

  <?php snippet($example . '/meta') ?>

  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">

</head>
<body>

