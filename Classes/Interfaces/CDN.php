<?php
namespace Dagou\Jquery\Interfaces;

interface CDN {
    const VERSION = '3.5.0';

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function load(string $js = NULL, bool $footer = TRUE);
}