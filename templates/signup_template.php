<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2016 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_themes/templates/signup_template.php,v $
 * $Revision: 12837 $
 * $Date: 2012-06-19 11:08:41 +0200 (di, 19 jun 2012) $
 * $Author: e107coders $
 */

if(!defined('e107_INIT'))
{
	exit;
}

// Shortcode Wrappers

$SIGNUP_WRAPPER['SIGNUP_DISPLAYNAME'] = 		'
        <div class="col-md-12">
            <div class="form-input">
               <label>
               Name will be used to personalize your experience
               </label>
               <div class="input-items default">
                  {---}
                  <i class="lni lni-user"></i>
               </div>
            </div>
            <!-- form input -->
         </div>

';

$SIGNUP_WRAPPER['SIGNUP_REALNAME'] = 		'
        <div class="col-md-12">
            <div class="form-input">
               <label>
               {LAN=SIGNUP_91}{SIGNUP_IS_MANDATORY=realname} 
               </label>
               <div class="input-items default">
                  {---}
                  <i class="lni lni-user"></i>
               </div>
            </div>
            <!-- form input -->
         </div>

';

$SIGNUP_WRAPPER['SIGNUP_LOGINNAME'] = 			' 
        <div class="col-md-12">
            <div class="form-input">
               <label>
               Your login name will be
               </label>{SIGNUP_IS_MANDATORY=true}
               <div class="input-items default">
                  {---}
                  <i class="lni lni-user"></i>
               </div>
            </div>
            <!-- form input -->
         </div>  
          ';
          
$SIGNUP_WRAPPER['SIGNUP_EMAIL'] = 			' 
<div class="col-md-12">
    <div class="form-input">
       <label>
       Your account will be under this email
       </label>{SIGNUP_IS_MANDATORY=true}
       <div class="input-items default">
          {---}
          <i class="lni lni-envelope"></i>
       </div>
    </div>
    <!-- form input -->
 </div>';          

$SIGNUP_WRAPPER['SIGNUP_EMAIL_CONFIRM'] = 			' 
<div class="col-md-12">
    <div class="form-input">
       <label>
       {LAN=SIGNUP_39}
       </label>{SIGNUP_IS_MANDATORY=true}
       <div class="input-items default">
          {---}
          <i class="lni lni-envelope"></i>
       </div>
    </div>
    <!-- form input -->
 </div>';  
 
 
 
$SIGNUP_WRAPPER['SIGNUP_GDPR_INFO']             = "<div class='form-group row m-2 text-center'>{---}</div> ";


$SIGNUP_WRAPPER['SIGNUP_SIGNATURE'] = 			"<div class='form-group row m-2'>
													<label class='col-sm-3 control-label' for='signature'>{LAN=SIGNUP_93}{SIGNUP_IS_MANDATORY=signature}</label>
													<div class='col-sm-9'>{---}</div>
												</div>";

$SIGNUP_WRAPPER['SIGNUP_IMAGES'] = 				"<div class='form-group row m-2'>
													<label class='col-sm-3 control-label'for='avatar'>{LAN=SIGNUP_94}{SIGNUP_IS_MANDATORY=avatar}</label>
													<div class='col-sm-9'>{---}</div>
												</div>";





$SIGNUP_WRAPPER['SIGNUP_HIDE_EMAIL'] = 			"<div class='form-group row m-2'>
													<label class='col-sm-3 control-label'>{LAN=USER_83}</label>
													<div class='col-sm-9'>{---}</div>
												</div>";
 

$SIGNUP_WRAPPER['SIGNUP_XUP']                   = "<div class='text-center'>{---}
												<h2 class='signup-divider'><span>{LAN=SIGNUP_120}</span></h2></div>";

$SIGNUP_WRAPPER['SIGNUP_PASSWORD1'] = 			'
<div class="col-md-12">
	<div class="form-input">
		<label>{LAN=SIGNUP_83}{SIGNUP_IS_MANDATORY=true}</label>
		<div class="input-items default">
			{---}
		<i class="lni lni-key"></i>
		</div>
	</div>
	<!-- form input -->
</div>';

$SIGNUP_WRAPPER['SIGNUP_PASSWORD2'] = 			
'
<div class="col-md-12">
	<div class="form-input">
		<label>{LAN=SIGNUP_84}{SIGNUP_IS_MANDATORY=true}</label>
		<div class="input-items default">
			{---}
		<i class="lni lni-key"></i>
		</div>
	</div>
	<!-- form input -->
</div>';
 

$SIGNUP_WRAPPER['SIGNUP_USERCLASS_SUBSCRIBE'] = "<div class='form-group row m-2 '>
													<label class='col-sm-3 control-label'>{LAN=SIGNUP_113}{SIGNUP_IS_MANDATORY=subscribe}</label>
													<div class='col-sm-9 checkbox'>{---}</div>
												</div>";
 

$SIGNUP_WRAPPER['SIGNUP_GDPR_INFO'] 			= '
<div class="col-12"> 
    <div class="form-group mb-3">
        <label for="gdpr">{LAN=CONTACT_24}
        </label>
        <div class="checkbox">{---}{LAN=CONTACT_21}
            <div class="help-block">{CONTACT_GDPR_LINK}
            </div>
        </div>
    </div> 
</div>';

$SIGNUP_WRAPPER['SIGNUP_IMAGECODE'] 	= '	
<div class="row">	
<div class="col-lg-4 col-md-4 col-12"> 
    <div class="form-group mb-3">{CONTACT_IMAGECODE_LABEL}:
         <label for="code-verify">' . e107::getSecureImg()->renderLabel().'{SIGNUP_IS_MANDATORY=true}</label>
    </div>
</div>
<div class="col-lg-8 col-md-8 col-12"> 
{---} 
</div></div>';
 
 
// Signup Template


$SIGNUP_TEMPLATE['start'] = '
<div class="signin-form-one form-style-one rounded-buttons"><div class="row">
	{SIGNUP_FORM_OPEN}
    {SIGNUP_ADMINOPTIONS} {SIGNUP_SIGNUP_TEXT}';


$SIGNUP_TEMPLATE['body'] = '
	{SIGNUP_XUP}
	<div id="default">
		{SIGNUP_XUP_ACTION}
        {SIGNUP_DISPLAYNAME} 
        {SIGNUP_LOGINNAME: placeholder=LAN_SIGNUP_81} 
        {SIGNUP_REALNAME: placeholder=LAN_SIGNUP_91}
		{SIGNUP_EMAIL: placeholder=LAN_USER_60}	
		{SIGNUP_EMAIL_CONFIRM: placeholder=LAN_SIGNUP_39}
		{SIGNUP_PASSWORD1: placeholder=LAN_SIGNUP_83}
		{SIGNUP_PASSWORD2: placeholder=LAN_SIGNUP_84}        	
			'.
			" 
			{SIGNUP_HIDE_EMAIL}
			{SIGNUP_USERCLASS_SUBSCRIBE}
			{SIGNUP_EXTENDED_USER_FIELDS}
			{SIGNUP_SIGNATURE}
			{SIGNUP_IMAGES}
			{SIGNUP_IMAGECODE}
			{SIGNUP_GDPR_INFO}".
			'<div class="col-md-6"><div class="form-input rounded-buttons">
				{SIGNUP_BUTTON: class=btn primary-btn-outline rounded-full}
			</div></div>	 
	</div>
	{SIGNUP_FORM_CLOSE}';

$SIGNUP_TEMPLATE['end']                     = '</div></div>';

$SIGNUP_TEMPLATE['coppa']                   = "{SIGNUP_COPPA_TEXT}<br /><br />
											<div style='text-align:center'><b>{LAN=LAN_SIGNUP_17}</b>
												{SIGNUP_COPPA_FORM}
											</div>";

$SIGNUP_TEMPLATE['coppa-fail']              = "<div class='alert alert-danger alert-block' style='text-align:center'>{LAN=LAN_SIGNUP_9}</div>";

$SIGNUP_TEMPLATE['extended-category']       = "
											<div class='form-group row m-2'>
												<div class='col-sm-9 col-md-offset-3'>{EXTENDED_CAT_TEXT}</div>
											</div>";

$SIGNUP_TEMPLATE['extended-user-fields']    = "
											<div class='form-group row m-2'>
												<label class='col-sm-3 control-label'>{EXTENDED_USER_FIELD_TEXT}{EXTENDED_USER_FIELD_REQUIRED}</label>
												<div class='col-sm-9'>{EXTENDED_USER_FIELD_EDIT}</div>
											</div>";