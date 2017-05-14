<?php
class CustomHtmlEditorFieldToolbar extends Extension {

	public function updateMediaForm($form) {
		Requirements::add_i18n_javascript('standardsediting/javascript/lang');
		Requirements::javascript('standardsediting/javascript/CustomHtmlEditorFieldToolbar.js');
	}

}
