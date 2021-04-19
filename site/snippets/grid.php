<ul class="grid" style="--gutter:<?= $gutter ?? 3 ?>rem">
  <?php foreach (range(1, $items) as $item): ?>
  <li class="column" style="--columns: <?= $columns ?? 3 ?>">
    <a href="#">
      <figure>
        <span class="img" style="--w:<?= $w ?? 1 ?>; --h:<?= $h ?? 1 ?>"></span>
        <figcaption class="img-caption">
          Lorem ipsum
        </figcaption>
      </figure>
    </a>
  </li>
  <?php endforeach ?>
</ul>
