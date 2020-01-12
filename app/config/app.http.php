<?php

return [
	'routes' => [
		'get' => [
			'[/]' => [
				'controller' => 'ProycerWeb\Http\Controller\WebController',
				'action' => 'index'
			],
			'/servicios/wisp[/]' => [
				'controller' => 'ProycerWeb\Http\Controller\WebController',
				'action' => 'wisp'
			],
			'/servicios[/]' => [
				'controller' => 'ProycerWeb\Http\Controller\WebController',
				'action' => 'servicios'
			],
			'/nosotros[/]' => [
				'controller' => 'ProycerWeb\Http\Controller\WebController',
				'action' => 'nosotros'
			],
			'/contacto[/]' => [
				'controller' => 'ProycerWeb\Http\Controller\WebController',
				'action' => 'contacto'
			],
			'/autogestion[/]' => [
				'controller' => 'ProycerWeb\Http\Controller\WebController',
				'action' => 'autogestion'
			]
		],
		'post' => [
			'/contacto[/]' => [
				'controller' => 'ProycerWeb\Http\Controller\WebController',
				'action' => 'contacto'
			],
			'/contrato[/]' => [
				'controller' => 'ProycerWeb\Http\Controller\WebController',
				'action' => 'contratoWisp'
			],
			'/servicios[/]' => [
				'controller' => 'ProycerWeb\Http\Controller\WebController',
				'action' => 'servicios'
			]
		],
		'*' => [
			'*' => [
				'controller' => 'ProycerWeb\Http\Controller\WebController',
				'action' => 'error'
			]
		]
	],
];
