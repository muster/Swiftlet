<?php

namespace Swiftlet\Models;

defined('SWIFTLET') or die('No direct script access');

class Example extends \Swiftlet\Model
{
	/**
	 * Example method. This could be anything, really...
	 * @return string
	 */
	public function getHelloWorld()
	{
		return 'Hello world!';
	}
}
