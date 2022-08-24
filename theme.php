<?php

if (!defined('e107_INIT'))
{
	exit();
}

$sitetheme = e107::getPref('sitetheme');
$value = e107::getThemeConfig($sitetheme)->getPref();
/*
$pArray = array(
	'navbar' => 'navbar-05',
	'footer' => 'footer-06'
);
*/
e107::getThemeConfig($sitetheme)->setPref($pArray);

class theme implements e_theme_render
{


	public function __construct()
	{

		///// CONSTANTS ////////////////////////////////////////////////////
		define("THEME_DISCLAIMER", '');
		define('COMMENTLINK', 	e107::getParser()->toGlyph('lni-comments-alt'));  //works only in __construct() 

	}

	public function init()
	{
		e107::lan('theme');



		////// Your own css fixes ////////////////////////////////////////////////////
		define('CORE_CSS', true);

		////// Theme meta tags /////////////////////////////////////////////////////////
		$this->set_metas();

		/////// Theme css  /////////////////////////////////////////////////////////////
		$this->register_css();

		/////// Theme js  /////////////////////////////////////////////////////////////
		$this->register_js();

		/////// Theme fonts ///////////////////////////////////////////////////////////
		$this->register_fonts();

		/////// Theme icons ///////////////////////////////////////////////////////////
		$this->register_icons();

		/////// Inline css and js /////////////////////////////////////////////////////
		$this->getInlineCodes();
	}

	public function set_metas()
	{
		e107::meta('viewport', 'width=device-width, initial-scale=1.0');
	}

	public function register_css()
	{
		$sitetheme = e107::getPref('sitetheme');

		//e107::css('theme', 'e107.css');  //if define('CORE_CSS', false);

		//e107::css('theme', 'assets/css/bootstrap.min.css');

		e107::css('theme', 'assets/css/glightbox.min.css');
		e107::css('theme', 'assets/css/lineicons.min.css');
		//e107::css('theme', 'assets/css/loading-bar.min.css');
		e107::css('theme', 'assets/css/tiny-slider.css');

        //original css    e107::css('theme', 'theme.css');
		e107::css('theme', 'css/starter.css');   //core
		e107::css('theme', 'css/form-elements.css');   //core
		e107::css('theme', 'css/button-page.css');   //core
		e107::css('theme', 'css/scroll-top.css');
		e107::css('theme', 'css/list-style/list-style.css');   //core
		e107::css('theme', 'css/section-title/section-title-02.css');   //app template
		e107::css('theme', 'css/section-title/section-title-03.css');   //startup template
		//e107::css('theme', 'css/navbars/navbar-01.css');   //core
		//e107::css('theme', 'css/headers/header-10.css');   //app template
		e107::css('theme', 'css/clients/clients-03.css');   //app template
		e107::css('theme', 'css/features/feature-12.css');   //app template
		e107::css('theme', 'css/about/about-08.css');   //app template		
		e107::css('theme', 'css/videos/video-01.css');   //core
		e107::css('theme', 'css/pricings/pricing-13.css');   //app template	
		e107::css('theme', 'css/sliders/slider-07.css');   //app template	
		e107::css('theme', 'css/call-to-action/call-to-action-03.css');   //app template
		e107::css('theme', 'css/teams/team-07.css');   //app template
		e107::css('theme', 'css/contact/contact-06.css');	//app template
		// e107::css('theme', 'css/footers/footer-05.css');	//app template
		e107::css('theme', 'css/services/service-07.css');	//startup template
        e107::css('theme', 'css/videos/video-02.css');   //startup template        

		//new e107 stuff - featurebox
		e107::css('theme', 'css/sliders/slider-01.css');  //core

		//new e107 stuff - signup form
		e107::css('theme', 'css/sign-in-up/sign-in-up-01.css');  //core

		//new e107 stuff - news grid template
		e107::css('theme', 'css/blogs/blog-01.css');
		e107::css('theme', 'css/blogs/blog-02.css');
		e107::css('theme', 'css/blogs/blog-05.css');
		e107::css('theme', 'css/blogs/blog-08.css');
		e107::css('theme', 'css/blogs/blog-10.css');  //menus in sidebar

		//new e107 stuff - contact page
		e107::css('theme', 'css/contact/contact-04.css');

		//missing stuff, quick fixes and css no used in sass version 
		e107::css('theme', 'style.css');
	}

	public function register_js()
	{
		//e107::js('theme', 'bootstrap.bundle.min.js', 'jquery');

		//e107::js('theme', 'assets/js/count-up.min.js', 'jquery');
		e107::js('theme', 'assets/js/glightbox.min.js', 'jquery');
		//e107::js('theme', 'assets/js/loading-bar.min.js', 'jquery');
		e107::js('theme', 'assets/js/tiny-slider.js', 'jquery');
		e107::js('theme', 'assets/js/main.js', 'jquery');

		//e107::js('theme', 'fix.js', 'jquery');
	}

	public function register_fonts()
	{
		e107::css('url', 'https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap');
	}

	public function register_icons()
	{
		//	e107::css('theme', 'assets/css/lineicons.css');
		e107::css('url', 'https://cdn.lineicons.com/3.0/lineicons.css');
	}

	public function getInlineCodes()
	{

		$footer_js = ' //======== tiny slider for clients
   var clients_logo = new tns({
     container: ".client-logos-two",
     autoplay: true,
     autoplayTimeout: 4000,
     autoplayButtonOutput: false,
     mouseDrag: true,
     gutter: 0,
     nav: false,
     controls: false,
     responsive: {
       0: {
         items: 2,
       },
       570: {
         items: 3,
       },
       768: {
         items: 4,
       },
       992: {
         items: 5,
       },
       1400: {
         items: 4,
       },
     },
   });';

		e107::js('footer-inline', $footer_js);
	}

	function remove_ptags($text = '') // FIXME this is a bug in e107 if this is required.
	{

		$text = str_replace(array("<!-- bbcode-html-start --><p>", "</p><!-- bbcode-html-end -->"), "", $text);

		return $text;
	}


	public function tablestyle($caption, $text, $mode = '', $options = [])
	{
		$style = varset($options['setStyle'], 'default');

		$id = varset($options['uniqueId'], '');

		if (e_DEBUG)
		{
			echo '
            <!-- tablestyle initial:  style=' . $style . '  mode=' . $mode . '  UniqueId=' . varset($options['uniqueId']) . ' -->
            ';
		}

		switch ($mode)
		{
			case "wm":
				$text = $this->remove_ptags($text); //p tags is part of tablestyle
				//$style = "wm";
				break;
		}

		if (e_DEBUG)
		{
			echo "
            <!-- tablestyle initial:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->
            ";
		}


		switch ($style)
		{
			case "none":
				$text = $this->remove_ptags($text);
				echo $text;
				break;

			case "heading-1":
				if (!empty($caption))
				{
					echo '<h1 class="header-title">' . $caption . '</h1>';
				}
				echo '<p class="text-lg ' . $mode . '">' . $text . '</p>';
				break;

			case "heading-3":
				if (!empty($caption))
				{
					echo '<h3 class="header-title">' . $caption . '</h3>';
				}
				echo $text;
				break;

			case "heading-6":
				if (!empty($caption))
				{
					echo '<h6 class="header-title text-uppercase">' . $caption . '</h6>';
				}
				echo $text;
				break;

			case "widget":
				echo '<div class="widget">';
				if (!empty($caption))
				{
					echo '<h5 class="widget-title">' . $caption . '</h5>';
				}
				echo $text;
				echo '</div>';
				break;

			case "footer-heading3":
				if (!empty($caption))
				{
					echo '<h3>' . $caption . '</h3>';
				}
				echo $text;
				break;


			case "footer-heading5":
				if (!empty($caption))
				{
					echo '<h5 class="download-title">' . $caption . '</h5>';
				}
				echo $text;
				break;

			case "footer-heading6":
				if (!empty($caption))
				{
					echo '<h6 class="footer-title">' . $caption . '</h6>';
				}
				echo $text;
				break;

			case "footer-widget":
				echo '<div class="footer-link">';
				if (!empty($caption))
				{
					echo '<h6 class="footer-title">' . $caption . '<h6>';
				}
				echo $text;
				echo '</div>';
				break;


			case "main":  //caption is in layout
				echo $text;
				break;

			case "default":
			default:
				if (!empty($caption))
				{
					echo '<h4>' . $caption . '</h4>';
				}
				echo $text;
				break;

				return;
		}
	}
}
