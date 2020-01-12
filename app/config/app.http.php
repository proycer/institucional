<?php

return [
    'routes' => [
        '[/]' => [
            'controller' => 'ProycerWeb\Http\Controller\WebController',
            'action'     => 'index'
        ],
	    '/servicios[/]' => [
            'controller' => 'ProycerWeb\Http\Controller\WebController',
            'action'     => 'servicios'
        ],
	    '/nosotros[/]' => [
            'controller' => 'ProycerWeb\Http\Controller\WebController',
            'action'     => 'nosotros'
        ],
	    '/contacto[/]' => [
            'controller' => 'ProycerWeb\Http\Controller\WebController',
            'action'     => 'contacto'
        ],
	    '/autogestion[/]' => [
            'controller' => 'ProycerWeb\Http\Controller\WebController',
            'action'     => 'autogestion'
        ],
        '*'    => [
            'controller' => 'ProycerWeb\Http\Controller\WebController',
            'action'     => 'error'
        ]
    ],
    'database' => include __DIR__ . '/database.php'
];