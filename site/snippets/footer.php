  <footer class="footer">
    <div class="grid">
      <div class="column" style="--columns: 6">
        <h2><a href="https://getkirby.com">Made with Kirby</a></h2>
        <p>
          Kirby: the file-based CMS that adapts to any project, loved by developers and editors alike
        </p>
      </div>
      <div class="column" style="--columns: 2">
        <h2>Examples</h2>
        <ul>
          <?php foreach ($pages->listed() as $example): ?>
          <li><a href="<?= $example->url() ?>"><?= $example->title()->html() ?></a></li>
          <?php endforeach ?>
        </ul>
      </div>
      <div class="column" style="--columns: 2">
        <h2>View source</h2>
        <?php if ($page->isHomePage()): ?>
        <ul>
          <li><a href="<?= $site->url() ?>/home.yml">Blueprint</a></li>
          <li><a href="<?= $site->url() ?>/home.txt">Textfile</a></li>
          <li><a href="<?= $site->url() ?>/home.html">Template</a></li>
        </ul>
        <?php else: ?>
        <ul>
          <li><a href="<?= $page->url() ?>.yml">Blueprint</a></li>
          <li><a href="<?= $page->url() ?>.txt">Textfile</a></li>
          <li><a href="<?= $page->url() ?>.html">Template</a></li>
        </ul>
        <?php endif ?>
      </div>
      <div class="column" style="--columns: 2">
        <h2>Kirby</h2>
        <ul>
          <li><a href="https://getkirby.com">Website</a></li>
          <li><a href="https://getkirby.com/docs">Docs</a></li>
          <li><a href="https://forum.getkirby.com">Forum</a></li>
          <li><a href="https://github.com/getkirby">GitHub</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <?= js('assets/lightbox/lightbox.js') ?>
  <script>

  document.querySelector("#killer").addEventListener("submit", (e) => {
    if (!confirm("Do you really want to delete your instance?")) {
      e.preventDefault();
    }
  });

  let box = null;
  let logo = document.querySelector(".logo");

  Array.from(document.querySelectorAll("[data-lightbox]")).forEach(element => {
    element.onclick = (e) => {
      e.preventDefault();
      box = basicLightbox.create(`<img src="${element.href}">`);
      box.show();
    };
  });

  logo.onclick = (e) => {
    e.stopPropagation();
  };

  document.onclick = () => {
    logo.removeAttribute("open");
  };

  document.onkeydown = (e) => {
    if (e.key === "Escape") {
      if (box) {
        box.close();
      }
      logo.removeAttribute("open");
    }
  }
  </script>

</body>
</html>
