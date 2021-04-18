<nav class="menu">
  <?php foreach ($items as $item): ?>
  <a <?php e($item->isOpen(), 'aria-current ') ?> href="<?= $item->url() ?>"><?= $item->title()->escape() ?></a>
  <?php endforeach ?>
  <?php snippet('social') ?>
</nav>
