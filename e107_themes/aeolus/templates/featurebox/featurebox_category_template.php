<?php
/*
* Copyright (c) e107 Inc 2013 - e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
*
* Featurebox core category templates
*/

// TODO - list of all available shortcodes & schortcode parameters
$FEATUREBOX_CATEGORY_TEMPLATE = array();

// Bootstrap 3

$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['list_start'] = '
<div id="carousel-example-generic" class="featurebox carousel slide" data-bs-ride="false">
{FEATUREBOX_NAVIGATION|bootstrap5_carousel=loop&uselimit=1}
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    
';

$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['list_end'] = '
	  </div>
 <button class="carousel-control-prev" type="button" data-bs-target="#carousel-example-generic" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel-example-generic" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>            
</div><!-- end row -->
';
 
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['nav_start'] = '<!-- Indicators --><div class="carousel-indicators">';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['nav_item'] = '
<button type="button" data-bs-target="#carousel-example-generic" data-bs-slide-to="{FEATUREBOX_COUNTER=0}" class="{FEATUREBOX_ACTIVE}" aria-current="true" aria-label="Slide 1"></button>';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['nav_end'] = '</div>';

$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['nav_separator'] = '';


//



$FEATUREBOX_CATEGORY_TEMPLATE['ayro-slider-01']['list_start'] = '
<section class="slider-area slider-one">
<div class="bd-example">
  <div id="carouselOne" class="carousel slide" data-bs-ride="carousel">
  {FEATUREBOX_NAVIGATION|ayro-slider-01&uselimit=1}
	<div class="carousel-inner">     
';

$FEATUREBOX_CATEGORY_TEMPLATE['ayro-slider-01']['list_end'] = 
'<a class="carousel-control-prev" href="#carouselOne" role="button" data-bs-slide="prev">
<i class="lni lni-chevron-left"></i></a>
<a class="carousel-control-next" href="#carouselOne" role="button" data-bs-slide="next">
<i class="lni lni-chevron-right"></i></a>
</div>
<!-- carousel -->
</div>
<!-- bd-example -->
</section>
';
 
$FEATUREBOX_CATEGORY_TEMPLATE['ayro-slider-01']['nav_start'] = '<ol class="carousel-indicators">';
$FEATUREBOX_CATEGORY_TEMPLATE['ayro-slider-01']['nav_item'] = '
<li data-bs-target="#carouselOne" data-bs-slide-to="{FEATUREBOX_COUNTER=0}" class="{FEATUREBOX_ACTIVE}"></li>';
$FEATUREBOX_CATEGORY_TEMPLATE['ayro-slider-01']['nav_end'] = '</div>';

$FEATUREBOX_CATEGORY_TEMPLATE['ayro-slider-01']['nav_separator'] = '';




$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['col_start'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['col_end'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['item_start'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['item_end'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['item_separator'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['item_empty'] = '';

/*********************************************************************************/


$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['list_start'] = '
<div id="carousel-example-generic" class="featurebox carousel slide" data-ride="carousel" data-bs-ride="carousel">  
{FEATUREBOX_NAVIGATION|bootstrap3_carousel=loop&uselimit=1}
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    
';

$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['list_end'] = '
	  </div>

	<!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev" data-bs-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next" data-bs-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
                    

	</div><!-- end row -->

<!-- end carousel -->
';

$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['nav_start'] = '<!-- Indicators --><ol class="carousel-indicators">';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['nav_item'] = '<li data-target="#carousel-example-generic" data-slide-to="{FEATUREBOX_COUNTER=0}" class="{FEATUREBOX_ACTIVE}"></li>';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['nav_end'] = '</ol>';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['nav_separator'] = '';


$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['col_start'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['col_end'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['item_start'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['item_end'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['item_separator'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['item_empty'] = '';






// v2.x Default - Bootstrap. 

$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_carousel'] = $FEATUREBOX_CATEGORY_TEMPLATE['ayro-slider-01'];
$FEATUREBOX_CATEGORY_TEMPLATE['default'] = $FEATUREBOX_CATEGORY_TEMPLATE['ayro-slider-01'];

 

// ------------------------------------------ TABS (Bootstrap) ----------------------------------------------


$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_tabs']['list_start'] = '
<div class="box featurebox tab-content">
	{FEATUREBOX_NAVIGATION|bootstrap_tabs=loop&uselimit}	
';

$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_tabs']['list_end'] = '
	</div>
	<div class="clear"><!-- --></div>

';
// no column support
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_tabs']['col_start'] = '<div id="tab-{FEATUREBOX_COLSCOUNT}" class="tab-pane {FEATUREBOX_ACTIVE}">';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_tabs']['col_end'] = '</div>';

// ajax navigation (unobtrusive)
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_tabs']['item_start'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_tabs']['item_end'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_tabs']['item_separator'] = '<div class="clear"><!-- --></div>';

// empty item  - used with col templates, no shortcodes just basic markup
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_tabs']['item_empty'] = '';

$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_tabs']['nav_start'] = '<ul class="nav nav-tabs">';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_tabs']['nav_item'] = '<li class="{FEATUREBOX_ACTIVE}"><a data-toggle="tab" data-bs-toggle="tab" href="#tab-{FEATUREBOX_COLSCOUNT}">{FEATUREBOX_TITLE}</a></li>';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_tabs']['nav_end'] = '</ul>';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_tabs']['nav_separator'] = '';
//<div class="e-bootstrap_tabs">
// external JS, comma separated list

$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_tabs']['js'] = '';
// inline JS, without <script> tags
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_tabs']['js_inline'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap_tabs']['js_type'] = 'jquery';



// ------------------------------------------ ACCORDION (jquery) ----------------------------------------------


$FEATUREBOX_CATEGORY_TEMPLATE['accordion']['list_start'] 		= "\n\n<!-- Accordion -->\n<div class='box featurebox' id='featurebox-accordion-container' style='width:100%'>";

$FEATUREBOX_CATEGORY_TEMPLATE['accordion']['list_end'] 			= "</div>\n<!-- -->\n\n";

$FEATUREBOX_CATEGORY_TEMPLATE['accordion']['col_start'] 		= '';
$FEATUREBOX_CATEGORY_TEMPLATE['accordion']['col_end'] 			= '';

$FEATUREBOX_CATEGORY_TEMPLATE['accordion']['item_start'] 		= '';
$FEATUREBOX_CATEGORY_TEMPLATE['accordion']['item_end'] 			= '';
$FEATUREBOX_CATEGORY_TEMPLATE['accordion']['item_separator'] 	= '';

$FEATUREBOX_CATEGORY_TEMPLATE['accordion']['item_empty'] 		= '';

$FEATUREBOX_CATEGORY_TEMPLATE['accordion']['nav_start'] 		= '';
$FEATUREBOX_CATEGORY_TEMPLATE['accordion']['nav_item'] 			= '';
$FEATUREBOX_CATEGORY_TEMPLATE['accordion']['nav_end'] 			= '';
$FEATUREBOX_CATEGORY_TEMPLATE['accordion']['nav_separator'] 	= '';

$FEATUREBOX_CATEGORY_TEMPLATE['accordion']['js'] 				= '';
$FEATUREBOX_CATEGORY_TEMPLATE['accordion']['js_inline'] 		= '$( "#featurebox-accordion-container" ).accordion({FEATUREBOX_PARMS});';
$FEATUREBOX_CATEGORY_TEMPLATE['accordion']['js_type'] 			= 'jquery';



// ------------------------------------------ CAMERA ----------------------------------------------
/*
 <div class="camera_wrap">
    <div data-src="images/image_1.jpg"></div>
    <div data-src="images/image_1.jpg"></div>
    <div data-src="images/image_2.jpg"></div>
</div>
 */
/*
$FEATUREBOX_CATEGORY_TEMPLATE['camera']['list_start'] = '<!-- start Camera -->
<div class="box featurebox camera_wrap camera_azure_skin">
	
';
// {FEATUREBOX_NAVIGATION|camera=loop&uselimit}
$FEATUREBOX_CATEGORY_TEMPLATE['camera']['list_end'] = '
</div>
<div class="clear"><!-- --></div>
<!-- End Camera -->
';
// no column support
$FEATUREBOX_CATEGORY_TEMPLATE['camera']['col_start'] = '';// <div id="tab-{FEATUREBOX_COLSCOUNT}-activate"><div class="tab-content">';
$FEATUREBOX_CATEGORY_TEMPLATE['camera']['col_end'] = ''; // </div></div>';

// ajax navigation (unobtrusive)
$FEATUREBOX_CATEGORY_TEMPLATE['camera']['item_start'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['camera']['item_end'] = '';
$FEATUREBOX_CATEGORY_TEMPLATE['camera']['item_separator'] = '';// <div class="clear"><!-- --></div>';

// empty item  - used with col templates, no shortcodes just basic markup
$FEATUREBOX_CATEGORY_TEMPLATE['camera']['item_empty'] = '';

$FEATUREBOX_CATEGORY_TEMPLATE['camera']['nav_start'] = ''; // <ul>';
$FEATUREBOX_CATEGORY_TEMPLATE['camera']['nav_item'] = ''; // <li><a href="#tab-{FEATUREBOX_COUNTER}-activate">{FEATUREBOX_TITLE}</a></li>';
$FEATUREBOX_CATEGORY_TEMPLATE['camera']['nav_end'] = ''; // </ul>';
$FEATUREBOX_CATEGORY_TEMPLATE['camera']['nav_separator'] = '';
*/

// Depracated camera.js, need replacement
//$FEATUREBOX_CATEGORY_TEMPLATE['camera']['js'] = '{e_WEB_JS}camera/scripts/camera.min.js';
//$FEATUREBOX_CATEGORY_TEMPLATE['camera']['js_inline'] = "$('.camera_wrap').camera({FEATUREBOX_PARMS});";
//$FEATUREBOX_CATEGORY_TEMPLATE['camera']['js_type'] = 'jquery';



/**
 * Template information.
 * Allowed keys:
 * - title: Dropdown title (language constants are accepted e.g. 'MY_LAN')
 * - [optional] description: Template description (language constants are accepted e.g. 'MY_LAN') - UNDER CONSTRUCTION
 * - [optional] image: Template image preview (path constants are accepted e.g. '{e_PLUGIN}myplug/images/mytemplate_preview.png') - UNDER CONSTRUCTION
 *
 * @var array
 */
$FEATUREBOX_CATEGORY_INFO = array(
	'bootstrap_carousel' 	=> array('title' => 'Bootstrap v2 Carousel',    'description' => "Bootstrap's Hero slider"),
	'bootstrap3_carousel' 	=> array('title' => 'Default AYRO UI 01', 		'description' => "Bootstrap's Hero slider"),
	'bootstrap_tabs'		=> array('title' => 'Bootstrap Tabs'	,	 	'description' => 'Tabbed Feature box items'),
//	'camera' 				=> array('title' => 'Image-Slider (jquery)'	, 	'description' => 'Image transitions using the "Camera" jquery plugin'),
//	'accordion' 			=> array('title' => 'Accordion (jquery)'	, 	'description' => 'Accordion utilizing jQuery UI'),
	'default' 				=> array('title' => 'Default AYRO UI 01', 					'description' => 'Flat - show by category limit'),
//  DEPRECATED	'dynamic' 				=> array('title' => 'Dynamic (prototype.js)', 	'description' => 'Load items on click (AJAX)'),
// DEPRECATED	'tabs-proto' 			=> array('title' => 'Tabs (prototype.js)'	, 	'description' => 'Tabbed Feature box items')
);
