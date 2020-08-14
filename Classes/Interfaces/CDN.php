<?php
namespace Dagou\Jquery\Interfaces;

interface CDN {
    const VERSION = '3.5.1';

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function load(string $js = NULL, bool $footer = TRUE);
}