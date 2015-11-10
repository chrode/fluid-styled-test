<?php

$EM_CONF[$_EXTKEY] = [
	'title'              => 'Fluid Styled Test Extension',
	'description'        => 'A test extension based on fluid_styled_content.',
	'category'           => 'plugin',
	'shy'                => false,
	'version'            => '1.0.0',
	'dependencies'       => '',
	'conflicts'          => '',
	'priority'           => '',
	'loadOrder'          => '',
	'module'             => '',
	'state'              => 'stable',
	'uploadfolder'       => 0,
	'createDirs'         => '',
	'modify_tables'      => '',
	'clearcacheonload'   => true,
	'lockType'           => '',
	'author'             => 'Christof Rodejohann',
	'author_email'       => 'christof.rodejohann@slub-dresden.de',
	'author_company'     => 'SLUB Dresden',
	'CGLcompliance'      => null,
	'CGLcompliance_note' => null,
	'constraints'        => [
		'depends'   => [
			'typo3' => '7.5.0-7.99.99',
			'fluid_styled_content' => ''
		],
		'conflicts' => [],
		'suggests'  => []
	],
	'autoload' => [
		'psr-4' => [
			'Slub\\FluidStyledTest\\' => 'Classes',
		]
	]
];
