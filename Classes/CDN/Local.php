<?php
namespace Dagou\Jquery\CDN;

use Dagou\Jquery\Traits\Asset;

class Local extends AbstractCDN {
    use Asset;
    const URL = 'EXT:jquery/Resources/Public/';

    /**
     * @param string|NULL $js
     *
     * @return string
     */
    protected function renderJs(string $js = NULL): string {
        return $this->getAssetPath(
            self::URL.$this->getBuild()
        );
    }
}