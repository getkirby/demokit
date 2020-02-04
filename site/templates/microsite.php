<?php snippet('microsite/header') ?>

<?php foreach ($page->modules()->toBuilderBlocks() as $block): ?>
<section class="block">
  <?php snippet('blocks/' . $block->_key(), ['data' => $block]) ?>
</section>
<?php endforeach?>

<?php snippet('microsite/footer') ?>
