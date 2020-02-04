<nav class="blog-prevnext">
    <?php if ($prev = $page->prevListed()): ?>
    <a class="blog-prevnext-prev" title="<?= $prev->title() ?>" href="<?= $prev->url() ?>"><?= option('kirby.blog.article.prev', '&larr;') ?></a>
    <?php else: ?>
    <span class="blog-prevnext-prev"><?= option('kirby.blog.article.prev', '&larr;') ?></span>
    <?php endif ?>

    <?php if ($next = $page->nextListed()): ?>
    <a class="blog-prevnext-next" title="<?= $next->title() ?>" href="<?= $next->url() ?>"><?= option('kirby.blog.article.next', '&rarr;') ?></a>
    <?php else: ?>
    <span class="blog-prevnext-next"><?= option('kirby.blog.article.next', '&rarr;') ?></span>
    <?php endif ?>
</nav>
