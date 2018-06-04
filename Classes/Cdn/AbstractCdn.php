<?php
namespace Dagou\Jquery\Cdn;

use Dagou\Jquery\Interfaces\Cdn;
use Dagou\Jquery\Traits\ExtConf;
use Dagou\Jquery\Traits\PageRenderer;
use TYPO3\CMS\Core\SingletonInterface;

abstract class AbstractCdn implements Cdn, SingletonInterface {
    use ExtConf, PageRenderer;

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function load(string $js = NULL, bool $footer = TRUE) {
        if ($footer) {
            $this->getPageRenderer()->addJsFooterLibrary('jquery', $js);
        } else {
            $this->getPageRenderer()->addJsLibrary('jquery', $js);
        }
    }

    /**
     * @return string
     */
    protected function getJs() {
        switch ($this->getExtConf()['build']) {
            case 'default':
                return 'jquery-'.self::VERSION.'.min.js';
            case 'slim':
                return 'jquery-'.self::VERSION.'.slim.min.js';
        }
    }
}