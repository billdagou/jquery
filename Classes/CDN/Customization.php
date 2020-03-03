<?php
namespace Dagou\Jquery\CDN;

use Dagou\Jquery\Traits\Asset;

class Customization extends AbstractCDN {
    use Asset;

    /**
     * @param string|NULL $js
     *
     * @return string
     */
    protected function renderJs(string $js = NULL): string {
        return $this->getAssetPath($js);
    }
}