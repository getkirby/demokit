<article class="blog-article">
    <header class="blog-article-header">
        <h1 class="blog-article-title"><?= $page->title() ?></h1>
        <time class="blog-article-date" datetime="<?= $page->date()->toDate('c') ?>"><?= $page->date()->toDate(option('kirby.blog.date')) ?></time>
    </header>
    <div class="blog-article">
        <?= $page->text()->kt() ?>
    </div>

    <?php snippet('blog/prevnext') ?>
</article>
