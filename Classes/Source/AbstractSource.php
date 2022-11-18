<?php
namespace Dagou\Jquery\Source;

use Dagou\Jquery\Interfaces\Source;
use Dagou\Jquery\Traits\ExtConf;

abstract class AbstractSource implements Source {
    use ExtConf;

    const URL = '';

    /**
     * @return string
     * @throws \TYPO3\CMS\Core\Configuration\Exception\ExtensionConfigurationExtensionNotConfiguredException
     * @throws \TYPO3\CMS\Core\Configuration\Exception\ExtensionConfigurationPathDoesNotExistException
     */
    public function getJs(): string {
        return static::URL.$this->getJsBuild();
    }

    /**
     * @return string
     * @throws \TYPO3\CMS\Core\Configuration\Exception\ExtensionConfigurationExtensionNotConfiguredException
     * @throws \TYPO3\CMS\Core\Configuration\Exception\ExtensionConfigurationPathDoesNotExistException
     */
    protected function getJsBuild(): string {
        switch ($this->getExtConf('build')) {
            case 'default':
                return 'jquery-'.self::VERSION.'.min.js';
            case 'slim':
                return 'jquery-'.self::VERSION.'.slim.min.js';
        }
    }
}