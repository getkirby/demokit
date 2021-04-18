<ul class="restaurant-dishes">
  <?php foreach ($dishes as $dish): ?>
  <li>
    <h4 class="restaurant-dish-name"><?= $dish->dish()->escape() ?></h4>
    <p class="restaurant-dish-description"><?= $dish->description()->escape() ?></p>
    <p class="restaurant-dish-price">€ <?= $dish->price()->escape() ?></p>
  </li>
  <?php endforeach ?>
</ul>
