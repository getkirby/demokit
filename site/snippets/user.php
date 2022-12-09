<?php if ($user = $kirby->user()): ?>
<div class="user">
	<a href="<?= url('panel') ?>">Logged in as: <b><?= $user->email() ?></b></a>
	<a href="<?= $page->panel()->url() ?>">Edit this page</a>
</div>
<?php endif ?>