<?php
// $Id$


if (!defined('e107_INIT')) { exit; }


$FPW_TEMPLATE['form'] = '
<div class="signin-form form-style-two rounded-buttons">
	<div class="row">
		<div class="col-md-12">
		<div class="form-input">
			<label>{FPW_TEXT}</label>
			<div class="input-items default">
			 
			 
			{FPW_USEREMAIL}<i class="lni lni-envelope"></i>
			</div>
		</div>

		<!-- form input -->
		</div>
		<div class="col-md-6">
		<div class="form-input rounded-buttons">
			{FPW_SUBMIT: class=btn primary-btn rounded-full} 
		</div>
		<!-- form input -->
	  </div>
	  <div class="col-md-6">
		 
	  </div>
	</div>
</div>  

 	
						 
				 
					';

$FPW_TEMPLATE['header'] = '<div id="fpw-page" class="container">';
$FPW_TEMPLATE['footer'] = '</div>';






