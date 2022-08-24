<?php
/*
* Copyright (c) 2012 e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id: e_shortcode.php 12438 2011-12-05 15:12:56Z secretr $
*
* Navigation Template
*/

// TEMPLATE FOR {NAVIGATION=main}
$NAVIGATION_TEMPLATE['main']['start'] = '';

// Main Link
$NAVIGATION_TEMPLATE['main']['item'] = '
	<li class="nav-item">
		<a class="" href="{NAV_LINK_URL}"{NAV_LINK_OPEN} title="{NAV_LINK_DESCRIPTION}">
		 {NAV_LINK_ICON}{NAV_LINK_NAME} 
		</a> 
	</li>
';
$NAVIGATION_TEMPLATE['main']['item_active'] = 
'
	<li class="nav-item">
		<a class=" active" href="{NAV_LINK_URL}"{NAV_LINK_OPEN} title="{NAV_LINK_DESCRIPTION}">
		 {NAV_LINK_ICON}{NAV_LINK_NAME} 
		</a> 
	</li>
';


// Main Link which has a sub menu.
$NAVIGATION_TEMPLATE['main']['item_submenu'] = '
<li class="nav-item page-scroll">
      <a
        class=""
        data-bs-toggle="collapse"
        data-bs-target="#sub-nav{NAV_LINK_ID}"
        aria-controls="sub-nav{NAV_LINK_ID}"
        aria-expanded="false"
        aria-label="Toggle navigation"
        href="javascript:void(0)"
        >{NAV_LINK_ICON}{NAV_LINK_NAME}
        <div class="sub-nav-toggler">
          <span><i class="lni lni-chevron-down"></i></span>
        </div>
      </a>
      {NAV_LINK_SUB}
  </li>
';

// Main Link which has a sub menu - active state.
$NAVIGATION_TEMPLATE['main']['item_submenu_active'] =  
'
<li class="nav-item">
      <a
        class=" active"
        data-bs-toggle="collapse"
        data-bs-target="#sub-nav{NAV_LINK_ID}"
        aria-controls="sub-nav{NAV_LINK_ID}"
        aria-expanded="false"
        aria-label="Toggle navigation"
        href="javascript:void(0)"
        >{NAV_LINK_ICON}{NAV_LINK_NAME}
        <div class="sub-nav-toggler">
          <span><i class="lni lni-chevron-down"></i></span>
        </div>
      </a>
      {NAV_LINK_SUB}
  </li>
';
 
$NAVIGATION_TEMPLATE['main']['end'] = '';

// Sub menu start
$NAVIGATION_TEMPLATE['main']['submenu_start'] = '
		<ul class="sub-menu collapse" id="sub-nav{NAV_LINK_ID}" >
';

// Sub sub menu start
$NAVIGATION_TEMPLATE['main']['submenu_lowerstart'] = '
	<ul class="sub-menu collapse" id="sub-nav{NAV_LINK_ID}" >
';

$NAVIGATION_TEMPLATE['main']['submenu_end'] = '</ul>';
$NAVIGATION_TEMPLATE['main']['submenu_lowerend'] = '</ul>';


// Sub menu Link
$NAVIGATION_TEMPLATE['main']['submenu_item'] = $NAVIGATION_TEMPLATE['main']['item'] ;

// Sub menu Link - active state
$NAVIGATION_TEMPLATE['main']['submenu_item_active'] = $NAVIGATION_TEMPLATE['main']['item_active'] ;

// Sub Menu Link which has a sub menu.
$NAVIGATION_TEMPLATE['main']['submenu_loweritem'] =  $NAVIGATION_TEMPLATE['main']['item_submenu'];
$NAVIGATION_TEMPLATE['main']['submenu_loweritem_active'] = $NAVIGATION_TEMPLATE['main']['item_submenu_active'];

 



// TEMPLATE FOR {NAVIGATION=side}

$NAVIGATION_TEMPLATE['side']['start'] = '<ul class="listgroup nav-side">
														';

$NAVIGATION_TEMPLATE['side']['item'] = '<li class="list-group-item"><a href="{NAV_LINK_URL}"{NAV_LINK_OPEN} title="{NAV_LINK_DESCRIPTION}">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['side']['item_submenu'] = '<li class="nav-header">{NAV_LINK_ICON}{NAV_LINK_NAME}{NAV_LINK_SUB}</li>
														';

$NAVIGATION_TEMPLATE['side']['item_active'] = '<li class="list-group-item active"{NAV_LINK_OPEN}><a class="list-group-item active" href="{NAV_LINK_URL}" title="{NAV_LINK_DESCRIPTION}">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['side']['end'] = '</ul>
														';

$NAVIGATION_TEMPLATE['side']['submenu_start'] = '';

$NAVIGATION_TEMPLATE['side']['submenu_item'] = '<li class="list-group-item" ><a href="{NAV_LINK_URL}"{NAV_LINK_OPEN}>{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['side']['submenu_loweritem'] = '
			<li role="menuitem" class="dropdown-submenu">
				<a href="{NAV_LINK_URL}"{NAV_LINK_OPEN}>{NAV_LINK_ICON}{NAV_LINK_NAME}</a>
				{NAV_LINK_SUB}
			</li>
';

$NAVIGATION_TEMPLATE['side']['submenu_item_active'] = '<li class="active"><a href="{NAV_LINK_URL}">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['side']['submenu_end'] = '';

// Footer links.  - ie. 3 columns of links.

$NAVIGATION_TEMPLATE['footer']['start'] = '<ul>';
$NAVIGATION_TEMPLATE['footer']['item'] = "<li><a href='{NAV_LINK_URL}'{NAV_LINK_OPEN} title=\"{NAV_LINK_DESCRIPTION}\">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE['footer']['item_submenu'] = $NAVIGATION_TEMPLATE['footer']['item'];
$NAVIGATION_TEMPLATE['footer']['item_active'] = "<li><a href='{NAV_LINK_URL}' title=\"{NAV_LINK_DESCRIPTION}\">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE['footer']['end'] = "</ul>\n";
$NAVIGATION_TEMPLATE['footer']['submenu_start'] = '';
$NAVIGATION_TEMPLATE['footer']['submenu_item'] = '';
$NAVIGATION_TEMPLATE['footer']['submenu_loweritem'] = '';
$NAVIGATION_TEMPLATE['footer']['submenu_item_active'] = '';
$NAVIGATION_TEMPLATE['footer']['submenu_end'] = '';

$NAVIGATION_TEMPLATE['alt']['start'] = '<ul>';

$NAVIGATION_TEMPLATE['alt']['item'] = '<li><a href="{NAV_LINK_URL}"{NAV_LINK_OPEN} title="{NAV_LINK_DESCRIPTION}">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['alt']['item_submenu'] = '<li>{NAV_LINK_ICON}{NAV_LINK_NAME}{NAV_LINK_SUB}</li>
														';

$NAVIGATION_TEMPLATE['alt']['item_active'] = '<li class="active"{NAV_LINK_OPEN}><a href="{NAV_LINK_URL}" title="{NAV_LINK_DESCRIPTION}">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['alt']['end'] = '</ul>
														';

$NAVIGATION_TEMPLATE['alt']['submenu_start'] = '';

$NAVIGATION_TEMPLATE['alt']['submenu_item'] = '<li><a href="{NAV_LINK_URL}"{NAV_LINK_OPEN}>{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['alt']['submenu_loweritem'] = '
			<li role="menuitem" class="dropdown-submenu">
				<a href="{NAV_LINK_URL}"{NAV_LINK_OPEN}>{NAV_LINK_ICON}{NAV_LINK_NAME}</a>
				{NAV_LINK_SUB}
			</li>
';

$NAVIGATION_TEMPLATE['alt']['submenu_item_active'] = '<li class="active"><a href="{NAV_LINK_URL}">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['alt']['submenu_end'] = '';

$NAVIGATION_TEMPLATE['alt5'] = $NAVIGATION_TEMPLATE['alt'];
$NAVIGATION_TEMPLATE['alt6'] = $NAVIGATION_TEMPLATE['alt'];

$NAVIGATION_TEMPLATE['alt5']['start'] = '<ul class="nav nav-list nav-alt5">';
$NAVIGATION_TEMPLATE['alt6']['start'] = '<ul class="nav nav-list nav-alt6">';