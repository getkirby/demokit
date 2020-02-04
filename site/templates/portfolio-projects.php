<?php snippet('portfolio/header') ?>

<h1 class="h1">My work</h1>

<ul class="grid">
  <?php foreach (collection('portfolio/projects') as $project): ?>
  <li class="column" style="--columns: 3">
    <a href="<?= $project->url() ?>">
      <figure>
        <span class="img" style="--w:4;--h:5">
          <?= $project->image()->crop(400, 500) ?>
        </span>
        <figcaption class="img-caption">
          <?= $project->title()->html() ?>
        </figcaption>
      </figure>
    </a>
  </li>
  <?php endforeach ?>
</ul>

<?php snippet('portfolio/footer') ?>
