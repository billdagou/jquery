<?php
namespace Dagou\Jquery\Cdn;

class jQuery extends AbstractCdn {
    const URL = '//code.jquery.com/';

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
}