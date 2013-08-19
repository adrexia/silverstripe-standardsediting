<?php
class CustomHtmlEditorFieldToolbar extends Extension {

	public function updateMediaForm($form) {
		Requirements::add_i18n_javascript('cwp-core/javascript/lang');
		Requirements::javascript('cwp-core/javascript/CustomHtmlEditorFieldToolbar.js');
	}

}
