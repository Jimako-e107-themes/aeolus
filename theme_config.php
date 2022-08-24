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
		$navbars = array(
			'navbar-01' => 'Navbar 01',
			'navbar-02' => 'Navbar 02',
			'navbar-03' => 'Navbar 03',
			'navbar-04' => 'Navbar 04',
			'navbar-05' => 'Navbar 05',
			'navbar-06' => 'Navbar 06',
			//'navbar-07' => 'Navbar 07',
			'navbar-08' => 'Navbar 08',
			'navbar-09' => 'Navbar 09',
			'navbar-10' => 'Navbar 10'
		);

		$footers = array('footer-01' => 'Footer 01', 'footer-02' => 'Footer 02', 'footer-06' => 'Footer 06', 'footer-13' => 'Footer 13');

		return array(
			'preloader' => array('title' => 'Display preloader', 'type' => 'boolean',  'writeParms' => array(), 'help' => ''),
			'backtotop' => array('title' => 'Display Back Top Button', 'type' => 'boolean',  'writeParms' => array(), 'help' => ''),
			'navbar'    => array('title' => 'Select Navbar', 'type' => 'dropdown', 'writeParms' => array('optArray' => $navbars)),
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
