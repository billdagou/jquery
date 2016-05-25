# TYPO3 Extension: jQuery
EXT:jquery allows you to use [jQuery](http://jquery.com/) in your extensions.

You can easily choose using CDN or local jQuery library.

**The extension version only matches jQuery library version, doesn't mean anything else.**

## How to use it
All you need is to load the library file.

	\Dagou\Jquery\Utility\JqueryUtility::loadJquery();

## How to maintain the CDN resources
To replace or add new CDN resources, please update $GLOBALS\['TYPO3\_CONF\_VARS'\]\['EXTCONF'\]\['jquery'\]\['CDN'\] in your own extension.

	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jquery']['CDN']['New_CDN_Name'] = '...';