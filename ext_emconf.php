<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Monitoring for TYPO3 installations',
    'description' => '',
    'category' => 'be',
    'author' => 'Georg Ringer',
    'author_email' => '',
    'state' => 'stable',
    'version' => '3.1.0',
    'constraints' => [
        'depends' => [
            'php' => '8.2.0-8.5.99',
            'typo3' => '13.4.0-14.3.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'T3Monitor\\T3monitoring\\' => 'Classes',
        ],
    ],
];
