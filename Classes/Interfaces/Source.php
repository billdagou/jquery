<?php
namespace Dagou\Jquery\Interfaces;

interface Source {
    const VERSION = '3.6.1';

    /**
     * @return string
     */
    public function getJs(): string;
}