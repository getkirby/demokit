<?php snippet('home/header') ?>

<p class="intro">Welcome to the Kirby Demo</p>

<section class="section">
  <div class="grid">
    <div class="column text panel box" style="--columns: 6">
      <h2>Panel login</h2>
      <p>
        Email:<br>
        <strong>demo@getkirby.com</strong>
      </p>
      <p>
        Password:<br>
        <strong>demodemo</strong>
      </p>
      <p>
        <a href="<?= url('panel') ?>">Open the panel &rarr;</a>
      </p>
    </div>
    <div class="column text" style="--columns: 6">
      <h2>About this demo</h2>
      <p>
        Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Aenean lacinia bibendum nulla sed consectetur.
      </p>
      <ul>
        <li><a href="https://getkirby.com/docs">Kirby Docs &rarr;</a></li>
        <li><a href="https://forum.getkirby.com">Kirby Forum &rarr;</a></li>
      </ul>

    </div>
  </div>
</section>

<section class="section">
  <h2 class="h2">Examples</h2>
  <ul class="grid examples">
    <?php foreach ($site->children()->listed() as $example): ?>
    <li class="column" style="--columns: 4">
      <a href="<?= $example->url() ?>">
        <figure>
          <span class="img" style="--w: 4; --h:3">
            <?php if ($cover = $example->cover()): ?>
            <?= $cover->crop(400, 300) ?>
            <?php endif ?>
          </span>
          <figcaption class="img-caption">
            <p><strong><?= $example->title()->html() ?></strong></p>
            <p><small><?= $example->description()->html() ?></small></p>
          </figcaption>
        </figure>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</section>

<?php snippet('footer') ?>
