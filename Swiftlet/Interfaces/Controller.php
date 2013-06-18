<?php

namespace Swiftlet\Interfaces;

defined('SWIFTLET') or die('No direct script access');

interface Controller
{
	public function __construct(App $app, View $view);

	public function index();

	public function notImplemented();
}
