<?php
namespace Dagou\Jquery\ViewHelpers;

use Dagou\Jquery\CDN\Customization;
use Dagou\Jquery\CDN\Local;
use Dagou\Jquery\Interfaces\CDN;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class LoadViewHelper extends AbstractViewHelper {
    public function initializeArguments() {
        $this->registerArgument('footer', 'boolean', 'Add to footer or not.', FALSE, TRUE);
        $this->registerArgument('js', 'string', 'jQuery file path.');

        $this->registerArgument('disableCdn', 'boolean', 'Disable CDN.');
    }

    public function render() {
        $cdn = $this->getCDN((bool)$this->arguments['js']);

        $cdn->load($this->arguments['js'], $this->arguments['footer']);
    }

    /**
     * @param bool $isCustomized
     *
     * @return \Dagou\Jquery\Interfaces\CDN
     */
    protected function getCDN(bool $isCustomized): CDN {
        if ($isCustomized) {
            return GeneralUtility::makeInstance(Customization::class);
        }

        if ($this->isCdnEnabled() && ($className = $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jquery']['CDN']) && is_subclass_of($className, CDN::class)) {
            return GeneralUtility::makeInstance($className);
        } else {
            return GeneralUtility::makeInstance(Local::class);
        }
    }

    /**
     * @return bool
     */
    protected function isCdnEnabled(): bool {
        return !$this->arguments['disableCdn'];
    }
}