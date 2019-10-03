<?php

/**
 * Extension Manager/Repository config file for ext "bca".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'BCA',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Bca\\Bca\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'John Godfrey',
    'author_email' => 'jfgodfrey@gmail.com',
    'author_company' => 'BCA',
    'version' => '1.0.0',
];
