<?php /** @var \Kirby\Cms\Block $block */ ?>
<?php if ($block->url()->isNotEmpty()): ?>
<figure>
	<span class="video" style="--w:16;--h:9">
		<?= video($block->url()) ?>
	</span>
	<?php if ($block->caption()->isNotEmpty()): ?>
	<figcaption class="video-caption"><?= $block->caption()->permalinksToUrls() ?></figcaption>
	<?php endif ?>
</figure>
<?php endif ?>
