<ul class="blog-articles">
    <?php foreach ($articles = $articles ?? collection('blog/articles') as $article): ?>
    <li>
        <?php snippet('blog/excerpt', ['article' => $article]) ?>
    </li>
    <?php endforeach ?>
</ul>

<?php snippet('blog/pagination', ['pagination' => $articles->pagination()]) ?>
