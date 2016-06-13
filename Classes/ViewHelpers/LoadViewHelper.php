<?php
namespace Dagou\Jquery\ViewHelpers;

use Dagou\Jquery\Utility\JqueryUtility;

class LoadViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
	/**
	 * {@inheritDoc}
	 * @see \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper::initializeArguments()
	 */
	public function initializeArguments() {
		$this->registerArgument('footer', 'boolean', 'Add to footer or not.', FALSE, TRUE);
	}

	public function render() {
		JqueryUtility::loadJquery($this->arguments['footer']);
	}
}