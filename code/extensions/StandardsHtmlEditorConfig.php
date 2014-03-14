<?php

class StandardsHtmlEditorConfig extends DataExtension {
	/**
	 * Override the default HtmlEditorConfig from 'cms' to 'standards'.
	 * However if the group has a custom editor configuration set, use that as normal.
	 */
	public function getHtmlEditorConfig() {
		$originalConfig = $this->owner->getField("MenuTitle");
		if ($originalConfig) {
			return $originalConfig;
		} else {
			return 'standards';
		}
	}
}
