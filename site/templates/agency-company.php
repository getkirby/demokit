<?php snippet('agency/header') ?>

<?php if ($cover = $page->cover()->toFile()): ?>
<figure>
  <a href="<?= $cover->url() ?>" data-lightbox class="img" style="--w: 2; --h:1">
    <?= $cover->crop(1200, 600) ?>
  </a>
</figure>

<hr>
<?php endif ?>

<header class="intro">
  <h1><?= $page->heading()->html() ?></h1>
  <?= $page->intro()->kt() ?>
</header>

<hr>

<h2 class="h1" id="team"><?= $page->teamHeading()->html() ?></h2>

<ul class="grid">
  <?php foreach (collection('agency/team') as $member): ?>
  <?php if ($image = $member->image()): ?>
  <li class="column" style="--columns: <?= (12 / $page->teamColumns()->or(3)->toInt()) ?>">
    <figure>
      <a href="<?= $image->url() ?>" class="img" data-lightbox>
        <?= $image->html([
          'alt' => 'A picture of ' . $member->title()->html() . ' - ' . $member->position()->html()
        ]) ?>
      </a>
      <figcaption class="img-caption">
        <p><strong><?= $member->title()->html() ?></strong></p>
        <p><small><?= $member->position()->html() ?></small></p>
      </figcaption>
    </figure>
  </li>
  <?php endif ?>
  <?php endforeach ?>
</ul>

<hr>

<h2 class="h1" id="values"><?= $page->valuesHeading()->html() ?></h2>

<div class="grid">
  <?php foreach ($page->values()->toStructure() as $value): ?>
  <div class="column text" style="--columns: <?= (12 / $page->valuesColumns()->or(3)->toInt()) ?>">
    <h2><?= $value->heading()->html() ?></h2>
    <?= $value->text()->kt() ?>
  </div>
  <?php endforeach ?>
</div>

<?php snippet('agency/footer') ?>
