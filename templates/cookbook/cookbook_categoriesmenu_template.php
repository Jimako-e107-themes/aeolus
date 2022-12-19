<?php
/*
 * CookBook - an e107 plugin by Tijn Kuyper (http://www.tijnkuyper.nl)
 *
 * Released under the terms and conditions of the
 * Apache License 2.0 (see LICENSE file or http://www.apache.org/licenses/LICENSE-2.0)
 *
 * Categories menu template
*/

if (!defined('e107_INIT')) { exit; }

$COOKBOOK_CATEGORIESMENU_TEMPLATE = array();
          
 
$COOKBOOK_CATEGORIESMENU_TEMPLATE['default']['caption'] = '{COOKBOOK_CATEGORIESMENU_CAPTION}';
 
$COOKBOOK_CATEGORIESMENU_TEMPLATE['default']['start']       = '<div class="list-style"><div class="list-style-nine"><ul>';
$COOKBOOK_CATEGORIESMENU_TEMPLATE['default']['end']         = '</ul></div><div>';
$COOKBOOK_CATEGORIESMENU_TEMPLATE['default']['item']        = '
	<li class="">
	<a class="e-menu-link newscats{ACTIVE} d-flex justify-content-between align-items-center" href="{NEWS_CATEGORY_URL}">
	<span><i class="lni lni-arrow-right"></i>{COOKBOOK_CATEGORY_NAME}</span><span class="badge bg-primary rounded-pill">{COOKBOOK_RECIPES_IN_CATEGORY}</span></a></li>
';

 