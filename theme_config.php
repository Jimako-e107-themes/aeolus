<?php

if (!defined('e107_INIT'))
{
	exit;
}

$sitetheme = e107::getPref('sitetheme');

e107::themeLan('admin', $sitetheme, true);

class theme_config implements e_theme_config
{

	function __construct()
	{
	}


	function config()
	{

		$footers = array('footer-01' => 'Footer 01', 'footer-02' => 'Footer 02', 'footer-06' => 'Footer 06', 'footer-13' => 'Footer 13');

		return array(
			'preloader' => array('title' => 'Display preloader', 'type' => 'boolean',  'writeParms' => array(), 'help' => ''),
			'backtotop' => array('title' => 'Display Back Top Button', 'type' => 'boolean',  'writeParms' => array(), 'help' => ''),
			'stickynavbar' => array('title' => 'Sticky Navbar', 'type' => 'boolean',  'writeParms' => array(), 'help' => ''),
			'footer'    => array('title' => 'Select Footer', 'type' => 'dropdown', 'writeParms' => array('optArray' => $footers)),
		);
	}

	function help()
	{
		return null;
	}

	function process()
	{
		return null;
	}
}
