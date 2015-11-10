<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {

	$languageFilePrefix = 'LLL:EXT:fluid_styled_content/Resources/Private/Language/Database.xlf:';
	$customLanguageFilePrefix = 'LLL:EXT:fluid-styled-test/Resources/Private/Language/locallang_be.xlf:';
	$frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';

	// Add the CType "fs_progressbar"
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
		'tt_content',
		'CType',
		[
			'LLL:EXT:fluid-styled-test/Resources/Private/Language/locallang_be.xlf:wizard.title',
			'fs_progressbar'
		],
		'after'
	);

	$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['fs_progressbar'] = $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['textmedia'];

	// Define what fields to display
	$GLOBALS['TCA']['tt_content']['types']['fs_progressbar'] = [
		'showitem'         => '
                --palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
                --div--;' . $customLanguageFilePrefix . 'tca.tab.progressElements,
                 pi_flexform
        '
	];

});
