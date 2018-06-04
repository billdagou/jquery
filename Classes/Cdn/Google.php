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
            self::URL.self::VERSION.'/'.$this->getJs(),
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