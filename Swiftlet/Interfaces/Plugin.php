<?php

namespace Swiftlet\Interfaces;

defined('SWIFTLET') or die('No direct script access');

interface Plugin
{
	public function __construct(App $app, View $view, Controller $controller);
}
