<?php
namespace Dagou\Jquery\Traits;

use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Utility\GeneralUtility;

trait ExtConf {
    /**
     * @param string $path
     *
     * @return string
     * @throws \TYPO3\CMS\Core\Configuration\Exception\ExtensionConfigurationExtensionNotConfiguredException
     * @throws \TYPO3\CMS\Core\Configuration\Exception\ExtensionConfigurationPathDoesNotExistException
     */
    protected function getExtConf(string $path): string {
        return GeneralUtility::makeInstance(ExtensionConfiguration::class)
            ->get('jquery', $path);
    }
}