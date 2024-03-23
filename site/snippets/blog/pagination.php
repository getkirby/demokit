<?php if ($pagination->hasPages()): ?>
<nav class="blog-pagination">
		<?php if ($pagination->hasPrevPage()): ?>
		<a class="blog-pagination-prev" href="<?= $pagination->prevPageUrl() ?>">&larr</a>
		<?php else: ?>
		<span class="blog-pagination-prev">&larr</span>
		<?php endif ?>
		<?php if ($pagination->hasNextPage()): ?>
		<a class="blog-pagination-next" href="<?= $pagination->nextPageUrl() ?>">&rarr</a>
		<?php else: ?>
		<span class="blog-pagination-next">&rarr</span>
		<?php endif ?>
</nav>
<?php endif ?>
