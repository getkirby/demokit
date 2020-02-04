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
        <a href="<?= url('panel') ?>">Open the Panel &rarr;</a>
      </p>
    </div>
    <div class="column text" style="--columns: 6">
      <h2>About this demo</h2>
      <p>
        We've collected a set of example sites that show the flexibility of Kirby. Everything you see in this demo
        can be customized and extended to fit your own project. If you get stuck or if you have questions, please let us know: <?= Html::email('support@getkirby.com') ?>
      </p>
      <p>
        The source code for this demo can be found on Github: <a href="https://github.com/getkirby/demokit">https://github.com/getkirby/demokit</a>
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
