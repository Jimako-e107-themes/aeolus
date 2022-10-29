<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News default templates
 */

if (!defined('e107_INIT'))  exit;

$NEWS_BLOGS_TEMPLATE = array();
 
/*
blog 01 - grid 3 columns 
blog 02 - grid 3 columns 
blog 03 - grid 3 columns 
blog 04 - grid 2 columns  
blog 05 - list 2 columns 
blog 06 - list 2 columns 
blog 07 - grid 2 columns 
blog 08 - view
blog 09 - view
blog 10 - list 3 columns 
blog 11 - list 3 columns 
blog 12 - grid 3 columns 
blog 13 - grid 3 columns 
blog 14 - grid 3 columns  

*/

 
$NEWS_BLOGS_TEMPLATE['blog-01']['start'] = '<section class="blog-area pb-5">
   <div class="container">
      <div class="row justify-content-center">';

$NEWS_BLOGS_TEMPLATE['blog-01']['item'] =
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

$NEWS_BLOGS_TEMPLATE['blog-01']['featured'] = $NEWS_BLOGS_TEMPLATE['blog-01']['item'];

$NEWS_BLOGS_TEMPLATE['blog-01']['end'] = '</div></div></section>';

$NEWS_BLOGS_TEMPLATE['blog-02']['start'] = '    <section class="blog-area pb-5">
	<div class="container">
	  <div class="row justify-content-center">';

$NEWS_BLOGS_TEMPLATE['blog-02']['item'] =
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

$NEWS_BLOGS_TEMPLATE['blog-02']['featured'] = $NEWS_BLOGS_TEMPLATE['blog-02']['item'];

$NEWS_BLOGS_TEMPLATE['blog-02']['end'] = '</div></div></section>';

// Blog Style 5
$NEWS_BLOGS_TEMPLATE['blog-05']['start'] =
	'<section class="blog-area pb-5">
	<div class="container">
	  <div class="row">{SETIMAGE: w=700&h=500&crop=1}';

$NEWS_BLOGS_TEMPLATE['blog-05']['item'] =
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

$NEWS_BLOGS_TEMPLATE['blog-05']['featured'] = $NEWS_BLOGS_TEMPLATE['blog-05']['item'];

$NEWS_BLOGS_TEMPLATE['blog-05']['end'] = '</div></div></section>';



// Blog Style 10 mini blog version one
$NEWS_BLOGS_TEMPLATE['blog-10']['start'] =
	'<section class="blog-area pb-5">
	<div class="container">
	  <div class="row">{SETIMAGE: w=700&h=500&crop=1}';

$NEWS_BLOGS_TEMPLATE['blog-10']['item'] =
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

$NEWS_BLOGS_TEMPLATE['blog-10']['featured'] = $NEWS_BLOGS_TEMPLATE['blog-10']['item'];

$NEWS_BLOGS_TEMPLATE['blog-10']['end'] = '</div></div></section>';



// Blog Style 11 mini blog version two
$NEWS_BLOGS_TEMPLATE['blog-11']['start'] =
	'<section class="blog-area pb-5">
	<div class="container">
	  <div class="row">{SETIMAGE: w=700&h=500&crop=1}';

$NEWS_BLOGS_TEMPLATE['blog-11']['item'] =
' <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="single-mini-blog mini-style-two d-flex">
               <div class="blog-image">
                  <img src="{NEWS_IMAGE: type=src&placeholder=true}" alt="{NEWS_TITLE}" />
               </div>
               <div class="blog-content media-body">
                  <h6 class="blog-title">
                     <a href="{NEWSURL}">
                     {NEWS_TITLE}
                     </a>
                  </h6>
                  <span><i class="lni lni-calendar"></i> {NEWS_DATE=short}</span>
				  <span>{NEWSCOMMENTS}</span>
               </div>
            </div>
            <!-- single mini blog -->
         </div>
        ';

$NEWS_BLOGS_TEMPLATE['blog-11']['featured'] = $NEWS_BLOGS_TEMPLATE['blog-11']['item'];

$NEWS_BLOGS_TEMPLATE['blog-11']['end'] = '</div></div></section>';


// Blog Style 14 
$NEWS_BLOGS_TEMPLATE['blog-14']['start'] =
'<section class="section latest-news-area blog-list">
	<div class="container">
	  <div class="row">{SETIMAGE: w=700&h=500&crop=1}';

$NEWS_BLOGS_TEMPLATE['blog-14']['item'] =
' <div class="col-lg-4 col-md-6 col-12">
            <div class="single-news">
               <div class="image">
                  <img class="thumb" src="{NEWS_IMAGE: type=src&placeholder=true}" alt="{NEWS_TITLE}" />
				  <div class="meta-details"><span>BY TIM NORTON</span></div>
               </div>
               <div class="content-body">
                   <h4 class="title">
                     <a href="{NEWSURL}">
                     {NEWS_TITLE}
                     </a>
                  </h4>
				  <p>
				  {NEWS_SUMMARY}
				  </p>
               </div>
            </div>
            <!-- single-news -->
         </div>
        ';

$NEWS_BLOGS_TEMPLATE['blog-14']['featured'] = $NEWS_BLOGS_TEMPLATE['blog-11']['item'];

$NEWS_BLOGS_TEMPLATE['blog-14']['end'] = '</div></div></section>';