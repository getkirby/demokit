<?php snippet('header', ['example' => 'agency']) ?>

<header class="header">
  <?php snippet('logo', ['section' => 'agency']) ?>
  <?php snippet('menu', ['items'   => collection('agency/pages')]) ?>
</header>

<main class="main">
