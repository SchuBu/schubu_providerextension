<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\FluidTYPO3\Flux\Core::registerProviderExtensionKey('Schubu.SchubuProvider', 'Page');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('Schubu.SchubuProvider', 'Content');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'My provider extension');
