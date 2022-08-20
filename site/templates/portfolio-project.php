<?php snippet('portfolio/header') ?>
<article>
  <h1 class="intro"><?= $page->title()->escape() ?></h1>

  <div class="grid">

    <div class="column text" style="--columns: 4">
      <?= $page->text() ?>
    </div>

    <div class="column" style="--columns: 8">
      <ul class="portfolio-project-gallery">
        <?php foreach ($page->images()->sortBy('sort') as $image): ?>
        <li>
          <a href="<?= $image->url() ?>" data-lightbox>
            <figure class="img" style="--w:<?= $image->width() ?>;--h:<?= $image->height() ?>">
              <?= $image->resize(800) ?>
            </figure>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
    </div>

</article>
<?php snippet('portfolio/footer') ?>
