# TYPO3 Extension: jQuery

EXT:jquery allows you to use [jQuery](https://jquery.com/) in your extensions.

**The extension version only matches the jQuery library version, it doesn't mean anything else.**

## How to use it
You can load the library in your Fluid template with **LoadViewHelper**.

	<jq:load />

You can also load your own library.

    <jq:load js="..." />
    
Or, load the JS before the &lt;BODY&gt; tag.

    <jq:load footer="false" />
    
To use the CDN resource, please set `$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jquery']['CDN']` in `ext_localconf.php` or `AdditionalConfiguration.php`.

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jquery']['CDN'] = \Dagou\Jquery\CDN\StackPath::class;