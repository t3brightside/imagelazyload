<?php
$EM_CONF[$_EXTKEY] = [
	'title' => 'Image Lazy Load',
	'description' => 'Images lazy load control for pagelist, personnel, gallerycontent, and custom elements.',
	'category' => 'fe',
	'version' => '1.1.1',
	'state' => 'stable',
	'clearcacheonload' => true,
	'author' => 'Tanel Põld',
	'author_email' => 'tanel@brightside.ee',
	'author_company' => 'Brightside OÜ / t3brightside.com',
	'constraints' => [
		'depends' => [
			'typo3' => '12.4.0 - 13.99.99'
		],
	],
];
