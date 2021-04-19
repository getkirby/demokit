<ul class="autogrid shop-products" style="--min: 20rem">
  <?php foreach ($products as $product): ?>
  <li>
    <a href="<?= $product->url() ?>">
      <figure>
        <span class="img">
          <?= $product->image()->crop(800) ?>
        </span>
        <figcaption class="img-caption">
          <?= $product->title()->escape() ?>
          <span>€ <?= $product->price()->escape() ?></span>
        </figcaption>
      </figure>
    </a>
  </li>
  <?php endforeach ?>
</ul>
