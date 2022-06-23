<?php if ($section = page($section)): ?>
<details class="logo">
  <summary>
    <span><?= svg('assets/icons/menu.svg') ?> <?= $section->isHomePage() ? $site->title()->escape() : $section->title()->escape() ?></span>
  </summary>

  <nav class="logo-dropdown-box">
    <header>
      <a href="<?= $site->url() ?>"><?= $site->title()->escape() ?></a>
      <form class="killer-form" id="killer" method="POST" action="<?= url('delete-demo') ?>">
        <button class="killer-button"><?= svg('assets/icons/trash.svg') ?></button>
      </form>
    </header>
    <div class="logo-dropdown-box-content">
      <div>
        <h2>Examples</h2>
        <ul>
          <?php foreach ($site->children()->listed() as $section): ?>
          <li>
            <a <?php e($section->isOpen(), 'aria-current ') ?> href="<?= $section->url() ?>"><?= $section->title()->escape() ?></a>
          </li>
          <?php endforeach ?>
        </ul>
      </div>
      <div>
        <h2>Panel</h2>

        <?php if ($kirby->user()): ?>
        <ul>
          <li><a href="<?= $page->panel()->url() ?>">Edit this page</a></li>
        </ul>
        <?php else: ?>
        <p class="logo-dropdown-box-login">
          <small>Email:</small> demo@getkirby.com<br>
          <small>Password:</small> demodemo
        </p>
        <ul>
          <li><a href="<?= url('panel') ?>">Login</a></li>
        </ul>
        <?php endif ?>

        <h2>Kirby</h2>
        <ul>
          <li><a target="_blank" href="https://getkirby.com">Website</a></li>
          <li><a target="_blank" href="https://getkirby.com/docs">Docs</a></li>
          <li><a target="_blank" href="https://forum.getkirby.com">Forum</a></li>
          <li><a target="_blank" href="https://github.com/getkirby">GitHub</a></li>
        </ul>
      </div>
    </div>
    <footer>
      This demo expires <?= $site->demoExpiryHuman() ?> (based on your activity),
      latest <span class="absolute-time" data-timestamp="<?= $site->demoExpiry(true) ?>"><?= $site->demoExpiryHuman(true) ?></span>.
    </footer>
  </nav>
</details>
<?php endif ?>
