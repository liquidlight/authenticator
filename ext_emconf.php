<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

$EM_CONF[$_EXTKEY] = [
	'title'            => 'Authenticator',
	'description'      => 'Implements a two factor authentication for TYPO3 via TOTP. Currently a for backend only.',
	'category'         => 'services',
	'author'           => 'Philipp Gampe',
	'author_email'     => 'philipp.gampe@typo3.org',
	'author_company'   => '',
	'state'            => 'stable',
	'createDirs'       => '',
	'clearCacheOnLoad' => true,
	'version'          => '2.0.0',
	'constraints'      => [
		'depends' => [
			'typo3' => '9.0.0-9.9.99',
		],
		'conflicts' => [],
		'suggests'  => [],
	],
];
