<?php snippet('agency/header') ?>

<header class="intro">
  <h1><?= $page->heading()->html() ?></h1>
</header>

<div class="margin-l">
  <?php snippet('map', $location) ?>
</div>

<div class="grid">
  <div class="column text" style="--columns: 6">
    <h2><?= $page->company() ?></h2>
    <p>
      <?= $page->street() ?><br>
      <?= $page->zip() ?> <?= $page->city() ?><br>
      <?= $page->country() ?>
    </p>
    <p>
      Email: <?= Html::email($page->email()) ?><br>
      Phone: <?= Html::tel($page->phone()) ?><br>
    </p>
  </div>

  <div class="column text" style="--columns: 6">
    <h2><?= $page->socialHeading() ?></h2>
    <ul>
      <?php foreach ($page->social()->toStructure() as $profile): ?>
      <li>
        <a href=""><?= $profile->link() ?></a>
      </li>
      <?php endforeach ?>
    </ul>
  </div>

</div>

<?php snippet('agency/footer') ?>
