<?php snippet('microsite/header') ?>

<figure class="img" style="--w:2;--h:1">
  <?= $page->image() ?>
</figure>

<section class="section">
  <h1 class="intro">Lorem ipsum</h1>
  <div class="grid">
    <div class="column text" style="--columns: 4">
      <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    </div>
    <div class="column text" style="--columns: 4">
      <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    </div>
    <div class="column text" style="--columns: 4">
      <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    </div>
  </div>
</section>

<section class="section">
  <?php snippet('grid', ['items' => 3, 'w' => 3, 'h' => 2, 'columns' => 4]) ?>
</section>

<section class="section">
  <h2 class="h1">Lorem ipsum</h2>
  <?php snippet('grid', ['items' => 2, 'w' => 4, 'h' => 5, 'columns' => 6]) ?>
</section>

<section class="section">
  <h1 class="intro">Lorem ipsum</h1>
  <div class="grid">
    <?php foreach (range(1, 6) as $item): ?>
    <div class="column text" style="--columns: 4">
      <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    </div>
    <?php endforeach ?>
  </div>
</section>

<?php snippet('microsite/footer') ?>
