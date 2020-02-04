<?php snippet('blog/header') ?>

<?php if ($cover = $page->cover()): ?>
<figure class="img" style="--w:2; --h:1">
  <?= $cover->crop(1200, 600) ?>
</figure>
<?php endif ?>

<article class="blog-article">
  <header class="blog-article-header h1">
    <h1 class="blog-article-title"><?= $page->title() ?></h1>
    <?php if ($page->subheading()->isNotEmpty()): ?>
    <p class="blog-article-subheading"><small><?= $page->subheading() ?></small></p>
    <?php endif ?>
  </header>
  <div class="blog-article text">
    <?= $page->text()->blocks() ?>
  </div>
  <footer class="blog-article-footer">
    <?php if (!empty($tags)): ?>
    <ul class="blog-article-tags">
      <?php foreach ($tags as $tag): ?>
      <li><?= $tag ?></li>
      <?php endforeach ?>
    </ul>
    <?php endif ?>

    <time class="blog-article-date" datetime="<?= $page->date('c') ?>">Published on <?= $page->date() ?></time>
  </footer>

  <?php snippet('blog/prevnext') ?>
</article>

<?php snippet('blog/footer') ?>
