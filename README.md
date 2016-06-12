# TYPO3 Extension: jQuery
EXT:jquery allows you to use [jQuery](http://jquery.com/) in your extensions.

You can easily choose using CDN or local jQuery library.

**The extension version only matches jQuery library version, doesn't mean anything else.**

## How to use it
You can load the library in your PHP code.

	\Dagou\Jquery\Utility\JqueryUtility::loadJquery();

Or, use the ViewHelper in your Fluid template.

	<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
		xmlns:jq="http://typo3.org/ns/Dagou/Jquery/ViewHelpers">
		<jq:load />
	</html>

#### LoadViewHelper
The ViewHelper you need to load jQuery library in your Fluid template.

	<jq:load />

Allowed attributes:

- `footer` (boolean)
Add the library to footer or not. Default: `TRUE`.

## How to maintain the CDN resources
To replace or add new CDN resources, please update $GLOBALS\['TYPO3\_CONF\_VARS'\]\['EXTCONF'\]\['jquery'\]\['CDN'\] in your own extension.

	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jquery']['CDN']['New_CDN_Name'] = '...';