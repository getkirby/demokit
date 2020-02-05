<?php if ($cover = $data->cover()->toFile()): ?>
<figure>
  <a href="<?= $cover->url() ?>" data-lightbox class="img" style="--w:2;--h:1"><?= $cover->resize(1200) ?></a>
</figure>
<?php endif ?>
