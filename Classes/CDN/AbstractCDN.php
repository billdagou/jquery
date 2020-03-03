<?php
namespace Dagou\Jquery\CDN;

use Dagou\Jquery\Interfaces\CDN;
use Dagou\Jquery\Traits\ExtConf;
use Dagou\Jquery\Traits\PageRenderer;
use TYPO3\CMS\Core\SingletonInterface;

abstract class AbstractCDN implements CDN, SingletonInterface {
    use ExtConf, PageRenderer;
    const URL = '';

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function load(string $js = NULL, bool $footer = TRUE) {
        $js = $this->renderJs($js);

        if ($footer) {
            $this->getPageRenderer()->addJsFooterLibrary('jquery', $js);
        } else {
            $this->getPageRenderer()->addJsLibrary('jquery', $js);
        }
    }

    /**
     * @param string|NULL $js
     *
     * @return string
     */
    protected function renderJs(string $js = NULL): string {
        return self::URL.$this->getBuild();
    }

    /**
     * @return string
     */
    protected function getBuild(): string {
        switch ($this->getExtConf('build')) {
            case 'default':
                return 'jquery-'.self::VERSION.'.min.js';
            case 'slim':
                return 'jquery-'.self::VERSION.'.slim.min.js';
        }
    }
}