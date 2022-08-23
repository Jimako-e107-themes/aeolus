<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2016 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Contact Template
 */
// $Id$

if (!defined('e107_INIT'))
{
	exit;
}

$CONTACT_WRAPPER['info']['CONTACT_INFO'] = "<div>{---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=organization'] = "<h4>{---}</h4>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=message'] = "<p>{---}</p>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=address'] = "<address>{GLYPH=fa-map-marker} {---}</address>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=email1'] = "<div>{GLYPH=fa-envelope} {---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=email2'] = "<div>{GLYPH=fa-envelope} {---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=phone1'] = "<div>{GLYPH=fas-phone} {---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=phone2'] = "<div>{GLYPH=fas-phone} {---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=phone3'] = "<div>{GLYPH=fas-phone} {---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=fax'] = "<div>{GLYPH=fa-fax} {---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=hours'] = "<div>{GLYPH=fa-clock} {---}</div>";

$CONTACT_TEMPLATE['info'] =
'

      <div class="row">
         <div class="col-lg-12">
            <div class="contact-map-four">
               {CONTACT_MAP: zoom=city}
            </div>
            <!-- row -->
         </div>
      </div>
      <!-- row -->
      <div class="contact-info-four">
         <div class="row">
            <div class="col-lg-4 col-md-6">
               <div class="single-contact-info contact-color-1 d-flex">
                  <div class="contact-info-icon">
                     <i class="lni lni-map-marker"></i>
                  </div>
                  <div class="contact-info-content media-body">
                     <p class="text">
                        {CONTACT_INFO: type=address}
                     </p>
                  </div>
               </div>
               <!-- single contact info -->
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="single-contact-info contact-color-2 d-flex">
                  <div class="contact-info-icon">
                     <i class="lni lni-envelope"></i>
                  </div>
                  <div class="contact-info-content media-body">
                     <p class="text">{CONTACT_INFO: type=email1}</p>
                     <p class="text">{CONTACT_INFO: type=email2}</p>
                  </div>
               </div>
               <!-- single contact info -->
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="single-contact-info contact-color-3 d-flex">
                  <div class="contact-info-icon">
                     <i class="lni lni-phone"></i>
                  </div>
                  <div class="contact-info-content media-body">
                     <p class="text">{CONTACT_INFO: type=phone1}</p>
                     <p class="text">{CONTACT_INFO: type=phone2}</p>
                  </div>
               </div>
               <!-- single contact info -->
            </div>
         </div>
         <!-- row -->
      </div>
      <!-- contact info -->

  
           
' 
;

// Shortcode wrappers. not working in 2.3.1
$CONTACT_WRAPPER['menu']['CONTACT_IMAGECODE'] 			= '
<div class="col-lg-4 col-md-4 col-12"> 
    <div class="form-group mb-3">{CONTACT_IMAGECODE_LABEL}
         {---} 
    </div>
</div>
<div class="col-lg-8 col-md-8 col-12"> ';
$CONTACT_WRAPPER['menu']['CONTACT_IMAGECODE_INPUT'] 	=
'{---}
</div>';

// Shortcode wrappers. not working in 2.3.1
$CONTACT_WRAPPER['menu']['CONTACT_GDPR_CHECK'] 			= '
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
 
/* prepared version with wrappers */ 
$CONTACT_TEMPLATE['menu-default'] =  '
    <div class="form-main"> 
        <div class="row">                                    
            <div class="col-lg-6 col-md-6 col-12">                                        
                <div class="form-group">                                            
				{CONTACT_NAME: placeholder=Your Name}                                         
                </div>                                    
            </div>                                    
            <div class="col-lg-6 col-md-6 col-12">                                        
                <div class="form-group">                                            
				{CONTACT_SUBJECT: placeholder=Your Subject}                                         
                </div>                                    
            </div>                                    
            <div class="col-lg-6 col-md-6 col-12">                                        
                <div class="form-group">                                              
				{CONTACT_EMAIL: placeholder=Your Email}                                         
                </div>                                    
            </div>                                    
            <div class="col-lg-6 col-md-6 col-12">                                        
                <div class="form-group">                                            
                    <input name="phone" type="text" placeholder="Your Phone" 
					required="required" />                                        
                </div>                                    
            </div>                                    
            <div class="col-12">                                        
                <div class="form-group message">                                            
				{CONTACT_BODY: placeholder=Your Message}                                                                                    
                </div>                                    
            </div>    
			{CONTACT_GDPR_CHECK} 
			{CONTACT_IMAGECODE} 	
			{CONTACT_IMAGECODE_INPUT}       
			                  
            <div class="col-12">                                        
                <div class="form-group light-rounded-buttons">                                            
				{CONTACT_SUBMIT_BUTTON: class=btn primary-btn w-auto fw-bold}                                         
                </div>                                    
            </div>                                
        </div>                                          
    </div>         
 ';

/* no wrappers */ 
$CONTACT_TEMPLATE['menu'] =  '
    <div class="form-main"> 
        <div class="row">                                    
            <div class="col-lg-6 col-md-6 col-12">                                        
                <div class="form-group">                                            
				{CONTACT_NAME: placeholder=Your Name}                                         
                </div>                                    
            </div>                                    
            <div class="col-lg-6 col-md-6 col-12">                                        
                <div class="form-group">                                            
				{CONTACT_SUBJECT: placeholder=Your Subject}                                         
                </div>                                    
            </div>                                    
            <div class="col-lg-6 col-md-6 col-12">                                        
                <div class="form-group">                                              
				{CONTACT_EMAIL: placeholder=Your Email}                                         
                </div>                                    
            </div>                                    
            <div class="col-lg-6 col-md-6 col-12">                                        
                <div class="form-group">                                            
                    <input name="phone" type="text" placeholder="Your Phone" 
					required="required" />                                        
                </div>                                    
            </div>                                    
            <div class="col-12">                                        
                <div class="form-group message">                                            
				{CONTACT_BODY: placeholder=Your Message}                                                                                    
                </div>                                    
            </div>    
			 
            <div class="col-12"> 
    <div class="form-group mb-3">
        <label for="gdpr">{LAN=CONTACT_24}
        </label>
        <div class="checkbox">{CONTACT_GDPR_CHECK}{LAN=CONTACT_21}
            <div class="help-block">{CONTACT_GDPR_LINK}
            </div>
        </div>
    </div> 
</div>
<div class="col-lg-4 col-md-4 col-12"> 
    <div class="form-group mb-3">{CONTACT_IMAGECODE_LABEL}
         {CONTACT_IMAGECODE} 
    </div>
</div>
<div class="col-lg-8 col-md-8 col-12">
			 	
			{CONTACT_IMAGECODE_INPUT}       
</div>		                  
            <div class="col-12">                                        
                <div class="form-group light-rounded-buttons">                                            
				{CONTACT_SUBMIT_BUTTON: class=btn primary-btn w-auto fw-bold}                                         
                </div>                                    
            </div>                                
        </div>                                          
    </div>         
 ';

// Shortcode wrappers.
$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE'] 			= $CONTACT_WRAPPER['menu']['CONTACT_IMAGECODE'];
$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE_INPUT'] 	= $CONTACT_WRAPPER['menu']['CONTACT_IMAGECODE_INPUT'];
$CONTACT_WRAPPER['form']['CONTACT_GDPR_CHECK'] 			= $CONTACT_WRAPPER['menu']['CONTACT_GDPR_CHECK'];

$CONTACT_WRAPPER['form']['CONTACT_EMAIL_COPY'] 			= "<div class='control-group form-group'>{---}{LAN=CONTACT_07}</div>";
$CONTACT_WRAPPER['form']['CONTACT_PERSON']				= "<div class='control-group form-group'><label for='contactPerson'>{LAN=CONTACT_14}</label>{---}</div>";
 

$CONTACT_TEMPLATE['form'] = "
	<form action='" . e_SELF . "' method='post' id='contactForm' class='mt-5' >
	{CONTACT_PERSON} ".
$CONTACT_TEMPLATE['menu-default'] . "
	</form>";
 


// Set the layout and  order of the info and form.
$CONTACT_TEMPLATE['layout'] = '
<!--====== CONTACT FOUR PART START ======-->
<section class="contact-area contact-area-four">
   <div class="container">
		{---CONTACT-INFO---}
   </div>
   <!-- container -->
 

 
<div class="container contact-us">
      <div class="row">
         <div class="col-lg-12">
             
               <h4 class="contact-title">
                  <i class="lni lni-envelope"></i> Leave <span>A Message.</span>
               </h4>
							   {---CONTACT-FORM---} 
							      </div>
								   </div>
          
      </div>
      <!-- row -->
   <!-- container -->
</section><!--====== CONTACT FOUR PART ENDS ======-->
							   ';



// Customize the email subject
// Variables:  CONTACT_SUBJECT and CONTACT_PERSON as well as any custom fields set in the form. )
$CONTACT_TEMPLATE['email']['subject'] = "{CONTACT_SUBJECT}";