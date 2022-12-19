<?php
/*
 * CookBook - an e107 plugin by Tijn Kuyper (http://www.tijnkuyper.nl)
 *
 * Released under the terms and conditions of the
 * Apache License 2.0 (see LICENSE file or http://www.apache.org/licenses/LICENSE-2.0)
 *
 * Main template
*/

if (!defined('e107_INIT')) { exit; }

// OVERVIEW GRID
$COOKBOOKs_TEMPLATE['overview_grid']['start'] = '
<div class="row">';

$COOKBOOKs_TEMPLATE['overview_grid']['items'] = '
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            {SETIMAGE: w=200&h=150&crop=1}
            <a href="{COOKBOOK_RECIPE_URL}">{COOKBOOK_RECIPE_THUMB_URL}</a>
            <div class="caption text-center">
                <h3>{COOKBOOK_RECIPE_NAME: type=link}</h3>
                <p>{COOKBOOK_SUMMARY: max=150}</p>

                <ul class="list-inline text-center">
                    <li>{GLYPH=fa-clock} {COOKBOOK_RECIPE_TIME}</li>
                    <li>{GLYPH=fa-user} {COOKBOOK_RECIPE_AUTHOR}</li>
                </ul>
            </div>
        </div>
    </div>
';

$COOKBOOKs_TEMPLATE['overview_grid']['end'] = '
</div>
<div class="row"> 
   {GRID_NEXTPREV}
</div>';   

 
$COOKBOOK_TEMPLATE['overview_grid']['caption'] = NULL;

$COOKBOOK_TEMPLATE['overview_grid']['start'] =
'<section class="blog-area pb-5">
	<div class="container">
	  <div class="row">{SETIMAGE: w=700&h=500&crop=1}';

$COOKBOOK_TEMPLATE['overview_grid']['items'] =
'
<div class="col-lg-6">
	<div class="single-blog blog-style-four">
		<div class="blog-image">
			<img class="thumb" src="{COOKBOOK_RECIPE_THUMB_URL}" alt="{COOKBOOK_RECIPE_NAME}" />
			<div class="meta-info">
				<span><i class="lni lni-calendar"></i> {COOKBOOK_RECIPE_DATE}</span>
				<span><i class="lni lni-user"></i>{COOKBOOK_RECIPE_AUTHOR}</span>
			</div>
		</div>
		<div class="blog-content">
			<h4 class="blog-title">
			<a href="{COOKBOOK_RECIPE_URL}">
			{COOKBOOK_RECIPE_NAME}
			</a>
			</h4>
			<p class="text">
			{COOKBOOK_SUMMARY: max=150}
			</p>
			<div class="rounded-buttons">
			<a
			class="btn btn-news-default "
			href="{COOKBOOK_RECIPE_URL}"
			>{LAN=READ_MORE}</a
			>
			</div>
		</div>
	</div>
</div>
 
        ';

$COOKBOOK_TEMPLATE['overview_grid']['featured'] = $NEWS_BLOGS_TEMPLATE['blog-11']['item'];

$COOKBOOK_TEMPLATE['overview_grid']['end'] = '</div></div></section>
<div class="row"> 
   {GRID_NEXTPREV}
</div>
';



// OVERVIEW TABLE 
$COOKBOOK_TEMPLATE['overview_datatable']['start'] = '
<section class="blog-area my-5">
	<div class="container">
	  <div class="row">
<div align="left pull-left">
<table class="table table-bordered text-left recipes dt-responsive nowrap" cellspacing="0" width="100%">
	<thead>
		<tr>
		  	<th width="40%">{LAN=LAN_CB_RECIPE}</th>
		  	<th>{GLYPH=fa-cutlery}</th>
		  	<th>{GLYPH=fa-users}</th>
	  	 	<th>{GLYPH=fa-clock-o}</th>
	  	 	<th>{GLYPH=fa-toolbox}</th>
            <th>{GLYPH=fa-star}</th>
	  	 	<th>{GLYPH=fa-tags}</th>
		</tr>
	</thead>
    <tbody>
';

$COOKBOOK_TEMPLATE['overview_datatable']['items'] = '
		<tr>
			<td>{COOKBOOK_RECIPE_NAME}</td>
	    	<td>{COOKBOOK_CATEGORY_NAME}</td>
	    	<td>{COOKBOOK_RECIPE_PERSONS}</td>
	    	<td>{COOKBOOK_RECIPE_TIME}</td>
            <td>{COOKBOOK_RECIPE_DIFFICULTY}</td>
	    	<td>{COOKBOOK_RECIPE_AUTHORRATING}</td>
	    	<td>{COOKBOOK_RECIPE_KEYWORDS: limit=5}</td>
    	</tr>
';

$COOKBOOK_TEMPLATE['overview_datatable']['end'] = '
	</tbody>
</table>
</div>
</div></div></section>
';


// INDVIDUAL RECIPE LAYOUT 
$COOKBOOK_TEMPLATE['recipe_layout'] = '
<div class="row single-blog blog-style-eight product-page">	 	 
		{---RECIPE-CONTENT---}
		{---RECIPE-INFO---}
	 
</div> <!-- row -->

<div class="row">
    <div class="col-md-12">
        {SETSTYLE=cookbook_comments}
        {COOKBOOK_RECIPE_COMMENTS}
        {SETSTYLE=main}
    </div>
</div>

<div class="row">
    <div class="col-md-12">  
        {SETSTYLE=cookbook_related}   
        {COOKBOOK_RECIPE_RELATED}
        {SETSTYLE=main}
    </div>
</div>
';
/* 
<h2 class="blog-title">{COOKBOOK_RECIPE_NAME}</h2>
*/ 
$COOKBOOK_TEMPLATE['recipe_content'] = '
<!-- Start content left  -->
<div class="col-md-8">
    <div class="product-overview">
        
        <div class="blog-image p-2">{SETIMAGE: w=0&h=0}
        <img alt="{COOKBOOK_RECIPE_ANCHOR}" src="{COOKBOOK_RECIPE_THUMB_URL}">
		</div>
        
		<h3>{LAN=LAN_CB_INGREDIENTS}</h3>
		{COOKBOOK_RECIPE_INGREDIENTS}
        <div class="recipe-instructions">
            <h3>{LAN=LAN_CB_INSTRUCTIONS}</h3>
            {COOKBOOK_RECIPE_INSTRUCTIONS}
        </div>
    </div>
</div>
<!-- End content left-->
';

$COOKBOOK_WRAPPER['recipe_info']['COOKBOOK_RECIPE_AUTHORRATING: type=stars']   = 
'<div class="product-rating d-flex"><div id="rating">{---}</div></div>';
$COOKBOOK_WRAPPER['recipe_info']['COOKBOOK_RECIPE_DIFFICULTY: type=stars']     = '<li>
<i class="lni lni-travel"></i><span id="difficulty">{---}</span></li>';

$COOKBOOK_WRAPPER['recipe_info']['COOKBOOK_RECIPE_KEYWORDS']     = '<li>
<i class="lni lni-tag"></i>{---}</li>';
 

$COOKBOOK_TEMPLATE['recipe_keyword'] = 
'<a href="{URL}" title="{KEYWORD}">{KEYWORD}</a>';

$COOKBOOK_TEMPLATE['recipe_info'] = '
<!-- Sidebar -->
<div class="col-md-4 product-details-content">
	<h4 class="product-title">{COOKBOOK_RECIPE_NAME}</h4>
	{COOKBOOK_RECIPE_AUTHORRATING: type=stars}
	<div class="product-price">
     	{COOKBOOK_CATEGORY_NAME: type=link}
	</div>
 
<div class="list-style">
   <div class="list-style-two">
      <ul>
         <li>
            <i class="lni lni-users"></i> {COOKBOOK_RECIPE_PERSONS}
         </li>
         <li>
            <i class="lni lni-alarm-clock"></i> {COOKBOOK_RECIPE_TIME}
         </li>

        {COOKBOOK_RECIPE_KEYWORDS}
         
        {COOKBOOK_RECIPE_DIFFICULTY: type=stars}
         
		<li>
            <i class="lni lni-user"></i> {COOKBOOK_RECIPE_AUTHOR}
         </li>
		<li>
            <i class="lni lni-calendar"></i>{COOKBOOK_RECIPE_DATE}
         </li>		 
      </ul>
   </div>
</div>
 
<h4 class="product-title mt-3">{LAN=LAN_CB_ACTIONS}</h4>
   
    <ul class="fa-ul">
        {COOKBOOK_BOOKMARK}
        <li>{GLYPH: type=fa-pencil&class=fa-li} {COOKBOOK_EDIT}</li>
        <li>{GLYPH: type=fa-print&class=fa-li} {COOKBOOK_PRINT}</li>
    </ul>
</div>
<!-- End sidebar -->
';


// KEYWORD OVERVIEW (TAGCLOUD) (div #id should always be 'recipe_tagcloud')
$COOKBOOK_TEMPLATE['keyword_overview'] = '
{COOKBOOK_TAGCLOUD}
<div id="recipe_tagcloud" class="container-fluid" style="min-height: 350px;"></div>
';


$COOKBOOK_WRAPPER['print_recipe_layout'] = $COOKBOOK_WRAPPER['recipe_info']; 

// PRINT TEMPLATE FOR INDIVIDUAL RECIPE
$COOKBOOK_TEMPLATE['print_recipe_layout'] = '
<h1>{COOKBOOK_RECIPE_NAME}<h1>

<h2>{LAN=LAN_CB_INGREDIENTS}</h2>
<p>{COOKBOOK_RECIPE_INGREDIENTS}</p>
	            
<h2>{LAN=LAN_CB_INSTRUCTIONS}</h2>
{COOKBOOK_RECIPE_INSTRUCTIONS}
	           
<h3>{LAN=LAN_CB_RECIPEINFO}</h3>
<ul class="fa-ul">
	<li>{GLYPH: type=fa-cutlery&class=fa-li} {COOKBOOK_CATEGORY_NAME}</li>
	<li>{GLYPH: type=fa-users&class=fa-li} {COOKBOOK_RECIPE_PERSONS}</li>
	<li>{GLYPH: type=fa-clock-o&class=fa-li} {COOKBOOK_RECIPE_TIME}</li>
	<li>{GLYPH: type=fa-tags&class=fa-li} {COOKBOOK_RECIPE_KEYWORDS}</li>
    <li>{GLYPH: type=fa-trophy&class=fa-li} {COOKBOOK_RECIPE_AUTHORRATING: type=stars}</li>
    <li>{GLYPH: type=fa-toolbox&class=fa-li} {COOKBOOK_RECIPE_DIFFICULTY: type=stars}</li>
    <li>{GLYPH: type=fa-user&class=fa-li} {COOKBOOK_RECIPE_AUTHOR}</li>
    <li>{GLYPH: type=fa-calendar-alt&class=fa-li} {COOKBOOK_RECIPE_DATE}</li>
</ul>
';

$COOKBOOK_TEMPLATE['related']['caption']    = '{LAN=LAN_CB_RELATEDRECIPES}';
$COOKBOOK_TEMPLATE['related']['start']      = '{SETIMAGE: w=150&h=150&crop=1}<div class="row">';
$COOKBOOK_TEMPLATE['related']['item']       = '<div class="col-md-3 col-sm-6">
                                                 <a href="{RELATED_URL}">{RELATED_IMAGE}</a>
                                                 <h4><a href="{RELATED_URL}">{RELATED_TITLE}</a></h4>
                                                </div>';
$COOKBOOK_TEMPLATE['related']['end']        = '</div>';