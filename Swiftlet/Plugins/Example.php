<?php

namespace Swiftlet\Plugins;

defined('SWIFTLET') or die('No direct script access');

class Example extends \Swiftlet\Plugin
{
	/**
	 * Implementation of the actionAfter hook
	 */
	public function actionAfter()
	{
		if ( get_class($this->controller) === 'Swiftlet\Controllers\Index' ) {
			$this->view->helloWorld .= ' This string was altered by ' . __CLASS__ . '.';
		}
	}
}
