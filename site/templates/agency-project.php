<?php snippet('agency/header') ?>
<article>
  <header class="h1">
    <h1><?= $page->title()->escape() ?></h1>
    <p><small><?= $page->category()->escape() ?></small></p>
  </header>

  <div class="grid">

    <div class="column text" style="--columns: 4">
      <?= $page->text()->kt() ?>

      <?php if ($client = $page->client()->toPage()): ?>
      <p>Client: <?= $client->title()->escape() ?></p>
      <?php endif ?>

      <?php if ($page->link()->isNotEmpty()): ?>
      <p><?= Html::a($page->link()->toUrl(), 'Project site') ?></p>
      <?php endif ?>
    </div>

    <div class="column" style="--columns: 8">
      <?php if ($cover = $page->cover()): ?>
      <a href="<?= $cover->url() ?>" data-lightbox>
        <figure class="img margin-l" style="--w:<?= $cover->width() ?>; --h:<?= $cover->height() ?>">
          <?= $cover->resize(800) ?>
        </figure>
      </a>
      <?php endif ?>

      <ul class="grid">
        <?php foreach ($page->images()->template('agency-project-image')->sortBy('sort', 'asc', 'filename', 'asc') as $image): ?>
        <li class="column" style="--columns: 3">
          <a href="<?= $image->url() ?>" data-lightbox class="img">
            <?= $image->crop(200) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>

    </div>

</article>
<?php snippet('agency/footer') ?>
