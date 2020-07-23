<?php

/*
 * This file is part of the package jweiland/jwnewsevent.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

$eventColumns = [
    'is_event' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:jwnewsevent/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.is_event',
        'config' => [
            'type' => 'check',
            'default' => false,
        ],
    ],
    'event_start' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:jwnewsevent/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.event_start',
        'config' => [
            'type' => 'input',
            'size' => 15,
            'renderType' => 'inputDateTime',
            'default' => 0,
            'eval' => 'datetime,int'
        ],
    ],
    'event_end' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:jwnewsevent/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.event_end',
        'config' => [
            'type' => 'input',
            'size' => 15,
            'renderType' => 'inputDateTime',
            'default' => 0,
            'eval' => 'datetime,int'
        ],
    ],
    'location' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:jwnewsevent/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.location',
        'config' => [
            'type' => 'input',
            'size' => 50,
        ],
    ],
    'organizer' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:jwnewsevent/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.organizer',
        'config' => [
            'type' => 'input',
            'size' => 50,
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $eventColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news',
    ',--div--;LLL:EXT:jwnewsevent/Resources/Private/Language/locallang_db.xlf:news_tab_event,is_event, event_start, event_end, location, organizer'
);
