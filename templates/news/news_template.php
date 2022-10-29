<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News default templates
 */

if (!defined('e107_INIT'))  exit;
 
// latest-news-area - default list of latest news


//see issue = #4847
$NEWS_TEMPLATE['default']['caption'] = NULL;

$NEWS_TEMPLATE['default']['start'] =
'<section class="blog-area pb-5">
	<div class="container">
	  <div class="row">{SETIMAGE: w=700&h=500&crop=1}';

$NEWS_TEMPLATE['default']['item'] =
'
<div class="col-lg-6">
	<div class="single-blog blog-style-four">
		<div class="blog-image">
			<img class="thumb" src="{NEWS_IMAGE: type=src&placeholder=true}" alt="{NEWS_TITLE}" />
			<div class="meta-info">
				<span><i class="lni lni-calendar"></i> {NEWS_DATE=short}</span>
				<span>{NEWSCOMMENTS}</span>
			</div>
		</div>
		<div class="blog-content">
			<h4 class="blog-title">
			<a href="{NEWSURL}">
			{NEWS_TITLE}
			</a>
			</h4>
			<p class="text">
			{NEWS_SUMMARY}
			</p>
			<div class="rounded-buttons">
			<a
			class="btn btn-news-default "
			href="{NEWSURL}"
			>{LAN=READ_MORE}</a
			>
			</div>
		</div>
	</div>
</div>
 
        ';

$NEWS_TEMPLATE['default']['featured'] = $NEWS_BLOGS_TEMPLATE['blog-11']['item'];

$NEWS_TEMPLATE['default']['end'] = '</div></div></section>';


 
$NEWS_TEMPLATE['list'] 		= $NEWS_TEMPLATE['default'];

// Blog Style 5
$NEWS_TEMPLATE['category']['start'] =
	'<section class="blog-area pb-5">
	<div class="container">
	  <div class="row">{SETIMAGE: w=700&h=500&crop=1}';

$NEWS_TEMPLATE['category']['item'] =
	'<div class="col-lg-6">
	<div class="single-blog blog-style-five d-sm-flex">
	  <div class="blog-image">
		<a href="{NEWSURL}"><img src="{NEWS_IMAGE: type=src&placeholder=true}" alt="{NEWS_TITLE}"/></a>
	  </div>
	  <div class="blog-content media-body">
			<h4 class="blog-title">
			<a href="{NEWSURL}">
			{NEWS_TITLE}
			</a>
			</h4>
		<span><i class="lni lni-calendar"></i> {NEWS_DATE=short}</span>
		<span>{NEWSCOMMENTS}</span>
		<p class="text">{NEWS_SUMMARY}</p>
		<a
		  class="more"
		  href="{NEWSURL}"
		  >{LAN=READ_MORE}</a
		>
	  </div>
	</div>
</div>';

$NEWS_TEMPLATE['category']['featured'] = $NEWS_BLOGS_TEMPLATE['blog-05']['item'];

$NEWS_TEMPLATE['category']['end'] = '</div></div></section>';

 
$NEWS_TEMPLATE['2-column']  = $NEWS_BLOGS_TEMPLATE['blog-11'];

$NEWS_TEMPLATE['blog-04']  = $NEWS_BLOGS_TEMPLATE['blog-04']; 
$NEWS_TEMPLATE['blog-10']  = $NEWS_BLOGS_TEMPLATE['blog-10'];  


//Note info keys are merged, so core one has to be used at first 
$NEWS_INFO = array(
	'default' 	=> array('title' => "Default grid"),
	'list' 	    => array('title' => "Default grid"),
	'category' 	    => array('title' => "Category List",  'description' => 'unused'),
);


 
$NEWS_TEMPLATE['default']['caption'] 	= '{NEWSCATEGORY}';
$NEWS_TEMPLATE['list']['caption'] 		= '{NEWSCATEGORY}';
 
 


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