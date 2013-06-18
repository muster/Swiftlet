<?php defined('SWIFTLET') or die('No direct script access') ?><!DOCTYPE html>

<html>
	<head>
		<title><?= $this->htmlEncode($this->app->getConfig('siteName')) . ' - ' . $this->pageTitle ?></title>

		<link type="text/css" rel="stylesheet" href="<?= $this->app->getRootPath() ?>views/css/layout.css">
	</head>
	<body>
