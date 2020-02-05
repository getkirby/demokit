<section class="section">
  <?php if ($data->heading()->isNotEmpty()): ?>
  <h1 class="h1"><?= $data->heading()->html() ?></h1>
  <?php endif ?>

  <div class="autogrid">
    <?php foreach ($data->images()->toFiles() as $image): ?>
    <div class="column">
      <figure>
        <a href="<?= $image->url() ?>" data-lightbox class="img" style="<?= $data->ratio()->or('--w:3;--h:2') ?>"><?= $image ?></a>
      </figure>
    </div>
    <?php endforeach ?>
  </div>
</section>
