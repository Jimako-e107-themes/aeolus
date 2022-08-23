<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News default templates
 */

if (!defined('e107_INIT'))  exit;


$NEWS_TEMPLATE = array();

$grid_templates = e107::getTemplate('news', 'news_grid');
//print_a($grid_templates);
 
$NEWS_MENU_TEMPLATE['list']['start']       = '<div class="thumbnails">';
$NEWS_MENU_TEMPLATE['list']['end']         = '</div>';


$NEWS_INFO = array(
	'default' 	=> array('title' => "Default - Ayro Blog 02", 	'description' => 'unused'),
	'list' 	    => array('title' => LAN_LIST, 		'description' => 'unused'),

);

//see issue = #4847
$NEWS_TEMPLATE['default']['caption'] = NULL;
$NEWS_TEMPLATE['default'] 	= $grid_templates['blog-02']; 
$NEWS_TEMPLATE['list'] 		= $grid_templates['blog-02']; 
$NEWS_TEMPLATE['category']  = $grid_templates['blog-05']; 
 
$NEWS_TEMPLATE['default']['caption'] 	= '{NEWSCATEGORY}';
$NEWS_TEMPLATE['list']['caption'] 		= '{NEWSCATEGORY}';
 
/**
 * @todo (experimental)
 */
$NEWS_TEMPLATE['2-column']['caption']  = '{NEWS_CATEGORY_NAME}';
$NEWS_TEMPLATE['2-column']['start']    = '<div class="row">';
$NEWS_TEMPLATE['2-column']['item']     = '<div class="item col-md-6">
											{SETIMAGE: w=400&h=400&crop=1}
											{NEWSTHUMBNAIL=placeholder}
	                                            <h3>{NEWS_TITLE}</h3>
	                                            <p>{NEWS_SUMMARY}</p>
	                                         	<p class="text-right text-end"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">' . LAN_READ_MORE . '</a></p>
            							  </div>';
$NEWS_TEMPLATE['2-column']['end']      = '</div>';


### Related 'start' - Options: Core 'single' shortcodes including {SETIMAGE}
### Related 'item' - Options: {RELATED_URL} {RELATED_IMAGE} {RELATED_TITLE} {RELATED_SUMMARY}
### Related 'end' - Options:  Options: Core 'single' shortcodes including {SETIMAGE}
/*
$NEWS_TEMPLATE['related']['start'] = "<hr><h4>".defset('LAN_RELATED', 'Related')."</h4><ul class='e-related'>";
$NEWS_TEMPLATE['related']['item'] = "<li><a href='{RELATED_URL}'>{RELATED_TITLE}</a></li>";
$NEWS_TEMPLATE['related']['end'] = "</ul>";*/

$NEWS_TEMPLATE['related']['caption']    = '{LAN=RELATED}';
$NEWS_TEMPLATE['related']['start']      = '{SETIMAGE: w=350&h=350&crop=1}<div class="row">';
$NEWS_TEMPLATE['related']['item']       = '<div class="col-md-4"><a href="{RELATED_URL}">{RELATED_IMAGE}</a><h3><a href="{RELATED_URL}">{RELATED_TITLE}</a></h3></div>';
$NEWS_TEMPLATE['related']['end']        = '</div>';