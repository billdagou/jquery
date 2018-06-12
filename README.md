# TYPO3 Extension: jQuery
EXT:jquery allows you to use [jQuery](http://jquery.com/) in your extensions.

You can easily choose using CDN or local jQuery library.

**The extension version only matches jQuery library version, doesn't mean anything else.**

## How to use it
You can load the library in your Fluid template with **LoadViewHelper**.

	<html xmlns="http://www.w3.org/1999/xhtml" lang="en"
		xmlns:jq="http://typo3.org/ns/Dagou/Jquery/ViewHelpers">
		<jq:load />
	</html>

You can also load your own library.

    <jq:load js="..." />
    
Or, load the JS before the &lt;BODY&gt; tag.

    <jq:load footer="false" />
    
To add new CDN source, please refer to `\Dagou\Jquery\Cdn\jQuery` and update `$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jquery']['CDN']` accordingly.