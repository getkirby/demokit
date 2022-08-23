<article class="blog-article-excerpt">
    <a href="<?= $article->url() ?>">
        <header>
            <h2 class="blog-article-excerpt-title"><?= $article->title()->escape() ?></h2>
            <time class="blog-article-excerpt-date" datetime="<?= $article->date()->toDate('c') ?>"><?= $article->date()->toDate(option('kirby.blog.date', 'd.m.Y')) ?></time>
        </header>
        <div class="blog-article-excerpt-text">
            <?= $article->text()->excerpt(280)->escape() ?>
        </div>
    </a>
</article>
