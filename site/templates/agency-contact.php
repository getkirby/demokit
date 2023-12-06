<?php snippet('agency/header') ?>

<header class="intro">
  <h1><?= $page->heading()->escape() ?></h1>
</header>

<div class="margin-l">
  <?php snippet('map', $location) ?>
</div>

<div class="grid margin-l">
  <div class="column text" style="--columns: 6">
    <h2><?= $page->company()->escape() ?></h2>
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

  <div class="column text" style="--columns: 6">
    <h2><?= $page->socialHeading()->escape() ?></h2>
    <ul>
      <?php foreach ($page->social()->toStructure() as $profile): ?>
      <li>
        <a href=""><?= $profile->link()->escape() ?></a>
      </li>
      <?php endforeach ?>
    </ul>
  </div>
</div>

<form class="margin-l">
  <h2 class="h2">Contact us</h2>
  <div class="fields margin-l">
    <?= $page->form()->toBlocks() ?>
  </div>
  <button class="cta">Send</button>
</form>

<?php snippet('agency/footer') ?>
