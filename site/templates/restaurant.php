<?php snippet('restaurant/header') ?>

<?php if ($cover = $page->images()->template('restaurant-cover-image')->first()): ?>
<figure>
  <a href="<?= $cover->url() ?>" data-lightbox class="hero img" style="--w: 2; --h: 1">
    <?= $cover->crop(1200, 600) ?>
  </a>
</figure>
<?php endif ?>

<section class="section">
  <div class="grid">
    <div class="column text" style="--columns: 4">
      <h2><?= $page->openingHeading()->escape() ?></h2>
      <?= $page->openingHours() ?>
    </div>
    <div class="column text" style="--columns: 4">
      <h2><?= $page->reservationHeading()->escape() ?></h2>
      <?= $page->reservationText() ?>
    </div>
    <div class="column text" style="--columns: 4">
      <h2><?= $page->contactHeading()->escape() ?></h2>
      <dl>
        <?php if ($page->email()->isNotEmpty()): ?>
        <dt>Email</dt>
        <dd><?= Html::email($page->email()) ?></dd>
        <?php endif ?>

        <?php if ($page->phone()->isNotEmpty()): ?>
        <dt>Phone</dt>
        <dd><?= Html::tel($page->phone()) ?></dd>
        <?php endif ?>
      </dl>
    </div>
  </div>
</section>

<section class="section restaurant-menu box">
  <h2 class="h2">Menu</h2>

  <hr>

  <div class="grid">
    <div class="column" style="--columns: 4">
      <h3>Starter</h3>
      <?php snippet('restaurant/dishes', ['dishes' => $page->starters()->toStructure()]) ?>
    </div>
    <div class="column" style="--columns: 4">
      <h3>Main</h3>
      <?php snippet('restaurant/dishes', ['dishes' => $page->meat()->toStructure()]) ?>
    </div>
    <div class="column" style="--columns: 4">
      <h3>Dessert</h3>
      <?php snippet('restaurant/dishes', ['dishes' => $page->dessert()->toStructure()]) ?>
    </div>
  </div>

</section>

<section class="section">
  <h2 class="h2">Impressions</h2>

  <ul class="grid">
    <?php foreach ($page->images()->template('restaurant-gallery-image')->sortBy('sort') as $image): ?>
    <li class="column" style="--columns: 4">
      <a href="<?= $image->url() ?>" class="img" data-lightbox style="--w: 4; --h: 3"><?= $image->crop(400, 300) ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</section>

<hr>

<section id="map" class="section">
  <div class="grid">
    <div class="column" style="--columns: 8">
      <h2 class="h2">Where to find us</h2>
      <?php snippet('map') ?>
    </div>
    <div class="column text" style="--columns: 4">
      <h2><?= $page->restaurant()->escape() ?></h2>
      <p>
        <?= $page->street()->escape() ?><br>
        <?= $page->zip()->escape() ?> <?= $page->city()->escape() ?><br>
        <?= $page->country()->escape() ?>
      </p>
      <p>
        Email: <?= Html::email($page->email()) ?><br>
        Phone: <?= Html::tel($page->phone()) ?><br>
      </p>
    </div>
  </div>
</section>

<?php snippet('restaurant/footer') ?>
