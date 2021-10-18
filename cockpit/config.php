<?php


return [
	'groups' => [
		'power_manager' => [
			'$admin' => false,
			'$vars' => [
				'finder.path' => '/storage/upload'
			],
			'cockpit' => [
				'backend' => true,
				'finder' => true
			],
			'collections' => [
				'manage' => true
			]
		],
		'content_manager' => [
			'$admin' => false,
			'$vars' => [
				'finder.path' => '/storage/upload'
			],
			'cockpit' => [
				'backend' => true,
				'finder' => true
			],
			'collections' => [
				'manage' => false
			]
		],
		'user' => [
			'$admin' => false,
			'$vars' => [
				'finder.path' => '/storage/upload'
			],
			'cockpit' => [
				'backend' => false,
				'finder' => false
			],
			'collections' => [
				'manage' => false
			]
		],
	],
	'debug' => true
];
