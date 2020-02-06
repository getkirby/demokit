<?php snippet([$example . '/header', 'header']) ?>
<?= css('assets/prism/prism.css') ?>

<header class="intro">
  <h1 class="h1">
    <small><a href="<?= $page->url() ?>"><?= $page->title() ?></a></small><br>
    Blueprint
  </h1>
</header>

<div class="grid">
  <div class="column text" style="--columns: 3">
    <p>
      The Panel setup for this page is controlled by
      the blueprint <a href="https://github.com/getkirby/demokit/tree/master/site/blueprints/<?= $page->blueprint()->name() ?>.yml"><?= $page->blueprint()->name() ?>.yml</a>
    <p>
    <p>
      All blueprints can be found in the <a href="https://github.com/getkirby/demokit/tree/master/site/blueprints">/site/blueprints</a> folder
    </p>
    <p>
      To learn more about Kirby's blueprints, please check out our docs:
      <a href="https://getkirby.com/docs">https://getkirby.com/docs</a>
    <p>
  </div>
  <div class="column text" style="--columns: 9">
    <pre><code class="language-yaml"><?= blueprint($page->blueprint()->name()) ?></code></pre>
  </div>
</div>

<?= js('assets/prism/prism.js') ?>

<?php snippet([$example . '/footer', 'footer']) ?>
