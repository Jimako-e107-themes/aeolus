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
			'navbar-01.html' => 'Navbar 01',
			'navbar-02.html' => 'Navbar 02',
			'navbar-03.html' => 'Navbar 03',
			'navbar-04.html' => 'Navbar 04',
			'navbar-05.html' => 'Navbar 05',
			'navbar-06.html' => 'Navbar 06',
			'navbar-07.html' => 'Navbar 07',
			'navbar-08.html' => 'Navbar 08',
			'navbar-09.html' => 'Navbar 09',
			'navbar-10.html' => 'Navbar 10'
		);

		$footers = array('footer-01.html' => 'Footer 01', 'footer-02.html' => 'Footer 02', 'footer-06.html' => 'Footer 06', 'footer-13.html' => 'Footer 13');

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
