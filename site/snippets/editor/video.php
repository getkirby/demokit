<?php if ($iframe): ?>
<figure class="<?php $attrs->css()->value() ?>">
  <span class="video" style="--w:16;--h:9">
    <?= $iframe ?>
  </span>
  <?php if ($attrs->caption()->isNotEmpty()): ?>
  <figcaption class="video-caption"><?= $attrs->caption() ?></figcaption>
  <?php endif ?>
</figure>
<?php endif ?>
