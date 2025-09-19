<?php
namespace Dagou\Jquery\Source;

interface SourceInterface {
    /**
     * @param string $build
     *
     * @return string
     */
    public function getJs(string $build): string;
}