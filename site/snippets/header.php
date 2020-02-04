<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $site->title()->html(false) ?></title>

  <?= css('assets/css/index.css') ?>
  <?= css('assets/css/' . ($example ?? 'home') . '.css') ?>
  <?= css('@auto') ?>

  <?php if ($example === 'shop'): ?>
  <?= css('https://cdn.snipcart.com/themes/v3.0.6/default/snipcart.css') ?>
  <?php endif ?>

</head>
<body>

