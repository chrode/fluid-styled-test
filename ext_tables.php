<?php
defined('TYPO3_MODE') or die();

// Include new content elements to modWizards
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
	'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid-styled-test/Configuration/PageTSconfig/FluidStyledProgressbar.ts">'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Base', 'Fluid Styled Test Base');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Progressbar', 'Fluid Styled Progressbar');

// Add a flexform to the fs_slider CType
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
	'',
	'FILE:EXT:fluid-styled-test/Configuration/FlexForms/fs_progressbar_flexform.xml',
	'fs_progressbar'
);
