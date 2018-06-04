<?php
namespace Dagou\Jquery\Cdn;

class jsDelivr extends AbstractCdn {
    const URL = '//cdn.jsdelivr.net/npm/jquery@'.self::VERSION.'/dist/';

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function load(string $js = NULL, bool $footer = TRUE) {
        parent::load(
            self::URL.$this->getJs(),
            $footer
        );
    }

    /**
     * @return string
     */
    protected function getJs() {
        switch ($this->getExtConf()['build']) {
            case 'default':
                return 'jquery.min.js';
            case 'slim':
                return 'jquery.slim.min.js';
        }
    }
}