<?php
namespace Dagou\Jquery\Source;

use Dagou\Jquery\Interfaces\Source;

abstract class AbstractSource implements Source {
    protected const URL = '';
    protected const VERSION = '3.6.1';

    /**
     * @param string $build
     *
     * @return string
     */
    public function getJs(string $build): string {
        return static::URL.$this->getJsBuild($build);
    }

    /**
     * @param string $buildName
     *
     * @return string
     */
    protected function getJsBuild(string $buildName): string {
        return 'jquery-'.self::VERSION.($buildName ? '.'.$buildName : '').'.min.js';
    }
}