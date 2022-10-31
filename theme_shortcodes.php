<?php

class theme_shortcodes extends e_shortcode
{

	var $override = true;

	protected $userReg = false; // user registration pref.

	function __construct()
	{
		$pref = e107::getPref();
		$this->userReg = intval($pref['user_reg']);
	}

	/* {THEME_NAVIGATION: type=navbar-02} */
	/* this is just shortcut */
	public function sc_theme_navigation($parm = array())
	{
		$type = varset($parm['type'], 'default');

		$options = [
			'file'=> $type,
			'path'=>'header/navbars'
		];

		return self::sc_block($options);

	}

	/* {THEME_MASTHEAD: type=header-05} */
	public function sc_theme_masthead($parm = array())
	{
		$type = varset($parm['type'], 'default');

		$options = [
			'file' => $type,
			'path' => 'header/masthead'
		];

		return self::sc_block($options);
	}	

	/* term snippet is used for form elements */
	/* {BLOCK: folder=navbars&key=navbar-01} */
	/* Warning! This can't be used for footer with menus */
	public function sc_block($parm = array())
	{
		if (!isset($parm['file']))
		{
			return '';
		}

		$folder = varset($parm['path'],'blocks');
 
		$file = varset($parm['file'], 'default');

		$theme_name = deftrue('USERTHEME', e107::pref('core', 'sitetheme'));

		$themepath = e_THEME . $theme_name;

		$path_html = "{$themepath}/{$folder}/{$file}.html";
		//$path_css =  "{$folder}/{$file}.css";
 
		if (file_exists($path_html))
		{
			$text = file_get_contents($path_html);
		}
		else
		{
			$text = '';
		}
/* it is not working anymore. moved to theme.php
		if (file_exists($themepath . "/" . $path_css))
		{
			e107::css("url", $themepath . "/" . $path_css);
		}
*/
		$text = e107::getParser()->parseTemplate($text);
		return $text;
	}

 
	/* term snippet is used for form elements */
	/* {COMPONENT: type=navbars&key=navbar-01} */
	/* Warning! This can't be used for footer with menus */
	public function sc_component($parm = array())
	{
		if (!isset($parm['type']))
		{
			return '';
		}
		$type = $parm['type'];

		$key = varset($parm['key'], 'default');

		$theme_name = deftrue('USERTHEME', e107::pref('core', 'sitetheme'));

		$themepath = e_THEME . $theme_name;
 
		$path_html = "{$themepath}/components/{$type}/{$key}.html";
		$path_css =  "components/{$type}/{$key}.css";
 
		if (file_exists($path_html))
		{
			$text = file_get_contents($path_html);
		}
		else
		{
			$text = '';
		}
		if (file_exists($themepath . "/" . $path_css))
		{
			e107::css("theme", $path_css);
		}

		$text = e107::getParser()->parseTemplate($text);
		return $text;
	}

	//not supported yet
	public function sc_navbar_branding()
	{
		$pref = e107::pref('theme', 'branding');
		switch ($pref)
		{
			case 'logo':
				$brand = '{SITELOGO: h=50}';
				break;
			case 'sitenamelogo':
				$brand = '{SITELOGO: h=50}' . SITENAME;
				break;
			case 'sitename':
			default:
				$brand = SITENAME;
				break;
		}
		$text = '<a class="navbar-brand" href="{SITEURL}" alt="{SITENAME}">' . $brand . '</a>';
		$text = e107::getParser()->parseTemplate($text);

		return $text;
	}

	/* {NAVBAR_SITESEARCH} */
	public function sc_navbar_sitesearch()
	{
		$text = '<form class="d-flex search-form" method="get" action="' . e_HTTP . 'search.php">
		<input type="hidden" name="r" value="0" />
        <input class="form-control me-2" type="text" placeholder="' . LAN_SEARCH . '" id="q" name="q">
        <button name="s" class="btn btn-outline-success" type="submit"><i class="lni lni-search-alt"></i></button>
      	</form>';

		return $text;
	}

	/* {SIGNIN_PM_NAV} */
	function sc_signin_pm_nav($parm = null)
	{

		e107::includeLan(e_PLUGIN . 'pm/languages/' . e_LANGUAGE . '.php');
		require_once(e_PLUGIN . "pm/pm_func.php");

		$pm = new pmbox_manager();

		$pm_prefs = $pm->prefs();


		if (!e107::isInstalled('pm'))
		{
			return null;
		}


		$tp = e107::getParser();

		if (!isset($pm_prefs['pm_class']) || !check_class($pm_prefs['pm_class']))
		{
			return null;
		}

		$mbox = $pm->pm_getInfo('inbox');

		if (!empty($mbox['inbox']['new']))
		{
			$count = "<span class='label label-warning'>" . $mbox['inbox']['new'] . "</span>";
			$icon = $tp->toGlyph('fa-envelope');
		}
		else
		{
			$icon = $tp->toGlyph('fa-envelope-o');
			$count = '';
		}


		$urlInbox = e107::url('pm', 'index', '', array('query' => array('mode' => 'inbox')));
		$urlOutbox = e107::url('pm', 'index', '', array('query' => array('mode' => 'outbox')));
		$urlCompose = e107::url('pm', 'index', '', array('query' => array('mode' => 'send')));

		return '
         <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                    data-bs-toggle="collapse" data-bs-target="#pm-nav"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">' . $icon . $count . ' <div class="sub-nav-toggler">
                            <span><i class="lni lni-chevron-down"></i></span>
                          </div></a>
 		<ul class="sub-menu collapse" id="pm-nav" >
		<li class="nav-item w-100"><a href="' . $urlInbox . '">' . LAN_PLUGIN_PM_INBOX . '</a></li>
		<li class="nav-item w-100"><a href="' . $urlOutbox . '">' . LAN_PLUGIN_PM_OUTBOX . '</a>
		<li class="nav-item w-100"><a href="' . $urlCompose . '">' . LAN_PLUGIN_PM_NEW . '</a> 
		</li>
		</ul>';
	}

	/* {THEME_PATH} */
	function sc_theme_path()
	{
		$themepath = e_THEME . e107::getPref('sitetheme');
		return  $themepath . "/";
	}

	/* {THEME_PREF: name=xy} */
	public function sc_theme_pref($parm = [])
	{
		$themePrefs = e107::pref('theme');

		$name = $parm['name'];
		if (!isset($name))
		{
			return '';
		}
		$default = varset($parm['default'], '');
		$value = $themePrefs[$name];
		$value = varset($value, $default);

		return $value;
	}

	/* {THEME_PRELOADER} */
	//<!-- ============================================-->
	//<!-- Preloader ==================================-->
	public function sc_theme_preloader($parm = null)
	{
		$text = '';
		$display = e107::pref('theme', 'preloader');
		$display = varset($display, true);

		if ($display)
		{
			e107::js('theme', 'js/preloader.js', 'jquery');
			e107::css('theme', 'css/preloader.css');
			$text =
			'<div class="preloader">
				<div class="loader">
					<div class="spinner">
						<div class="spinner-container">
							<div class="spinner-rotator">
								<div class="spinner-left">
									<div class="spinner-circle"></div>
								</div>
								<div class="spinner-right">
									<div class="spinner-circle"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>';
		}

		return $text;
	}

	/* {THEME_BACKTOTOP} */
	//<!-- ========================= scroll-top ========================= -->

	public function sc_theme_backtotop($parm = null)
	{
		$text = '';
		$display = e107::pref('theme', 'backtotop');
		//e107::css('theme', 'css/backtotop.css'); not working in this theme, in other does, no idea why, part of style.css now
		$display = varset($display, true);
 
		if ($display)
		{
			e107::js('theme', 'js/backtotop.js', 'jquery');
			$text =
            '<a href="#" class="btn btn-scroll-top">
                <i class="lni lni-chevron-up"></i>
            </a>';
		}

		return $text;
	}

	/* {CONTACT_INFO: type=email1} */
	/* {CONTACT_INFO: type=phone1} */

	function sc_contact_info($parm = null)
	{
		$ipref = e107::getPref('contact_info');
		$type = varset($parm['type']);

		if (empty($type) || empty($ipref[$type]))
		{
			return null;
		}

		$tp = e107::getParser();
		$ret = '';

		switch ($type)
		{
			case "organization":
				$ret = $tp->toHTML($ipref[$type], true, 'TITLE');
				break;

			case 'email1':
			case 'email2':
			case 'phone1':
			case 'phone2':
			case 'phone3':
			case 'fax':
				$ret = $tp->obfuscate($ipref[$type]);
				break;

			default:
				$ret = $tp->toHTML($ipref[$type], true, 'BODY');
				// code to be executed if n is different from all labels;
		}

		return $ret;
	}


	/* {THEME_FPW_SUBMIT} */
	function sc_theme_fpw_submit($parm = null)
	{
		$label = deftrue('LAN_FPW_102', LAN_SUBMIT);
		return e107::getForm()->button('pwsubmit', $label, 'submit', '',  array('class' => 'btn primary-btn rounded-full'));
	}


	/**
	 * TODO Replace with a core shortcode. {BOOK_MENUS: name=homepage}
	 * @return string
	 */
	function sc_book_menus($parm = null)
	{
		$template = e107::getCoreTemplate('chapter', 'book-menus');
		$sc = e107::getScBatch('page', null, 'cpage');

		if (empty($parm['name']))
		{
			if (ADMIN)
			{
				return "<div class='alert alert-danger'>Missing 'name'. eg: {CHAPTER_MENUS: name=chapter-sef-url}</div>";
			}

			return null;
		}

		$sef = e107::getParser()->filter($parm['name'], 'str');

		// TO GET ID OF BOOK WITH PORTFOLIO
		$where = "chapter_visibility IN (" . USERCLASS_LIST . ") AND chapter_sef = '{$sef}'";
		$book_id = e107::getDb()->retrieve('page_chapters', 'chapter_id', $where);

		// TO GET ALL PAGES, WITH THEIR CHAPTERS WITH BOOK PORTFOLIO

		$query = "SELECT * FROM #page AS p LEFT JOIN #page_chapters as ch ON p.page_chapter=ch.chapter_id WHERE ch.chapter_parent = " . intval($book_id) . " ORDER BY p.page_order ASC ";


		if ($pageArray = e107::getDb()->retrieve($query, true))
		{

			$sc->setVars($pageArray[0]); // set so book/chapter info is available to 'start' template.  ?? first page chapter info
			$text = e107::getParser()->parseTemplate($template['listItems']['start'], true, $sc);

			foreach ($pageArray as $page)
			{
				$sc->setVars($page);
				$menu_template = '{CMENU=' . $page["menu_name"] . '}';

				//	$text .= e107::getParser()->parseTemplate($template['listItems']['item'], true, $sc);
				$text .= e107::getParser()->parseTemplate($menu_template, true, $sc);
			}
		}


		$text .= e107::getParser()->parseTemplate($template['listItems']['end'], true, $sc);

		return $text;
	}

	/* {SIGNIN_LOGINMESSAGE} */
	function sc_signin_loginmessage($parm = '')
	{
		if (empty($this->userReg))
		{
			return null;
		}

		if(defset('LOGINMESSAGE'))  {
			$text = "<div class='alert alert-danger'><small>" . LOGINMESSAGE . "</small></div>";
		}

		return $text;
	}

	/**
	/* WAY HOW TO DISPLAY MENUS FROM DEFAULT LAYOUT on other layouts
	/* {DEFAULT_MENUAREA=100}
	 **/
	public function sc_default_menuarea($parm)
	{
		$defaultmenuarea = e107::pref('theme', 'defaultmenuarea');
		if(!$defaultmenuarea) {
			return "";
		}
		//$path = $parm;
		/* don't render anything for default layout, let it on core, it has to be set in Menu Manager for default layout */
		if (THEME_LAYOUT == e107::getPref('sitetheme_deflayout'))
		{
			return "";
		}
		$footermenu = e107::getMenu();
		// tell menu manager that you want menus from default layout
		$footermenu->eMenuActive = $this->getDataLegacyTheme(e107::getPref('sitetheme_deflayout'));
		// render default menus and save it for later use
		$text = $footermenu->renderArea($parm);
		// return it back because it has to work without change in Menu Manager
		$footermenu->eMenuActive = $this->getDataLegacyTheme(THEME_LAYOUT);

		return $text;
	}

	/**
	 * Function to retrieve Menu data from tables.
	 * original: private function getDataLegacy()
	 * change: Layout name as parameter
	 */
	private function getDataLegacyTheme($menu_layout_field = '')
	{
		$sql = e107::getDb();
		//original:  $menu_layout_field = THEME_LAYOUT!=e107::getPref('sitetheme_deflayout') ? THEME_LAYOUT : "";
		$menu_layout_field = $menu_layout_field != e107::getPref('sitetheme_deflayout') ? THEME_LAYOUT : "";
		$cacheData = e107::getCache()->retrieve_sys("menus_" . USERCLASS_LIST . "_" . md5(e_LANGUAGE . $menu_layout_field));
		$menu_data = e107::unserialize($cacheData);

		$eMenuArea = array();
		if (empty($menu_data) || !is_array($menu_data))
		{
			$menu_qry = 'SELECT * FROM #menus WHERE menu_location > 0 AND menu_class IN (' . USERCLASS_LIST . ') AND menu_layout = "' . $menu_layout_field . '" ORDER BY menu_location,menu_order';
			if ($sql->gen($menu_qry))
			{
				while ($row = $sql->fetch())
				{
					$eMenuArea[$row['menu_location']][] = $row;
				}
			}
			$menu_data['menu_area'] = $eMenuArea;
			$menuData = e107::serialize($menu_data, 'json');
			e107::getCache()->set_sys('menus_' . USERCLASS_LIST . '_' . md5(e_LANGUAGE . $menu_layout_field), $menuData);
		}
		else
		{
			$eMenuArea = $menu_data['menu_area'];
		}
		return $eMenuArea;
	}
}