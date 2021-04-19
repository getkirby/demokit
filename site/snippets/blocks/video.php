<?php if ($block->url()->isNotEmpty()): ?>
<figure>
  <span class="video" style="--w:16;--h:9">
    <?= video($block->url()) ?>
  </span>
  <?php if ($block->caption()->isNotEmpty()): ?>
  <figcaption class="video-caption"><?= $block->caption() ?></figcaption>
  <?php endif ?>
</figure>
<?php endif ?>
