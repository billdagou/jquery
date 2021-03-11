<?php
namespace Dagou\Jquery\Source;

use Dagou\Jquery\Interfaces\Source;
use Dagou\Jquery\Traits\ExtConf;

abstract class AbstractSource implements Source {
    use ExtConf;

    const URL = '';

    /**
     * @return string
     */
    public function getJs(): string {
        return static::URL.$this->getJsBuild();
    }

    /**
     * @return string
     */
    protected function getJsBuild(): string {
        switch ($this->getExtConf('build')) {
            case 'default':
                return 'jquery-'.self::VERSION.'.min.js';
            case 'slim':
                return 'jquery-'.self::VERSION.'.slim.min.js';
        }
    }
}