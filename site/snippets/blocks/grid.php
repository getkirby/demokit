<section class="section">
  <?php if ($data->heading()->isNotEmpty()): ?>
  <h1 class="h1"><?= $data->heading()->html() ?></h1>
  <?php endif ?>

  <div class="grid">
    <?php foreach ($data->columns()->toBuilderBlocks() as $column): ?>
    <div class="column" style="--columns: 4">
    <?php snippet('blocks/' . $column->_key(), ['data' => $column]) ?>
    </div>
    <?php endforeach ?>
  </div>
</section>
