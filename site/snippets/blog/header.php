<?php snippet('header', ['example' => 'blog']) ?>

<header class="header">
	<?php snippet('logo', ['section' => 'blog']) ?>
	<nav class="menu">
		<span class="social">
			<a href="<?= url('blog.rss') ?>"><?= svg('assets/icons/feed.svg') ?></a>
			<a href="https://mastodon.social/@getkirby"><?= svg('assets/icons/mastodon.svg') ?></a>
			<a href="https://chat.getkirby.com"><?= svg('assets/icons/discord.svg') ?></a>
			<a href="https://bsky.app/profile/getkirby.com"><?= svg('assets/icons/bluesky.svg') ?></a>
			<a href="https://www.linkedin.com/company/getkirby/"><?= svg('assets/icons/linkedin.svg') ?></a>
			<a href="https://youtube.com/kirbycasts"><?= svg('assets/icons/youtube.svg') ?></a>
		</span>
	</nav>
</header>

<main class="main">
