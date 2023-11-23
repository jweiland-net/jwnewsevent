<?php

/*
 * This file is part of the package jweiland/jwnewsevent.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Use news as event',
    'description' => 'Extend news to use them also as event',
    'category' => 'plugin',
    'author' => 'Stefan Froemken',
    'author_email' => 'projects@jweiland.net',
    'author_company' => 'jweiland.net',
    'state' => 'stable',
    'version' => '3.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.4.99',
            'news' => '11.2.0-11.2.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
