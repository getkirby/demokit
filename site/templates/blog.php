<?php snippet('blog/header') ?>

<header class="h1">
  <h1><?= $page->heading()->html() ?></h1>
  <?php if ($page->subheading()->isNotEmpty()): ?>
  <p><small><?= $page->subheading()->html() ?></small></p>
  <?php endif ?>
</header>

<ul class="grid">
  <?php foreach ($articles as $article): ?>
  <li class="column" style="--columns: 4">
      <?php snippet('blog/excerpt', ['article' => $article]) ?>
  </li>
  <?php endforeach ?>
</ul>

<?php snippet('blog/pagination', ['pagination' => $articles->pagination()]) ?>
<?php snippet('blog/footer') ?>

