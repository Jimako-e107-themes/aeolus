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
		return array(
			'preloader' => array('title' => 'Display preloader', 'type' => 'boolean',  'writeParms' => array(), 'help' => ''),
			'backtotop' => array('title' => 'Display Back Top Button', 'type' => 'boolean',  'writeParms' => array(), 'help' => ''),
			'stickynavbar' => array('title' => 'Sticky Navbar', 'type' => 'boolean',  'writeParms' => array(), 'help' => ''),
			'defaultmenuarea' => array('title' => 'Default MenuArea Support', 'type' => 'boolean',  'writeParms' => array(), 
			'help' => 'With On - default menus will be displayed on all layouts'),
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
