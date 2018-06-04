<?php
namespace Dagou\Jquery\Interfaces;

interface Cdn {
    const VERSION = '3.3.1';

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function load(string $js = NULL, bool $footer = TRUE);
}