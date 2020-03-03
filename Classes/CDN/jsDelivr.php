<?php
namespace Dagou\Jquery\CDN;

class jsDelivr extends AbstractCDN {
    const URL = '//cdn.jsdelivr.net/npm/jquery@'.self::VERSION.'/dist/';

    /**
     * @return string
     */
    protected function getBuild(): string {
        switch ($this->getExtConf('build')) {
            case 'default':
                return 'jquery.min.js';
            case 'slim':
                return 'jquery.slim.min.js';
        }
    }
}