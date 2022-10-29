<?php

/**
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */




$NEWS_VIEW_INFO = array(

	'default' 	=> array('title' => LAN_DEFAULT, 							'description' => 'unused'),
	'videos' 	=> array('title' => "Videos (experimental)", 				'description' => 'unused'),
);


// Default
$NEWS_VIEW_WRAPPER['default']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left float-left col-xs-12 col-sm-6 col-md-6">{---}</span>';
$NEWS_VIEW_WRAPPER['default']['item']['NEWSRELATED'] = '<hr />{---}<hr />';

$NEWS_VIEW_TEMPLATE['default']['caption'] = '{NEWSTITLE}'; // null; // add a value to user tablerender()
$NEWS_VIEW_TEMPLATE['default']['item'] = '
<div class="single-blog blog-style-eight">{SETIMAGE: w=900&h=600}
	<div class="blog-image">
		<a href="{NEWSURL}"><img src="{NEWS_IMAGE: type=src&placeholder=true}" alt="{NEWS_TITLE}"/></a>
	</div>
	<div class="blog-content">
		<h4 class="blog-title">
		{NEWS_TITLE}
		</h4>
		<span><i class="lni lni-calendar"></i>&nbsp;{NEWS_DATE=short}</span>
		<span><i class="lni lni-comments-alt"></i>&nbsp;{NEWSCOMMENTS}</span>
		<span><i class="lni lni-user"></i>&nbsp;{NEWSAUTHOR}</span>
		<span><i class="lni lni-tag"></i>&nbsp;{NEWSTAGS}</span>
		<span><i class="lni lni-folder""></i>&nbsp;{NEWSCATEGORY}</span>
		<p class="lead text">
		{NEWS_SUMMARY}
		</p> 
		<div class="news-body">
		{NEWS_BODY=body}
		</div>
		<div class="body-extended">
		{NEWS_BODY=extended}
		</div>  
	</div>
	<div class="body">

		<div class="news-videos-1">
		{NEWSVIDEO: item=1}
		{NEWSVIDEO: item=2}
		{NEWSVIDEO: item=3}
		</div>


		<br />
		{SETIMAGE: w=400&h=400}

		<div class="row  news-images-1">
			<div class="col-md-6">{NEWSIMAGE: item=2}</div>
			<div class="col-md-6">{NEWSIMAGE: item=3}</div>
		</div>
		<div class="row news-images-2">
			<div class="col-md-6">{NEWSIMAGE: item=4}</div>
			<div class="col-md-6">{NEWSIMAGE: item=5}</div>
		</div>

		{NEWSVIDEO: item=4}
		{NEWSVIDEO: item=5}
			
   		<div class="body-extended text-justify">
				{NEWS_BODY=extended}
		</div>
		<hr>
		
		<div class="options hidden-print ">
			<div class="btn-group">{NEWSCOMMENTLINK: glyph=comments}{PRINTICON}{ADMINOPTIONS}{SOCIALSHARE}</div>
		</div>

	</div>
</div>
<!-- single blog -->


	{NEWSRELATED}

	<ul class="pagination justify-content-between my-5 news-view-pagination">
		<li class="page-item col-md-4">{NEWS_NAV_PREVIOUS}</li>
		<li class="page-item col-md-4 text-center">{NEWS_NAV_CURRENT}</li>
		<li class="page-item col-md-4 text-right text-end">{NEWS_NAV_NEXT}</li>
	</ul>

';


/*
 * 	<hr />
	<h3>About the Author</h3>
	<div class="media">
			<div class="media-left">{SETIMAGE: w=80&h=80&crop=1}{NEWS_AUTHOR_AVATAR: shape=circle}</div>
			<div class="media-body">
				<h4>{NEWS_AUTHOR}</h4>
					{NEWS_AUTHOR_SIGNATURE}
					<a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">My Articles</a>
			</div>
	</div>
 */


// @todo add more templates. eg. 'videos' , 'slideshow images', 'full width image'  - help and ideas always appreciated.


// Videos
$NEWS_VIEW_TEMPLATE['videos']['item'] = '<div class="view-item"><div class="alert alert-warning">Empty news_view_template.php (videos) - have ideas? let us know.</div></div>';


// Navigation/Pagination
$NEWS_VIEW_TEMPLATE['nav']['previous'] = '<a rel="prev" href="{NEWS_URL}">{GLYPH=fa-chevron-left}<span class="mx-1">{NEWS_TITLE}</span></a>';
$NEWS_VIEW_TEMPLATE['nav']['current'] = '<a class="text-center" href="{NEWS_NAV_URL}">{LAN=BACK}</a>';
$NEWS_VIEW_TEMPLATE['nav']['next'] = '<a rel="next" class="text-right" href="{NEWS_URL}"><span class="mx-1">{NEWS_TITLE}</span>{GLYPH=fa-chevron-right}</a> ';