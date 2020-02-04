<?php snippet('header', ['example' => 'portfolio']) ?>

<header class="header">
  <?php snippet('logo', ['section' => 'portfolio']) ?>
  <?php snippet('menu', ['items'   => collection('portfolio/pages')]) ?>
</header>

<main class="main">
