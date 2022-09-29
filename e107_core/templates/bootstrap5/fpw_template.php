<?php
// $Id$


if (!defined('e107_INIT')) { exit; }


$FPW_TEMPLATE['form'] = '
					<div class="row">
						<div class="col-md-12">
						<div class="form-text">{FPW_TEXT}</p>
		 
<div class="row g-3 my-3 align-items-center">
{FPW_USEREMAIL}
</div>						 
<div class="row g-3 my-3 align-items-center">
{FPW_CAPTCHA_IMG}{FPW_CAPTCHA_INPUT}
</div>
<div class="row g-3 my-3 align-items-center  w-50 m-auto">
							{FPW_SUBMIT}
						</div>	
						</div>
					</div>
					';

$FPW_TEMPLATE['header'] = '<div id="fpw-page" class="container">';
$FPW_TEMPLATE['footer'] = '</div>';






