  <footer class="footer">
    <a href="https://getkirby.com">Made with Kirby</a>
  </footer>

  <?= js('assets/lightbox/lightbox.js') ?>
  <script>
  let box = null;

  Array.from(document.querySelectorAll('[data-lightbox]')).forEach(element => {
    element.onclick = (e) => {
      e.preventDefault();
      box = basicLightbox.create(`<img src="${element.href}">`);
      box.show();
    };
  });

  document.onkeydown = (e) => {
    if (box && e.key === "Escape") {
      box.close();
    }
  }
  </script>

</body>
</html>
