<?php snippet('header', ['example' => 'blog']) ?>

<header class="header">
  <?php snippet('logo', ['section' => 'blog']) ?>

  <nav class="menu">
    <?php snippet('user') ?>

    <span class="social">
      <a href="<?= url('blog.rss') ?>"><?= svg('assets/icons/feed.svg') ?></a>
      <a href="https://chat.getkirby.com"><?= svg('assets/icons/discord.svg') ?></a>
      <a href="https://instagram.com/getkirby"><?= svg('assets/icons/instagram.svg') ?></a>
    </span>
  </nav>
</header>

<main class="main">
