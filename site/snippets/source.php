<?= css('assets/prism/prism.css') ?>

<header class="h1">
  <h1>View source: <?= esc($heading) ?></h1>
</header>

<div class="grid">
  <div class="column" style="--columns: 3">
    <div class="text margin-l">
      <?= snippet('source/' . $text) ?>
    </div>
    <p>
      <a href="<?= $page->url() ?>" class="cta">Back to the page</a>
    </p>
  </div>
  <div class="column text" style="--columns: 9">
    <figure class="codeblock">
      <figcaption><?= $subheading ?></figcaption>
      <pre><code class="language-<?= $language ?>"><?= esc($source) ?></code></pre>
    </figure>
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
