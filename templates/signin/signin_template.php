<?php

// Do not use constants.. use {LAN=xxx} instead.
// Template compatible with Bootstrap 5 only.

$SIGNIN_TEMPLATE = [];

$class_btn_login_navbar = "btn primary-btn";
$class_btn_resend_navbar = "btn btn-secondary btn_resend_navbar rounded-2";
$class_btn_fpw_navbar = "btn btn-secondary btn-sm btn_fpw_navbar rounded-2";



$SIGNIN_WRAPPER['signin']['SIGNIN_SIGNUP_HREF'] = '<li class="nav-item signin-item"><a class="nav-link" href="{---}">{LAN=LAN_LOGINMENU_3}</a></li>';
$SIGNIN_WRAPPER['signin']['SIGNIN_RESEND_HREF'] = '<a href="{---}"  >{LAN=LAN_LOGINMENU_40}</a>';

$SIGNIN_TEMPLATE['signin'] = '			 
	{SIGNIN_SIGNUP_HREF}
	<li class="nav-item signin-item dropdown">
		<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" data-toggle="dropdown">{LAN=LAN_LOGINMENU_51} <strong class="caret"></strong></a>
		<div class="dropdown-menu p-2 text-center" style="min-width:250px; padding-bottom: 0px;">
		
		{SIGNIN_FORM=start}
		{SIGNIN_LOGINMESSAGE}
		<div class="row m-1 align-items-center">{SIGNIN_INPUT_USERNAME}</div>
		<div class="row m-1 align-items-center">{SIGNIN_INPUT_PASSWORD}</div>

		<div class="form-group"></div>
		{SIGNIN_IMAGECODE_NUMBER}
		{SIGNIN_IMAGECODE_BOX}
		
		<div class="checkbox my-2">		
			<label class="string optional" for="bs3-autologin"><input style="margin-right: 10px;" type="checkbox" name="autologin" id="bs3-autologin" value="1">
			{LAN=LAN_LOGINMENU_6}</label>
			</div>
			<input class="' . $class_btn_login_navbar . '" type="submit" name="userlogin" id="bs3-userlogin" value="{LAN=LAN_LOGINMENU_51}">
			<div class="login-page-footer">
				<div class="login-page-signup-link">{SIGNIN_RESEND_HREF}</div>
				<div class= "login-page-fpw-link"><a href="{SIGNIN_FPW_HREF}" class=" ">{LAN=LAN_LOGINMENU_4}</a></div>
			</div>
 
			{SIGNIN_FORM=end}
		</div>				
	</li>
 ';

$SIGNIN_WRAPPER['signout']['SIGNIN_ADMIN_HREF'] = '<li class="signout-item nav-item"><a class="justify-content-start signout admin" id="signin-sc-admin" href="{---}"><span><i class="lni lni-cogs"></i></span>&nbsp;{LAN=LAN_LOGINMENU_11}</a></li>';
$SIGNIN_WRAPPER['signout']['SIGNIN_PM_NAV'] = '<li class="signout-item nav-item dropdown dropdown-pm">{---}</li>';


$SIGNIN_TEMPLATE['signout'] = '
			{SIGNIN_PM_NAV}
            <li class="nav-item signout-item">
              <a
                data-bs-toggle="collapse"
                data-bs-target="#sub-signin-sc"
                aria-controls="sub-signin-sc"
                aria-expanded="false"
                aria-label="Toggle navigation"
                href="javascript:void(0)"
                >{USER_AVATAR: w=30&h=30&crop=1&shape=circle}&nbsp;{SIGNIN_USERNAME: username=1}
                <div class="sub-nav-toggler">
                  <span><i class="lni lni-chevron-down"></i></span>
                </div>
              </a>
				<ul class="sub-menu collapse" id="sub-signin-sc">
					<li class="nav-item">
						<a class="justify-content-start" href="{SIGNIN_USERSETTINGS_HREF}"><span><i class="lni lni-cog"></i></span>&nbsp;{LAN=LAN_SETTINGS}</a>
					</li>
					<li class="nav-item">
						<a class="justify-content-start" role="button" href="{SIGNIN_PROFILE_HREF}"><span><i class="lni lni-user"></i></span>&nbsp;{LAN=LAN_LOGINMENU_13}</a>
					</li>
					<li class="divider"></li>
					{SIGNIN_ADMIN_HREF}
					<li class="nav-item"><a class="justify-content-start" href="{SIGNIN_LOGOUT_HREF}"><span><i class="lni lni-power-switch"></i></span>&nbsp;{LAN=LAN_LOGOUT}</a></li>
				</ul>
			</li>';