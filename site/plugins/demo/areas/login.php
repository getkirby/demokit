<?php

use Kirby\Panel\Controller\View\LoginViewController;

return function () {
	return [
		'views' => [
			'login.view' => [
				'action'  => fn () => new class () extends LoginViewController {
					public function value(): array
					{
						return [
							'email'    => 'demo@getkirby.com',
							'password' => 'demodemo'
						];
					}
				}
			]
		]
	];
};
