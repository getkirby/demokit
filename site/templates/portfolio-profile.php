<?php snippet('portfolio/header') ?>
<article>
  <div class="grid">
    <div class="column" style="--columns: 6">
      <?php if ($image = $page->image()): ?>
      <a data-lightbox href="<?= $image->url() ?>" class="img" style="--w:<?= $image->width() ?>;--h: <?= $image->height() ?>">
        <?= $image->resize(800) ?>
      </a>
      <?php endif ?>
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
