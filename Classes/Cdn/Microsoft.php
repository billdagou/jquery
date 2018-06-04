<?php
namespace Dagou\Jquery\Cdn;

class Microsoft extends AbstractCdn {
    const URL = '//ajax.aspnetcdn.com/ajax/jQuery/';

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