<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
*/

if (!defined('e107_INIT'))
{
	exit;
}

$PAGE_WRAPPER = array();

$pageheader =
	'<div class="e107-page-header breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="banner-content d-flex flex-column justify-content-center">
                    <h1 class="page-title">{CPAGETITLE}</h1>
					{CPAGESUBTITLE}
                </div>
                {---BREADCRUMB---}
            </div>
        </div>
    </div>
</div>';

$PAGE_WRAPPER['default']['CPAGESUBTITLE']   = '<p>{---}</p>';
$PAGE_WRAPPER['default']['CPAGEMESSAGE']    = '{---}<div class="clear"><!-- --></div>';
$PAGE_WRAPPER['default']['CPAGEAUTHOR']     = "{---}, ";
$PAGE_WRAPPER['default']['CPAGENAV']        = '<div class="f-right pull-right float-right col-md-3">{---}</div>';

$PAGE_WRAPPER['2columns'] = $PAGE_WRAPPER['default'];
$PAGE_WRAPPER['fullwidth'] = $PAGE_WRAPPER['default'];

#### default template - BC ####
// used only for parsing comment outside of the page tablerender-ed content
// leave empty if you integrate page comments inside the main page template






// always used - it's inside the {PAGE} sc from 'page' template
$PAGE_TEMPLATE['default']['start'] = '<div id="{CPAGESEF}" class="cpage_body cpage-body">{CHAPTER_BREADCRUMB}';

// page body
$PAGE_TEMPLATE['default']['body'] = '
		{CPAGEMESSAGE}	
		<div class="clear"><!-- --></div>
		{CPAGENAV}
		{CPAGEBODY}
		<div class="clear"><!-- --></div>
		<span class="m-3">{CPAGEEDIT}</span>
		{CPAGERATING}
		{PAGECOMMENTS}';

// {CPAGEFIELD: name=image}

$PAGE_WRAPPER['default']['CPAGEEDIT'] = "<div class='text-right text-end'>{---}</div>";

// used only when password authorization is required
$PAGE_TEMPLATE['default']['authorize'] = '
		<div class="cpage-restrict ">
			{message}
			{form_open}
			<div class="panel panel-default">
				<div class="panel-heading">{caption}</div>
					<div class="panel-body">
					    <div class="form-group">
				       		 <label class="col-sm-3 control-label">{label}</label>
					        <div class="col-sm-9">
					               {password} {submit} 
					        </div>
			     		</div>
					</div>
      			</div>
			{form_close}
		</div>
	';

// used when access is denied (restriction by class)
$PAGE_TEMPLATE['default']['restricted'] = '
		{text}
	';

// used when page is not found
$PAGE_TEMPLATE['default']['notfound'] = '
		{text}
	';

// always used
$PAGE_TEMPLATE['default']['end'] = '{CPAGERELATED: types=page,news}</div>';
 
// options per template - disable table render
//	$PAGE_TEMPLATE['default']['noTableRender'] = false; //XXX Deprecated

// define different tablerender mode here
$PAGE_TEMPLATE['default']['tableRender'] = 'cpage';

$PAGE_TEMPLATE['default']['related']['caption'] = '{LAN=RELATED}';
$PAGE_TEMPLATE['default']['related']['start'] = '{SETIMAGE: w=350&h=350&crop=1}<div class="row">';
$PAGE_TEMPLATE['default']['related']['item'] = '<div class="col-md-4"><a href="{RELATED_URL}">{RELATED_IMAGE}</a><h3><a href="{RELATED_URL}">{RELATED_TITLE}</a></h3></div>';
$PAGE_TEMPLATE['default']['related']['end'] = '</div>';

// $PAGE_TEMPLATE['default']['editor'] = '<ul class="fa-ul"><li><i class="fa fa-li fa-edit"></i> Level 1</li><li><i class="fa fa-li fa-cog"></i> Level 2</li></ul>';


#### No table render example template ####

/*******************  END OF DEFAULT TEMPLATE *******************/

/* DEFAULT PAGE LAYOUT */
$PAGE_TEMPLATE['default']['page'] = $pageheader . '<div class="container my-5">{PAGE}</div>';

/* FULLWIDTH PAGE LAYOUT */
$PAGE_TEMPLATE['fullwidth'] =  $PAGE_TEMPLATE['default'];
$PAGE_TEMPLATE['fullwidth']['page'] = $pageheader . '<div class="container-fluid my-5">{PAGE}</div>';

/*  BARE PAGE LAYOUT - no additional HTML markup - used custom key to override core one */
$PAGE_TEMPLATE['custom'] =  $PAGE_TEMPLATE['default'];
$PAGE_TEMPLATE['custom']['page'] = '
{PAGE}';
$PAGE_TEMPLATE['custom']['body'] = '<style>.cpage_body { padding-top: 100px; } </style>  {CPAGEBODY}';

/* 2 COLUMNS LAYOUT With menu */
$PAGE_TEMPLATE['2columns'] =  $PAGE_TEMPLATE['default'];
$PAGE_TEMPLATE['2columns']['page'] = $pageheader . '<div class="container my-5">{PAGE}</div>';

$PAGE_TEMPLATE['2columns']['body'] = '
	<div class="row"> 
		<div class="col-md-6"><h2 class="my-2">{CPAGETITLE}</h2><h3 class="my-2">{CPAGESUBTITLE}</h3>
		{CPAGEBODY}
		</div>
		<div class="col-md-6"><h3 class="my-2">{CMENUTITLE}</h3>
		{CMENUBODY}
		</div>
		<span class="m-3">{CPAGEEDIT}</span>
	</div>';


/* how to rid this key? */
$PAGE_WRAPPER['profile']['CMENUIMAGE: template=profile'] = '<span class="page-profile-image pull-left col-xs-12 col-sm-4 col-md-4">{---}</span>';
$PAGE_TEMPLATE['profile'] = $PAGE_TEMPLATE['default'];
$PAGE_TEMPLATE['profile']['body'] = '
		{CPAGEMESSAGE}
		{CPAGESUBTITLE}
		<div class="clear"><!-- --></div>

		{CPAGENAV|default}
		{SETIMAGE: w=320}
		{CMENUIMAGE: template=profile}
		{CPAGEBODY}

		<div class="clear"><!-- --></div>
		{CPAGERATING}
		{CPAGEEDIT}
	';

 