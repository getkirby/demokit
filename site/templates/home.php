<?php snippet('home/header') ?>

<header class="h1">
  <h1><?= $page->heading()->escape() ?></h1>
  <p><small>This demo expires <?= $site->demoExpiryHuman() ?></small></p>
</header>

<section class="section">
  <div class="grid">
    <div class="column panel box" style="--columns: 6">
      <div class="text margin-l">
        <h2><?= $page->panelHeading()->escape() ?></h2>
        <?= $page->panelText()->kt() ?>
      </div>
      <a class="cta" href="<?= url('panel') ?>">Open the Panel</a>
    </div>
    <div class="column text" style="--columns: 6">
      <h2><?= $page->aboutHeading()->escape() ?></h2>
      <?= $page->aboutText()->kt() ?>
    </div>
  </div>
</section>

<section class="section">
  <h2 class="h2">Examples</h2>
  <ul class="grid examples">
    <?php foreach ($site->children()->listed() as $example): ?>
    <li class="column" style="--columns: 4">
      <a href="<?= $example->url() ?>">
        <figure>
          <span class="img" style="--w: 4; --h:3">
            <?php if ($cover = $example->cover()): ?>
            <?= $cover->crop(400, 300) ?>
            <?php endif ?>
          </span>
          <figcaption class="img-caption">
            <p><strong><?= $example->title()->escape() ?></strong></p>
            <p><small><?= $example->description()->escape() ?></small></p>
          </figcaption>
        </figure>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</section>

<?php snippet('footer') ?>
