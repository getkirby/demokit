<?php if ($section = page($section)): ?>
<span class="logo-dropdown">
  <a class="logo" href="<?= $section->url() ?>"><?= $section->isHomePage() ? $site->title()->html() : $section->title()->html() ?></a>

  <nav class="logo-dropdown-box">
    <header>
      <a href="<?= $site->url() ?>"><?= $site->title()->html() ?></a>
    </header>
    <div class="logo-dropdown-box-content">
      <div>
        <h2>Examples</h2>
        <ul>
          <?php foreach ($site->children()->listed() as $section): ?>
          <li>
            <a <?php e($section->isOpen(), 'aria-current ') ?> href="<?= $section->url() ?>"><?= $section->title()->html() ?></a>
          </li>
          <?php endforeach ?>
        </ul>
      </div>
      <div>
        <h2>Panel</h2>

        <?php if ($kirby->user()): ?>
        <ul>
          <li><a href="<?= $page->panelUrl() ?>">Edit this page</a></li>
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
          <li><a target="_blank" href="https://github.com/getkirby">Github</a></li>
        </ul>
      </div>
    </div>
    <footer>
      Expires <?= $site->expiresIn() ?>
    </footer>
  </nav>
</span>
<?php endif ?>
