<?php snippet('header', ['example' => 'microsite']) ?>

<header class="header">
  <?php snippet('logo', ['section' => 'microsite']) ?>
  <nav class="menu">
    <?php snippet('user') ?>
    <?php snippet('social') ?>
  </nav>
</header>

<main class="main">
