<?php
namespace Dagou\Jquery\Utility;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class JqueryUtility {
	/**
	 * @param bool $footer
	 */
	static public function loadJquery($footer = TRUE) {
		/** @var \TYPO3\CMS\Core\Page\PageRenderer $pageRenderer */
		$pageRenderer = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Page\PageRenderer::class);

		$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['jquery']);

		$func = $footer ? 'addJsFooterLibrary' : 'addJsLibrary';

		if ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jquery']['CDN'][$extConf['cdn']]) {
			$pageRenderer->$func('jquery', $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jquery']['CDN'][$extConf['cdn']]);
		} else {
			$siteRelPath = ExtensionManagementUtility::siteRelPath('jquery');

			$pageRenderer->$func('jquery', $siteRelPath.'Resources/Public/jquery.min.js');
		}
	}
}