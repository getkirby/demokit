<?php snippet('shop/header') ?>

<h1 class="shop-product-title h1"><?= $page->title()->html() ?></h1>

<div class="grid" style="--gutter: 4.5rem">
  <div class="column" style="--columns: 8">

    <?php if ($image = $page->image()): ?>
    <a href="<?= $image->url() ?>" data-lightbox class="img" style="--w: <?= $image->width() ?>; --h: <?= $image->height() ?>">
      <?= $image ?>
    </a>
    <?php else: ?>
    <figure class="img" style="--w: <?= $w ?? 1 ?>; --h: <?= $h ?? 1 ?>"></figure>
    <?php endif ?>

    <section class="section">
      <h2 class="h2">You might also like</h2>
      <ul class="grid" style="--gutter: 1.5rem">
        <?php foreach ($page->siblings(false)->shuffle()->limit(4) as $product): ?>
        <li class="column" style="--columns: 3">
          <a href="<?= $product->url() ?>">
            <figure>
              <span class="img">
                <?= $product->image()->crop(800) ?>
              </span>
              <figcaption class="img-caption">
                <p><?= $product->title()->html() ?></p>
                <p><small>€ <?= $product->price()->html() ?></small></p>
              </figcaption>
            </figure>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
    </section>

  </div>

  <div class="column" style="--columns: 4">
    <div class="shop-product-description text">
      <?= $page->description()->kt() ?>
    </div>
    <p class="shop-product-price">€ <?= $page->price() ?></p>

    <button class="cta snipcart-add-item"
      data-item-id="<?= $page->slug() ?>"
      data-item-price="<?= $page->price()->html() ?>"
      data-item-url="<?= $page->url() ?>"
      data-item-description="<?= $page->summary()->html() ?>"
      data-item-image="<?= $page->image()->url() ?>"
      data-item-name="<?= $page->title()->html() ?>">
      Add to cart
    </button>
  </div>
</div>

<?php snippet('shop/footer') ?>
