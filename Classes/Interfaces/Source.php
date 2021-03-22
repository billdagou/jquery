<?php
namespace Dagou\Jquery\Interfaces;

interface Source {
    const VERSION = '3.6.0';

    /**
     * @return string
     */
    public function getJs(): string;
}