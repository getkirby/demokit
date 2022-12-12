<?php snippet('header', ['example' => 'blog']) ?>

<header class="header">
  <?php snippet('logo', ['section' => 'blog']) ?>
  <nav class="menu">
    <span class="social">
      <a href="<?= url('blog.rss') ?>"><?= svg('assets/icons/feed.svg') ?></a>
      <a href="https://mastodon.social/@getkirby"><?= svg('assets/icons/mastodon.svg') ?></a>
      <a href="https://instagram.com/getkirby"><?= svg('assets/icons/instagram.svg') ?></a>
    </span>
  </nav>
</header>

<main class="main">
