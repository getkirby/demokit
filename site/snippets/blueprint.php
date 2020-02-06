<?php snippet($example . '/header') ?>

<h1 class="h1">
  <small><a href="<?= $page->url() ?>"><?= $page->title() ?></a> &rarr;</small>
  Blueprint
</h1>

<div class="text">
  <pre><code><?= blueprint($page->blueprint()->name()) ?></code></pre>
</div>

<?php snippet('agency/footer') ?>
