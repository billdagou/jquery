<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY]['CDN'] = [
	'None' => '',
	'MaxCDN' => '//code.jquery.com/jquery-3.1.1.min.js',
	'Google' => '//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js',
	'Microsoft' => '//ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js',
	'CDNJS' => '//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js',
	'jsDelivr' => '//cdn.jsdelivr.net/jquery/3.1.1/jquery.min.js',
];