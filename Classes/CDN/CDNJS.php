<?php
namespace Dagou\Jquery\CDN;

class CDNJS extends AbstractCDN {
    const URL = '//cdnjs.cloudflare.com/ajax/libs/jquery/'.self::VERSION.'/';

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