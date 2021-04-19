<?php snippet('microsite/header') ?>

<?php foreach ($page->modules()->toLayouts() as $layout): ?>
<section class="section grid" style="--gutter: 1.5rem" id="<?= esc($layout->id(), 'attr') ?>">
  <?php foreach ($layout->columns() as $column): ?>
  <div class="column" style="--columns: <?= esc($column->span(), 'css') ?>">
    <div class="blocks text">
      <?= $column->blocks() ?>
    </div>
  </div>
  <?php endforeach ?>
</section>
<?php endforeach ?>

<?php snippet('microsite/footer') ?>
