<?php
namespace Dagou\Jquery\Cdn;

use Dagou\Jquery\Traits\Asset;

class Local extends AbstractCdn {
    use Asset;
    const URL = 'EXT:jquery/Resources/Public/';

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function load(string $js = NULL, bool $footer = TRUE) {
        parent::load(
            $this->getAssetPath(
                self::URL.$this->getJs()
            ),
            $footer
        );
    }
}