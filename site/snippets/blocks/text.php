<div class="text">
  <?php if ($data->heading()->isNotEmpty()): ?>
  <h2><?= $data->heading()->html() ?></h2>
  <?php endif ?>
  <?= $data->text()->kt() ?>
</div>
