<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['CDN'] = [
    'jQuery' => \Dagou\Jquery\Cdn\jQuery::class,
    'Google' => \Dagou\Jquery\Cdn\Google::class,
    'Microsoft' => \Dagou\Jquery\Cdn\Microsoft::class,
    'CDNJS' => \Dagou\Jquery\Cdn\CDNJS::class,
    'jsDelivr' => \Dagou\Jquery\Cdn\jsDelivr::class,
];