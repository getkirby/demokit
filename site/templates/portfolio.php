<?php snippet('portfolio/header') ?>

<h1 class="intro"><?= page('portfolio/about')->heading()->escape() ?></h1>

<ul class="grid" style="--gutter: 1.5rem">
  <?php foreach ($page->find('projects')->children()->shuffle()->limit(4) as $project): ?>
  <li class="column" style="--columns: 6">
    <a href="<?= $project->url() ?>">
      <figure>
        <span class="img" style="--w: 4; --h:5">
          <?= $project->image()->crop(800, 1000) ?>
        </span>
        <figcaption class="img-caption">
          <?= $project->title()->escape() ?>
        </figcaption>
      </figure>
    </a>
  </li>
  <?php endforeach ?>
</ul>

<?php snippet('portfolio/footer') ?>
