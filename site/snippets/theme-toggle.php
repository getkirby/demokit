<button id="theme-toggle" class="theme-toggle" aria-label="Toggle theme">
	<span class="sun-icon"><?= svg('assets/icons/sun.svg') ?></span>
	<span class="moon-icon"><?= svg('assets/icons/moon.svg') ?></span>
</button>

<script>
	const themeToggle = document.getElementById('theme-toggle');
	const html = document.documentElement;
	
	themeToggle.addEventListener('click', () => {
		const currentTheme = html.getAttribute('data-theme');
		const newTheme = currentTheme === 'light' ? 'dark' : 'light';
		
		html.setAttribute('data-theme', newTheme);
		localStorage.setItem('theme', newTheme);
	});
</script> 