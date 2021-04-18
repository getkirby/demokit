<ul class="grid" style="--gutter: 3rem .75rem">
  <?php foreach ($projects as $project): ?>
  <li class="column" style="--columns: <?= $columns ?? 6 ?>">
    <a href="<?= $project->url() ?>">
      <figure>
        <span class="img" style="--w:4;--h:3">
          <?php if ($image = $project->images()->template('agency-project-cover')->first()): ?>
          <?= $image->crop(800, 600) ?>
          <?php endif ?>
        </span>
        <figcaption class="img-caption">
          <p><?= $project->title()->escape() ?></p>
          <?php if ($project->category()->isNotEmpty()): ?>
          <p><small><?= $project->category()->escape() ?></small></p>
          <?php endif ?>
        </figcaption>
      </figure>
    </a>
  </li>
  <?php endforeach ?>
</ul>
