<?php

// Do not use constants.. use {LAN=xxx} instead.
// Template compatible with Bootstrap 5 only.

$SIGNIN_TEMPLATE = [];

$SIGNIN_WRAPPER['signin']['SIGNIN_SIGNUP_HREF'] = '<li class="nav-item"><a class="nav-link" href="{---}">{LAN=LAN_LOGINMENU_3}</a></li>';
$SIGNIN_WRAPPER['signin']['SIGNIN_RESEND_HREF'] = '<a href="{---}" class="nav-link btn btn-default btn-secondary btn-sm  btn-block">{LAN=LAN_LOGINMENU_40}</a>';

$SIGNIN_TEMPLATE['signin'] = '
			 
				{SIGNIN_SIGNUP_HREF}
				<li class="divider-vertical"></li>
				<li class="nav-item signout dropdown">
				<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" data-toggle="dropdown">{LAN=LAN_LOGINMENU_51} <strong class="caret"></strong></a>
					<div class="dropdown-menu" style="min-width:250px; padding: 15px; padding-bottom: 0px;">
					
					{SIGNIN_FORM=start}
					<p>{SIGNIN_INPUT_USERNAME}</p>
					<p>{SIGNIN_INPUT_PASSWORD}</p>
	
					<div class="form-group"></div>
					{SIGNIN_IMAGECODE_NUMBER}
					{SIGNIN_IMAGECODE_BOX}
					
					<div class="checkbox my-2">		
					<label class="string optional" for="bs3-autologin"><input style="margin-right: 10px;" type="checkbox" name="autologin" id="bs3-autologin" value="1">
					{LAN=LAN_LOGINMENU_6}</label>
					</div>
					<div class="d-grid gap-2" style="padding-bottom:15px">
					<input class="btn btn-primary btn-block" type="submit" name="userlogin" id="bs3-userlogin" value="{LAN=LAN_LOGINMENU_51}">			
					<a href="{SIGNIN_FPW_HREF}" class="nav-link btn btn-default btn-secondary">{LAN=LAN_LOGINMENU_4}</a>
					{SIGNIN_RESEND_HREF}
					</div>
					{SIGNIN_FORM=end}
					</div>
				
				</li>
 ';

$SIGNIN_WRAPPER['signout']['SIGNIN_ADMIN_HREF'] = '<li class="nav-item"><a class="justify-content-start signin-sc admin" id="signin-sc-admin" href="{---}"><span><i class="lni lni-cogs"></i></span>&nbsp;{LAN=LAN_LOGINMENU_11}</a></li>';
$SIGNIN_WRAPPER['signout']['SIGNIN_PM_NAV'] = '<li class="nav-item dropdown dropdown-pm">{---}</li>';


$SIGNIN_TEMPLATE['signout'] = '

		
			{SIGNIN_PM_NAV}
            <li class="nav-item signin">
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
			</li>
		</ul>
		
		';
