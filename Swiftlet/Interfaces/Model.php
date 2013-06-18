<?php

namespace Swiftlet\Interfaces;

defined('SWIFTLET') or die('No direct script access');

interface Model
{
	public function __construct(App $app);
}
