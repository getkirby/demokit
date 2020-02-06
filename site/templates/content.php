<?php snippet([$example . '/header', 'header']) ?>
<?= css('assets/prism/prism.css') ?>

<header class="intro">
  <h1 class="h1">
    <small><a href="<?= $page->url() ?>"><?= $page->title() ?></a></small><br>
    Textfile
  </h1>
</header>

<div class="grid">
  <div class="column text" style="--columns: 3">
    <p>
      The content for this page is stored in a
      simple text file.
    <p>
    <p>
      To learn more about Kirby's content folder and text format, please check out our docs:
      <a href="https://getkirby.com/docs">https://getkirby.com/docs</a>
    <p>
  </div>
  <div class="column text" style="--columns: 9">
    <pre><code class="language-kirbycontent"><?= Data::encode($page->content()->data(), 'txt') ?></code></pre>
  </div>
</div>

<?= js('assets/prism/prism.js') ?>
<script>
Prism.languages.kirbycontent = {
  "delimiter": /\n----\s*\n*/,
  "property": {
    pattern: /(^\n*|\n----\s*\n*)[a-zA-Z0-9_\-\u0020]+/,
    lookbehind: true,
  }
};
</script>

<?php snippet([$example . '/footer', 'footer']) ?>
