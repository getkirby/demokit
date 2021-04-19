<?php snippet('home/header') ?>

<article>
  <h1 class="h1"><?= $page->title()->escape() ?></h1>
  <div class="text">
    <?= $page->text()->kt() ?>
  </div>
</article>

<?php snippet('footer') ?>
