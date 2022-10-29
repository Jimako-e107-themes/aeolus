<?php

/**
 * e107 website system.
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 */


$NEWS_GRID_TEMPLATE['col-md-4']['start'] = '    <section class="blog-area pb-5">
	<div class="container">
	  <div class="row justify-content-center">';

$NEWS_GRID_TEMPLATE['col-md-4']['item'] =
'          <div class="col-lg-4 col-md-8 col-sm-10">
	<div class="single-blog news-grid-classic">
	  <div class="blog-image">
	  {SETIMAGE: w=700&h=500&crop=1}{NEWSTHUMBNAIL=placeholder}
	  </div>
	  <div class="blog-content">
			<h4 class="blog-title">
			<a href="{NEWSURL}">
			{NEWS_TITLE}
			</a>
			</h4>
		<span><i class="lni lni-calendar"></i> {NEWS_DATE=short}</span>
		<span><i class="lni lni-comments-alt"></i> {NEWSCOMMENTS}</span>
		<p class="text">{NEWS_SUMMARY}</p>
		<a
		  class="btn btn-news-grid"
		  href="{NEWSURL}"
		  >{LAN=READ_MORE}</a
		>
	  </div>
	</div>
	<!-- single blog -->
  </div>';

$NEWS_GRID_TEMPLATE['col-md-4']['featured'] = $NEWS_GRID_TEMPLATE['col-md-4']['item'];

$NEWS_GRID_TEMPLATE['col-md-4']['end'] = '</div></div></section>';

// Blog Style 10 mini blog version one
$NEWS_GRID_TEMPLATE['miniblog']['start'] =
	'<section class="blog-area pb-5">
	<div class="container">
	  <div class="row">{SETIMAGE: w=700&h=500&crop=1}';

$NEWS_GRID_TEMPLATE['miniblog']['item'] =
	'<div class="col-lg-4 col-md-6 col-sm-10">
	<div class="single-mini-blog d-flex">
	  <div class="blog-image">
		<a href="{NEWSURL}"
		><img src="{NEWS_IMAGE: type=src&placeholder=true}" alt="{NEWS_TITLE}"
		/></a>
	  </div>
	  <div class="blog-content media-body">
			<h4 class="blog-title">
			<a href="{NEWSURL}">
			{NEWS_TITLE}
			</a>
			</h4>
		<span><i class="lni lni-calendar"></i> {NEWS_DATE=short}</span>
		<span>{NEWSCOMMENTS}</span>
		<a
		  class="more"
		  href="{NEWSURL}"
		  >{LAN=READ_MORE}</a
		>
	  </div>
	</div>
</div>';

$NEWS_GRID_TEMPLATE['miniblog']['featured'] = $NEWS_BLOGS_TEMPLATE['blog-10']['item'];

$NEWS_GRID_TEMPLATE['miniblog']['end'] = '</div></div></section>';
 