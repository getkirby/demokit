<?php snippet('portfolio/header') ?>
<article>
  <div class="grid">
    <div class="column" style="--columns: 6">
      <?= $page->image() ?>
    </div>
    <div class="column" style="--columns: 6">
      <h1 class="intro"><?= $page->heading()->html() ?></h1>
      <div class="text">
        <?= $page->text()->kt() ?>
      </div>
    </div>
  </div>
</article>
<?php snippet('portfolio/footer') ?>
