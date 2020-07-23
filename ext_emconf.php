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
    'clearCacheOnLoad' => 0,
    'version' => '2.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.17-10.4.99',
            'news' => '8.0.0-8.99.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
