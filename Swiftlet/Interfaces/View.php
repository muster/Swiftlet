<?php

namespace Swiftlet\Interfaces;

defined('SWIFTLET') or die('No direct script access');

interface View
{
	public function __construct(App $app, $name);

	public function get($variable, $htmlEncode = true);

	public function __get($variable);

	public function set($variable, $value = null);

	public function __set($variable, $value = null);

	public function htmlEncode($value);

	public function htmlDecode($value);

	public function render();
}
