<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex">

	<title><?= $site->title()->escape() . ' / ' . esc(implode(' / ', $site->breadcrumb()->not('home')->pluck('title'))) ?></title>

	<?= styles($example) ?>

	<?= snippet(($example ?? 'home') . '/meta') ?>
	<link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
	
	<script>
		// Check for saved theme preference or use system preference
		const savedTheme = localStorage.getItem('theme');
		const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
		
		// Only set data-theme if there's a saved preference
		if (savedTheme) {
			document.documentElement.setAttribute('data-theme', savedTheme);
		}
	</script>
</head>
<body>
