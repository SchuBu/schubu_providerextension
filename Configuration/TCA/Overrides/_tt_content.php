<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tt_content']['types']['fluidcontent_content']['showitem'] = '
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance, layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout_formlabel,
--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, --palette--;;language,
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
--palette--;;hidden,
--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category, categories,
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription,
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
--div--;LLL:EXT:flux/Resources/Private/Language/locallang.xlf:tt_content.tabs.relation, tx_flux_parent, tx_flux_column
';
