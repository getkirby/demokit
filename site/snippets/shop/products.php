<ul class="autogrid shop-products" style="--min: 20rem">
  <?php foreach ($products as $product): ?>
  <li>
    <a href="<?= $product->url() ?>">
      <figure>
        <span class="img">
          <?= $product->image()->crop(800) ?>
        </span>
        <figcaption class="img-caption">
          <?= $product->title()->html() ?>
          <span>€ <?= $product->price()->html() ?></span>
        </figcaption>
      </figure>
    </a>
  </li>
  <?php endforeach ?>
</ul>
