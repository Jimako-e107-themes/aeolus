<?php

class theme_shortcodes extends e_shortcode
{

	var $override = true;
 
	/**
	 * Special Footer Shortcode for dynamic menuarea templates.
	 * @shortcode {---FOOTER---}
	 * @return string
	 */
	function sc_footer()
	{

		$theme_name = deftrue('USERTHEME', e107::pref('core', 'sitetheme'));
 
		$pref = e107::getThemeConfig($theme_name)->getPref();
		
		$key = 	varset($pref['footer'], 'footer-01');

		$themepath = e_THEME . $theme_name;

		$path_html = "{$themepath}/components/footers/{$key}.html";

		if (e_PAGE == "menus.php")
		{

			if (defined("e_MENUMANAGER_ACTIVE") and e_MENUMANAGER_ACTIVE)
			{
				//standard way
				if (file_exists($path_html))
				{
					$text = file_get_contents($path_html);
					// $text = e107::getParser()->parseTemplate($text);
				}
				else
				{
					$text = '';
				}

				$path_css =  "components/footers/{$key}.css";

				if (file_exists($themepath . "/" . $path_css))
				{
					e107::css("url", $themepath . "/" . $path_css);
				}

			}
			else  //menu selection
			{
				 
				$text = " {MENUAREA=41}{MENUAREA=42}{MENUAREA=43}{MENUAREA=44}{MENUAREA=45}{MENUAREA=46} ";
			}
		}
		else
		{

			$path_html = "{$themepath}/components/footers/{$key}.html";

			if (file_exists($path_html))
			{
				$text = file_get_contents($path_html);
				// $text = e107::getParser()->parseTemplate($text);
			}
			else
			{
				$text = '';
			}

			$path_css =  "components/footers/{$key}.css";

			if (file_exists($themepath . "/" . $path_css))
			{
				e107::css("theme", $path_css);
			}
		}

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
		$display = varset($display, true);

		if ($display)
		{
			e107::js('theme', 'js/backtotop.js', 'jquery');
			$text =
				'<a href="#" class="scroll-top btn-hover">
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


	/* {FPW_SUBMIT} */
	function sc_fpw_submit($parm = null)
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
}