<?php

use Kirby\Auth\Challenge;
use Kirby\Panel\Controller\View\LoginViewController;

return function () {
	return [
		'views' => [
			'login.view' => [
				'action'  => fn (
					string $type,
					string $name
				) => new class ($type, $name) extends LoginViewController {
					public function value(): array
					{
						// only prefill the credentials form,
						// not the form of a pending challenge
						if ($this->current instanceof Challenge) {
							return [];
						}

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
