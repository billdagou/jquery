# TYPO3 Extension: jQuery

EXT:jquery allows you to use [jQuery](https://jquery.com/) in your extensions.

**The extension version only matches the jQuery library version, it doesn't mean anything else.**

## How to use it
You can load the library in your Fluid template.

	<jq:load />

You can also load your own library.

    <jq:load src="..." />

For more options please refer to &lt;f:asset.script&gt;.

To use other jQuery source, you can register it in `ext_localconf.php` or `AdditionalConfiguration.php`.

    \Dagou\Jquery\Utility\ExtensionUtility::registerSource(\Dagou\Jquery\Source\StackPath::class);

You may want to disable the other source and use the local one instead in some cases, for example saving page as PDF by [WKHtmlToPdf](https://wkhtmltopdf.org/).

    <jq:load disableSource="true" />