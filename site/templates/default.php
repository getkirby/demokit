<?php snippet('home/header') ?>

<article>
	<h1 class="h1"><?= $page->title()->escape() ?></h1>
	<div class="text">
		<?= $page->text()->permalinksToUrls() ?>
	</div>
</article>

<?php snippet('footer') ?>
