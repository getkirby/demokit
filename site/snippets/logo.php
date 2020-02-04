<?php if ($section = page($section)): ?>
<nav class="logo-dropdown">
  <a class="logo" href="<?= $section->url() ?>"><?= $section->isHomePage() ? $site->title()->html() : $section->title()->html() ?></a>

  <ul class="logo-dropdown-items">
    <li><a href="<?= $site->url() ?>"><?= $site->title()->html() ?></a></li>
    <?php foreach ($site->children()->listed() as $section): ?>
    <li>
      <a <?php e($section->isOpen(), 'aria-current ') ?> href="<?= $section->url() ?>"><?= $section->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
<?php endif ?>
