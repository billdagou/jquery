<?php
namespace Dagou\Jquery\Utility;

class ExtensionManagerConfigurationUtility {
	public function renderCDNSelector(array $params, $pObj) {
		$selector = '<select id="em-'.$params['propertyName'].'" class="form-control" name="'.$params['fieldName'].'">';

		foreach ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jquery']['CDN'] as $cdn => $_) {
			$selector .= '<option value="'.htmlspecialchars($cdn).'"'.($params['fieldValue'] == $cdn ? ' selected="selected"' : '').'>'.$GLOBALS['LANG']->sL($cdn, TRUE).'</option>';
		}

		$selector .= '</select>';

		return $selector;
	}
}