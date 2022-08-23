<?php

/**
 * e107 website system.
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 */
$NEWS_GRID_TEMPLATE['blog-01']['start'] = '<section class="blog-area pb-5">
   <div class="container">
      <div class="row justify-content-center">';

$NEWS_GRID_TEMPLATE['blog-01']['item'] =
	'          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-blog blog-style-one">
              <div class="blog-image">
                {SETIMAGE: w=400&h=400&crop=1}{NEWSTHUMBNAIL=placeholder}
                <a href="javascript:void(0)" class="category">{NEWS_CATEGORY_NAME}</a>
              </div>
              <div class="blog-content">
                <h5 class="blog-title">
                  {NEWS_TITLE}
                </h5>
                <span><i class="lni lni-calendar"></i> {NEWS_DATE=short}</span>
                <span>{NEWSCOMMENTS}</span>
                <p class="text">
                 {NEWS_SUMMARY}
                </p>
                <a class="more" href="{NEWSURL}">{LAN=READ_MORE}</a>
              </div>
            </div>
            <!-- single blog -->
          </div>';

$NEWS_GRID_TEMPLATE['blog-01']['featured'] = $NEWS_GRID_TEMPLATE['blog-01']['item'];

$NEWS_GRID_TEMPLATE['blog-01']['end'] = '</div></div></section>';

$NEWS_GRID_TEMPLATE['blog-02']['start'] = '    <section class="blog-area pb-5">
	<div class="container">
	  <div class="row justify-content-center">';

$NEWS_GRID_TEMPLATE['blog-02']['item'] =
	'          <div class="col-lg-4 col-md-8 col-sm-10">
	<div class="single-blog blog-style-two">
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
		<span>{NEWSCOMMENTS}</span>
		<p class="text">{NEWS_SUMMARY}</p>
		<a
		  class="btn primary-btn-outline rounded-full"
		  href="{NEWSURL}"
		  >{LAN=READ_MORE}</a
		>
	  </div>
	</div>
	<!-- single blog -->
  </div>';

$NEWS_GRID_TEMPLATE['blog-02']['featured'] = $NEWS_GRID_TEMPLATE['blog-02']['item'];

$NEWS_GRID_TEMPLATE['blog-02']['end'] = '</div></div></section>';

// Blog Style 5
$NEWS_GRID_TEMPLATE['blog-05']['start'] =
'<section class="blog-area pb-5">
	<div class="container">
	  <div class="row">{SETIMAGE: w=700&h=500&crop=1}';

$NEWS_GRID_TEMPLATE['blog-05']['item'] =
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

$NEWS_GRID_TEMPLATE['blog-05']['featured'] = $NEWS_GRID_TEMPLATE['blog-05']['item'];

$NEWS_GRID_TEMPLATE['blog-05']['end'] = '</div></div></section>';



// Blog Style 10 mini blog version one
$NEWS_GRID_TEMPLATE['blog-10']['start'] =
	'<section class="blog-area pb-5">
	<div class="container">
	  <div class="row">{SETIMAGE: w=700&h=500&crop=1}';

$NEWS_GRID_TEMPLATE['blog-10']['item'] =
	'<div class="col-lg-6">
	<div class="single-blog blog-style-five d-sm-flex">
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
		<p class="text">{NEWS_SUMMARY}</p>
		<a
		  class="more"
		  href="{NEWSURL}"
		  >{LAN=READ_MORE}</a
		>
	  </div>
	</div>
</div>';

$NEWS_GRID_TEMPLATE['blog-10']['featured'] = $NEWS_GRID_TEMPLATE['blog-05']['item'];

$NEWS_GRID_TEMPLATE['blog-10']['end'] = '</div></div></section>';