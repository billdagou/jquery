<?php
namespace Dagou\Jquery\Cdn;

use Dagou\Jquery\Traits\Asset;

class Customization extends AbstractCdn {
    use Asset;

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function load(string $js = NULL, bool $footer = TRUE) {
        if ($js !== NULL) {
            parent::load($this->getAssetPath($js), $footer);
        }
    }
}