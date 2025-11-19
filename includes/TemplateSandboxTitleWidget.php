<?php

namespace MediaWiki\Extension\TemplateSandbox;

use MediaWiki\Widget\TitleInputWidget;

class TemplateSandboxTitleWidget extends TitleInputWidget {
	/** @inheritDoc */
	public function getJavaScriptClassName() {
		return 'mw.widgets.TemplateSandboxTitleWidget';
	}
}
