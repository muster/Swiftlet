<?php

namespace Swiftlet;

defined('SWIFTLET') or die('No direct script access');

abstract class Controller implements Interfaces\Controller
{
	protected
		$app,
		$view,
		$title
		;

	/**
	 * Constructor
	 * @param Interfaces\App $app
	 * @param Interfaces\View $view
	 */
	public function __construct(Interfaces\App $app, Interfaces\View $view)
	{
		$this->app  = $app;
		$this->view = $view;

		$this->view->set('pageTitle', $this->title);
	}

	/**
	 * Default action
	 */
	public function index()
	{
	}

	/**
	 * Fallback in case action doesn't exist
	 *
	 * @throws \Exception
	 */
	public function notImplemented()
	{
		throw new \Exception('Action ' . $this->view->htmlEncode($this->app->getAction()) . ' not implemented in ' . get_called_class());
	}
}
