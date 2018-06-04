<?php
namespace Dagou\Jquery\Cdn;

class Google extends AbstractCdn {
    const URL = '//ajax.googleapis.com/ajax/libs/jquery/';

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function load(string $js = NULL, bool $footer = TRUE) {
        parent::load(
            self::URL.$this->getBuild(),
            $footer
        );
    }

    /**
     * @return string
     */
    protected function getBuild() {
        switch ($this->getExtConf()['build']) {
            case 'default':
                return self::VERSION.'/jquery.min.js';
            case 'slim':
                return self::VERSION.'/jquery.slim.min.js';
        }
    }
}