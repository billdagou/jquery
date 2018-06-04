<?php
namespace Dagou\Jquery\ViewHelpers;

use Dagou\Jquery\Cdn\Customization;
use Dagou\Jquery\Cdn\Local;
use Dagou\Jquery\Interfaces\Cdn;
use Dagou\Jquery\Traits\ExtConf;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class LoadViewHelper extends AbstractViewHelper {
    use ExtConf;

    public function initializeArguments() {
        $this->registerArgument('footer', 'boolean', 'Add to footer or not.', FALSE, TRUE);
        $this->registerArgument('js', 'string', 'jQuery file path.');
    }

    public function render() {
        $cdn = $this->getCdn((bool)$this->arguments['js']);

        $cdn->load($this->arguments['js'], $this->arguments['footer']);
    }

    /**
     * @param bool $isCustomized
     *
     * @return \Dagou\Jquery\Interfaces\Cdn
     */
    protected function getCdn(bool $isCustomized) {
        if ($isCustomized) {
            return GeneralUtility::makeInstance(Customization::class);
        }

        if (($cdnClassName = $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jquery']['CDN'][$this->getExtConf()['cdn']])) {
            $cdn = GeneralUtility::makeInstance($cdnClassName);

            return $cdn instanceof Cdn ? $cdn : GeneralUtility::makeInstance(Local::class);
        } else {
            return GeneralUtility::makeInstance(Local::class);
        }
    }
}