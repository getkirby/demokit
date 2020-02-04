<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">

  <title><?= $site->title()->html() . ' / ' . html(implode(' / ', $site->breadcrumb()->not('home')->pluck('title'))) ?></title>

  <?= css('assets/css/index.css') ?>
  <?= css('assets/css/' . ($example ?? 'home') . '.css') ?>
  <?= css('@auto') ?>

  <?php if ($example === 'shop'): ?>
  <?= css('https://cdn.snipcart.com/themes/v3.0.6/default/snipcart.css') ?>
  <?php endif ?>

</head>
<body>

