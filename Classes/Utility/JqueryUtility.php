<?php
namespace Dagou\Jquery\Utility;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class JqueryUtility {
	static public function loadJquery($footer = TRUE) {
		/** @var \TYPO3\CMS\Core\Page\PageRenderer $pageRenderer */
		$pageRenderer = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Page\PageRenderer::class);

		$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['jquery']);

		if ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jquery']['CDN'][$extConf['cdn']]) {
			if ($footer) {
				$pageRenderer->addJsFooterLibrary('jquery', $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jquery']['CDN'][$extConf['cdn']]);
			} else {
				$pageRenderer->addJsLibrary('jquery', $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jquery']['CDN'][$extConf['cdn']]);
			}
		} else {
			$siteRelPath = ExtensionManagementUtility::siteRelPath('jquery');

			if ($footer) {
				$pageRenderer->addJsFooterLibrary('jquery', $siteRelPath.'Resources/Public/jquery.min.js');
			} else {
				$pageRenderer->addJsLibrary('jquery', $siteRelPath.'Resources/Public/jquery.min.js');
			}
		}
	}
}