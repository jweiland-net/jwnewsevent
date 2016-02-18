<?php
$eventColumns = array(
    'is_event' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:jwnewsevent/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.is_event',
        'config' => array(
            'type' => 'check',
            'default' => false,
        ),
    ),
    'event_start' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:jwnewsevent/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.event_start',
        'config' => array(
            'type' => 'input',
            'size' => 15,
            'eval' => 'datetime'
        ),
    ),
    'event_end' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:jwnewsevent/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.event_end',
        'config' => array(
            'type' => 'input',
            'size' => 15,
            'eval' => 'datetime'
        ),
    ),
    'location' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:jwnewsevent/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.location',
        'config' => array(
            'type' => 'input',
            'size' => 50,
        ),
    ),
    'organizer' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:jwnewsevent/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.organizer',
        'config' => array(
            'type' => 'input',
            'size' => 50,
        ),
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $eventColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news',
    ',--div--;LLL:EXT:jwnewsevent/Resources/Private/Language/locallang_db.xlf:news_tab_event,is_event, event_start, event_end, location, organizer'
);