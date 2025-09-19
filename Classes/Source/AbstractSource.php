<?php
namespace Dagou\Jquery\Source;

abstract class AbstractSource implements SourceInterface {
    protected const string URL = '';
    protected const string VERSION = '3.7.1';

    /**
     * @param string $build
     *
     * @return string
     */
    public function getJs(string $build): string {
        return static::URL.$this->getBuild($build);
    }

    /**
     * @param string $buildName
     *
     * @return string
     */
    protected function getBuild(string $buildName): string {
        return 'jquery-'.self::VERSION.($buildName ? '.'.$buildName : '').'.min.js';
    }
}