<ul class="grid agency-clients">
  <?php foreach ($clients as $client): ?>
  <li class="column" style="--columns: 2">
    <?= $client->image() ?>
  </li>
  <?php endforeach ?>
</ul>
