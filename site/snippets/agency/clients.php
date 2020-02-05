<ul class="grid agency-clients">
  <?php foreach ($clients as $client): ?>
  <li class="column" style="--columns: 2">
    <?= $client->image()->html(['alt' => 'Logo of ' . $client->title()->html() ]) ?>
  </li>
  <?php endforeach ?>
</ul>
