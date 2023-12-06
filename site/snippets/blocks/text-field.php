<div class="field" data-width="<?= $block->width() ?>">
  <label for="<?= $block->id() ?>"><?= $block->label()->esc() ?></label>
  <input <?= attr([
    'id'          => $block->id(),
    'name'        => $block->name(),
    'placeholder' => $block->placeholder(),
    'required'    => $block->required()->isTrue(),
    'type'        => 'text',
  ]) ?>>
</div>
