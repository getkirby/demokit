<?php snippet('blog/header') ?>

<?php if ($cover = $page->cover()): ?>
<a href="<?= $cover->url() ?>" data-lightbox class="img" style="--w:2; --h:1">
  <?= $cover->crop(1200, 600) ?>
</a>
<?php endif ?>

<article class="blog-article">
  <header class="blog-article-header h1">
    <h1 class="blog-article-title"><?= $page->title()->escape() ?></h1>
    <?php if ($page->subheading()->isNotEmpty()): ?>
    <p class="blog-article-subheading"><small><?= $page->subheading()->escape() ?></small></p>
    <?php endif ?>
  </header>
  <div class="blog-article text">
    <?= $page->text()->toBlocks() ?>
  </div>
  <footer class="blog-article-footer">
    <?php if (!empty($tags)): ?>
    <ul class="blog-article-tags">
      <?php foreach ($tags as $tag): ?>
      <li>
        <a href="<?= url('blog', ['params' => ['tag' => $tag]]) ?>"><?= esc($tag) ?></a>
      </li>
      <?php endforeach ?>
    </ul>
    <?php endif ?>

    <time class="blog-article-date" datetime="<?= esc($page->dateFormatted('c'), 'attr') ?>">Published on <?= esc($page->dateFormatted()) ?></time>
  </footer>

  <?php snippet('blog/prevnext') ?>
</article>

<?php snippet('blog/footer') ?>
