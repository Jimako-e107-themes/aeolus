<?php

/**
 * e107 website system.
 *
 * Copyright (C) 2008-2021 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 */

/** 
 * {XURL_ICONS} template 
 */


$SOCIAL_XURL_TEMPLATE['default']['start'] = '<p class="xurl-social-icons hidden-print">';
$SOCIAL_XURL_TEMPLATE['default']['item'] = '<a target="_blank" rel="noopener noreferrer" href="{XURL_ICONS_HREF}" data-tooltip-position="top" class="e-tip social-icon social-{XURL_ICONS_ID}" title="{XURL_ICONS_TITLE}" aria-label="{XURL_ICONS_TITLE}"><span class="e-social-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a>';
$SOCIAL_XURL_TEMPLATE['default']['end'] = '</p>';

$SOCIAL_XURL_TEMPLATE['footer']['start'] = '<div class="footer-social"><ul>';
$SOCIAL_XURL_TEMPLATE['footer']['item'] = '<li><a target="_blank" rel="noopener noreferrer" href="{XURL_ICONS_HREF}" 
	 data-tooltip-position="top" class="e-tip social-icon social-{XURL_ICONS_ID}" title="{XURL_ICONS_TITLE}" 
	 aria-label="{XURL_ICONS_TITLE}"><span class="e-social-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a></li>';
$SOCIAL_XURL_TEMPLATE['footer']['end'] = '</ul></div>';

$SOCIAL_XURL_TEMPLATE['footer-01']['start'] = '<ul class="social">';
$SOCIAL_XURL_TEMPLATE['footer-01']['item'] = '<li><a target="_blank" rel="noopener noreferrer" href="{XURL_ICONS_HREF}" 
	 data-tooltip-position="top" class="e-tip social-icon social-{XURL_ICONS_ID}" title="{XURL_ICONS_TITLE}" 
	 aria-label="{XURL_ICONS_TITLE}"><span class="e-social-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a></li>';
$SOCIAL_XURL_TEMPLATE['footer-01']['end'] = '</ul> ';


$SOCIAL_XURL_TEMPLATE['footer-05']['start'] = '<h5 class="text-center social-title">Follow Us On</h5><ul class="social text-center mt-60">';
$SOCIAL_XURL_TEMPLATE['footer-05']['item'] = '<li><a target="_blank" rel="noopener noreferrer" href="{XURL_ICONS_HREF}" 
	 data-tooltip-position="top" class="e-tip social-icon social-{XURL_ICONS_ID}" title="{XURL_ICONS_TITLE}" 
	 aria-label="{XURL_ICONS_TITLE}"><span class="e-social-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a></li>';
$SOCIAL_XURL_TEMPLATE['footer-05']['end'] = '</ul> ';

/* just to know that this was covered, footer-01 can be used directly */
$SOCIAL_XURL_TEMPLATE['footer-02'] = $SOCIAL_XURL_TEMPLATE['footer-01'];
$SOCIAL_XURL_TEMPLATE['footer-06'] = $SOCIAL_XURL_TEMPLATE['footer-01'];



$SOCIAL_XURL_TEMPLATE['navbar-03']['start'] = '<ul>';
$SOCIAL_XURL_TEMPLATE['navbar-03']['item'] = '<li><a target="_blank" rel="noopener noreferrer" href="{XURL_ICONS_HREF}" 
	 data-tooltip-position="top" class="e-tip social-icon social-{XURL_ICONS_ID}" title="{XURL_ICONS_TITLE}" 
	 aria-label="{XURL_ICONS_TITLE}"><span class="e-social-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a></li>';
$SOCIAL_XURL_TEMPLATE['navbar-03']['end'] = '</ul> ';


$SOCIAL_XURL_TEMPLATE['navbar-04']['start'] = '<span class="xurl-title">Follow Us</span><ul>';
$SOCIAL_XURL_TEMPLATE['navbar-04']['item'] = '<li><a target="_blank" rel="noopener noreferrer" href="{XURL_ICONS_HREF}" 
	 data-tooltip-position="top" class="e-tip social-icon social-{XURL_ICONS_ID}" title="{XURL_ICONS_TITLE}" 
	 aria-label="{XURL_ICONS_TITLE}"><span class="xurl e-social-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a></li>';
$SOCIAL_XURL_TEMPLATE['navbar-04']['end'] = '</ul> ';

$SOCIAL_XURL_TEMPLATE['navbar-09']['start'] = '<h5 class="social-title">Follow Us On</h5><ul>';
$SOCIAL_XURL_TEMPLATE['navbar-09']['item'] = '<li><a target="_blank" rel="noopener noreferrer" href="{XURL_ICONS_HREF}" 
	 data-tooltip-position="top" class="e-tip social-icon social-{XURL_ICONS_ID}" title="{XURL_ICONS_TITLE}" 
	 aria-label="{XURL_ICONS_TITLE}"><span class="e-social-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a></li>';
$SOCIAL_XURL_TEMPLATE['navbar-09']['end'] = '</ul> ';