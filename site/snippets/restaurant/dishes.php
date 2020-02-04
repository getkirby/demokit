<ul class="restaurant-dishes">
  <?php foreach ($dishes as $dish): ?>
  <li>
    <h4 class="restaurant-dish-name"><?= $dish->dish() ?></h4>
    <p class="restaurant-dish-description"><?= $dish->description() ?></p>
    <p class="restaurant-dish-price">€ <?= $dish->price() ?></p>
  </li>
  <?php endforeach ?>
</ul>
