<?php

/*
 * AHnames implementation of HiPanel
 *
 * @link      https://ahnames.com/
 * @package   hipanel
 * @license   proprietary
 * @copyright Copyright (c) 2015-2016, AHnames (https://ahnames.com/)
 */

return [
    'components' => [
        'themeManager' => [
            'assets' => [
                \ahnames\hipanel\assets\ProjectAsset::class,
                \ahnames\assets\ahnames\AhnamesAsset::class,
            ],
        ],
    ],
];
