<?php

defined('TYPO3_MODE') || defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;

// Get extension configuration
$extensionConfiguration = GeneralUtility::makeInstance(ExtensionConfiguration::class);
$extensionConfiguration = $extensionConfiguration->get('imagelazyload');


$tempColumns = array(
    'tx_imagelazyload' => [
        'exclude' => 1,
        'label' => 'Lazy load images',
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => [
                [
                    0 => '',
                    1 => '',
                    'invertStateDisplay' => true
                ]
            ],
        ]
    ],
);

ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);

if ($extensionConfiguration['personnelEnablePagination']) {
    $GLOBALS['TCA']['tt_content']['types']['personnel_frompages']['showitem'] = str_replace(
        ';personnelFilters,',
        ';personnelFilters,
		--palette--;Pagination;paginatedprocessors,',
        $GLOBALS['TCA']['tt_content']['types']['personnel_frompages']['showitem']
    );
}

$GLOBALS['TCA']['tt_content']['palettes']['imagelazyload']['showitem'] = '
	tx_imagelazyload,
';

// Add lazy loading to ext:personnel
$GLOBALS['TCA']['tt_content']['palettes']['personnelLayout']['showitem'] = str_replace(
    'tx_personnel_images',
    'tx_personnel_images,tx_imagelazyload,',
    $GLOBALS['TCA']['tt_content']['palettes']['personnelLayout']['showitem']
);

// Add lazy loading to ext:pagelist
$GLOBALS['TCA']['tt_content']['palettes']['pagelist_layout']['showitem'] = str_replace(
    'tx_pagelist_disableimages',
    'tx_pagelist_disableimages,tx_imagelazyload,',
    $GLOBALS['TCA']['tt_content']['palettes']['pagelist_layout']['showitem']
);
$GLOBALS['TCA']['tt_content']['palettes']['pagelist_selected_layout']['showitem'] = str_replace(
    'tx_pagelist_disableimages',
    'tx_pagelist_disableimages,tx_imagelazyload,',
    $GLOBALS['TCA']['tt_content']['palettes']['pagelist_selected_layout']['showitem']
);

// Add lazy load to ext:gallerycontent
$GLOBALS['TCA']['tt_content']['palettes']['gallerycontentLayout']['showitem'] = str_replace(
    'tx_gallerycontent_template',
    'tx_gallerycontent_template,tx_imagelazyload,',
    $GLOBALS['TCA']['tt_content']['palettes']['gallerycontentLayout']['showitem']
);
