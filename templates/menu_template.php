<?php
if (!defined('e107_INIT'))
{
	exit;
}

#### Panel Template - Used by menu_class.php  for Custom Menu Content.
#### Additional control over image thumbnailing is possible via SETIMAGE e.g. {SETIMAGE: w=200&h=150&crop=1}

$MENU_TEMPLATE['default']['start'] 					= '<div class="cpage-menu {CMENUNAME}">';
$MENU_TEMPLATE['default']['body'] 					= '{CMENUBODY}';
$MENU_TEMPLATE['default']['end'] 					= '</div>';

$MENU_TEMPLATE['button']['start'] 					= '<div class="cpage-menu {CMENUNAME}">';
$MENU_TEMPLATE['button']['body'] 					= '<div>{CMENUBODY}</div>{CPAGEBUTTON}';
$MENU_TEMPLATE['button']['end'] 					= '</div>';

$MENU_TEMPLATE['buttom-image']['start'] 			= '<div class="cpage-menu {CMENUNAME}">{SETIMAGE: w=360}';
$MENU_TEMPLATE['buttom-image']['body'] 				= '<div>{CMENUIMAGE}</div>{CPAGEBUTTON}';
$MENU_TEMPLATE['buttom-image']['end'] 				= '</div>';

$MENU_TEMPLATE['image-only']['start'] 				= '<div class="cpage-menu {CMENUNAME}">{SETIMAGE: w=360}';
$MENU_TEMPLATE['image-only']['body'] 				= '{CMENUIMAGE}';
$MENU_TEMPLATE['image-only']['end'] 				= '</div>';

/*
    <div class="footer-logo">
                            {SITELOGO: w=400}
                        </div>
                        <p class="text">
                            {SITEDESCRIPTION}
                        </p>
                        */

$MENU_TEMPLATE['image-text-button']['start'] 		= '<div class="cpage-menu {CMENUNAME}">{SETIMAGE: w=0}';
$MENU_TEMPLATE['image-text-button']['body'] 		= ' <div class="footer-logo">{CMENUIMAGE}</div>
    <div class="text">{CMENUBODY}{CPAGEBUTTON}</div>';
$MENU_TEMPLATE['image-text-button']['end'] 			= '</div>';


$MENU_TEMPLATE['call-action-three']['start'] 		= '<!--====== CALL TO ACTION THREE PART START ======-->{SETIMAGE: w=0}<section class="call-action-area  call-action-three ">';
$MENU_TEMPLATE['call-action-three']['body'] 		= '
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-5 col-lg-6">
          <div class="call-action-content">
            <h2 class="action-title">
              {CMENUTITLE}
            </h2>
            <p class="text">{CMENUBODY}</p>
            <div class="action-btn rounded-buttons">
				{CPAGEBUTTON: class=btn primary-btn rounded-full}
            </div>
          </div>
          <!-- call action content -->
        </div>
        <div class="col-xl-5 col-lg-6 offset-xl-2">
          <div class="call-action-content">
            {CMENUIMAGE}
          </div>
          <!-- call action content -->
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
';
$MENU_TEMPLATE['call-action-three']['end'] 			= '</section><!--====== CALL TO ACTION THREE PART ENDS ======-->';


$MENU_TEMPLATE['about-eight']['start'] 		= '<!-- Start About Eight Area -->{SETIMAGE: w=0}<section id="about" class="about-us about-eight">';
$MENU_TEMPLATE['about-eight']['body'] 		= '  
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-12">
          <div class="content">
            <div class="icon">
              {CMENUICON}
            </div>
            <h3 class="fw-bold">
              {CMENUTITLE}
            </h3>
            <p>{CMENUBODY}</p>
            <div class="light-rounded-buttons">
              {CPAGEBUTTON: class=btn primary-btn-outline}
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="right">
            {CMENUIMAGE}
          </div>
        </div>
      </div>
    </div>
';
$MENU_TEMPLATE['about-eight']['end'] 		= '  </section>
  <!-- /End About Eight Area -->';


$MENU_TEMPLATE['client-logo-three']['start'] 		= '<!--====== CLIENT LOGO PART START ======-->{SETIMAGE: w=0}
<section class="client-logo-area client-logo-three">';
$MENU_TEMPLATE['client-logo-three']['body'] =
	' 
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-6">
          <div class="single-client text-center"> 
            {CPAGEFIELD: name=client-01}
          </div>
          <!-- single client -->
        </div>
        <div class="col-md-3 col-6">
          <div class="single-client text-center">
            {CPAGEFIELD: name=client-02}
          </div>
          <!-- single client -->
        </div>
        <div class="col-md-3 col-6">
          <div class="single-client text-center">
            {CPAGEFIELD: name=client-03}
          </div>
          <!-- single client -->
        </div>
        <div class="col-md-3 col-6">
          <div class="single-client text-center">
            {CPAGEFIELD: name=client-04}
          </div>
          <!-- single client -->
        </div>
      </div>
      <!-- row -->  
    </div>
    <!-- container -->
 ';
$MENU_TEMPLATE['client-logo-three']['end'] 			= ' </section><!--====== CLIENT LOGO PART ENDS ======-->';


$MENU_TEMPLATE['client-logo-two']['start'] 		= '<!--====== CLIENT LOGO PART START ======-->{SETIMAGE: w=0}

<section class="client-logo-area client-logo-two">
   <!--======  Start Section Title Two ======-->
   <div class="section-title-two">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="content">
                  <span> {CHAPTER_NAME} </span>
                  <h2 class="fw-bold">{CMENUTITLE}</h2>
                  {CMENUBODY}
               </div>
            </div>
         </div>
      </div>
      <!-- container -->
   </div>
   ';
$MENU_TEMPLATE['client-logo-two']['body'] =
	'
    <div class="container">
      <div class="row client-logos-two">
        <div class="col-md-3 col-6">
          <div class="single-client text-center "> 
            {CPAGEFIELD: name=client-01}
          </div>
          <!-- single client -->
        </div>
        <div class="col-md-3 col-6">
          <div class="single-client text-center">
            {CPAGEFIELD: name=client-02}
          </div>
          <!-- single client -->
        </div>
        <div class="col-md-3 col-6">
          <div class="single-client text-center">
            {CPAGEFIELD: name=client-03}
          </div>
          <!-- single client -->
        </div>
        <div class="col-md-3 col-6">
          <div class="single-client text-center">
            {CPAGEFIELD: name=client-04}
          </div>
          <!-- single client -->
        </div>
		<div class="col-md-3 col-6">
          <div class="single-client text-center">
            {CPAGEFIELD: name=client-05}
          </div>
          <!-- single client -->
        </div>
		<div class="col-md-3 col-6">
          <div class="single-client text-center">
            {CPAGEFIELD: name=client-06}
          </div>
          <!-- single client -->
        </div>
      </div>
      <!-- row -->  
    </div>
    <!-- container -->
  ';
$MENU_TEMPLATE['client-logo-two']['end'] 			= '
</section>
<!--====== CLIENT LOGO PART ENDS ======-->';

$MENU_TEMPLATE['contact-us']['start'] 		= '<!-- Start Contact Area -->
  <section id="contact" class="contact-us">
    <!--======  Start Section Title Two ======-->
    <div class="section-title-two">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <span>{CHAPTER_NAME}</span>
              <h2 class="fw-bold">{CMENUTITLE}</h2>
              <p>{CMENUBODY} </p>
            </div>
          </div>
        </div>
      </div>
      <!-- container -->
    </div>';
$MENU_TEMPLATE['contact-us']['body'] 		= '
    <div class="container">
        <div class="contact-head">
            <div class="inner-content">
                <div class="row">
                    <div class="col-lg-8 col-12">
					    {MENU: path=contact/contact&layout=default}
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="contact-info">
                            <div class="single-head">
                                <div class="single-info">
                                    <i class="lni lni-map-marker"></i>
                                    <ul>
                                        <li><span>Location</span></li>
                                        <li>{CONTACT_INFO: type=address}</li>
                                    </ul>
                                </div>
                                <div class="single-info">
                                    <i class="lni lni-phone"></i>
                                    <ul>
                                        <li><span>Call Us</span></li>
                                        <li>{CONTACT_INFO: type=phone1}</li>
                                        <li>{CONTACT_INFO: type=phone2}</li>
                                    </ul>
                                </div>
                                <div class="single-info">
                                    <i class="lni lni-envelope"></i>
                                    <ul>
                                        <li><span>Mail Us</span></li>
                                        <li>
                                            {CONTACT_INFO: type=email1}
                                        </li>
                                        <li>
                                            {CONTACT_INFO: type=email2}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> ';
$MENU_TEMPLATE['contact-us']['end'] 			= '</section><!--/ End Contact Area -->';


 
$MENU_TEMPLATE['features-twelve']['start'] 		= '
  <!-- Start Features Area -->
  <section id="features" class="features-area features-twelve">
    <!--======  Start Section Title Two ======-->
    <div class="section-title-two">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <span>{CHAPTER_NAME}</span>
              <h2 class="fw-bold">{CMENUTITLE}</h2>
              <p>
                {CMENUBODY}
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- container -->
    </div>
    <!--====== End Section Title Two ======-->
    <div class="container">
      <div class="row">
   ';
$MENU_TEMPLATE['features-twelve']['body'] =
'<div class="col-lg-3 col-md-6 col-12">
	     <!-- Start Single Feature -->
          <div class="features-style-twelve">
            <div class="feature-icon">
              {CPAGEFIELD: name=feature-01-icon}
            </div>
            <h4>{CPAGEFIELD: name=feature-01-title}</h4>
            <p>{CPAGEFIELD: name=feature-01-text}</p>
          </div>
          <!-- End Single Feature -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Feature -->
          <div class="features-style-twelve">
            <div class="feature-icon">
              <i class="lni lni-wechat"></i>{CPAGEFIELD: name=feature-02-icon}
            </div>
            <h4>{CPAGEFIELD: name=feature-02-title}</h4>
            {CPAGEFIELD: name=feature-01-text}
          </div>
          <!-- End Single Feature -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Feature -->
          <div class="features-style-twelve">
            <div class="feature-icon">
              <i class="lni lni-layers"></i>{CPAGEFIELD: name=feature-03-icon}
            </div>
            <h4>{CPAGEFIELD: name=feature-03-title}</h4>
            {CPAGEFIELD: name=feature-01-text}
          </div>
          <!-- End Single Feature -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Feature -->
          <div class="features-style-twelve">
            <div class="feature-icon">
              <i class="lni lni-timer"></i>{CPAGEFIELD: name=feature-04-icon}
            </div>
            <h4>{CPAGEFIELD: name=feature-04-title}</h4>
            {CPAGEFIELD: name=feature-01-text}
          </div>
          <!-- End Single Feature -->
        </div>
  ';
$MENU_TEMPLATE['features-twelve']['end'] 			= '
      </div>
      <!-- row -->  
    </div>
    <!-- container -->
</section>
 <!-- /End Features Area -->';



$MENU_TEMPLATE['services-seven']['start'] 		= '
  <!-- Start Services Area -->
  <section id="services" class="services-area services-seven">
    <!--======  Start Section Title Three ======-->
    <div class="section-title-three">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h5>{CHAPTER_NAME}</h5>
              <h2 class="fw-bold">{CMENUTITLE}</h2>
              <p>{CMENUBODY}
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- container -->
    </div>
    <!--====== End Section Title Three ======-->
    <div class="container">
      <div class="single-head">
        <div class="row">
   ';
$MENU_TEMPLATE['services-seven']['body'] =
'
<div class="col-lg-4 col-md-6 col-12">
	<div class="single-service">
		<span class="serial">01</span>
		<h4>{CPAGEFIELD: name=service-01-title}</h4>
		<p>{CPAGEFIELD: name=service-01-text}</p>
		<div class="light-rounded-buttons">
		<a href="{CPAGEFIELD: name=service-01-url}" class="btn primary-btn"> Read More </a>
		</div>
	</div>
</div>
<div class="col-lg-4 col-md-6 col-12">
	<div class="single-service">
		<span class="serial">02</span>
		<h4>{CPAGEFIELD: name=service-02-title}</h4>
		<p>{CPAGEFIELD: name=service-02-text}</p>
		<div class="light-rounded-buttons">
		<a href="{CPAGEFIELD: name=service-02-url}" class="btn primary-btn"> Read More </a>
		</div>
	</div>
</div>
<div class="col-lg-4 col-md-6 col-12">
	<div class="single-service">
		<span class="serial">03</span>
		<h4>{CPAGEFIELD: name=service-03-title}</h4>
		<p>{CPAGEFIELD: name=service-03-text}</p>
		<div class="light-rounded-buttons">
		<a href="{CPAGEFIELD: name=service-03-url}" class="btn primary-btn"> Read More </a>
		</div>
	</div>
</div>		  
	 
  ';
$MENU_TEMPLATE['services-seven']['end'] 			= '
</div>
      </div>
      <!-- row -->  
    </div>
    <!-- container -->
</section>
 <!-- /End Features Area -->';


$MENU_TEMPLATE['video-one']['start'] 		= '<!--====== VIDEO ONE PART START ======--><section class="video-area video-one">';
$MENU_TEMPLATE['video-one']['body'] 		= '
   <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="video-title text-center">
            <h5>{CHAPTER_NAME}</h5>
            <h2>{CMENUTITLE}</h2>
            <p class="text-lg">
              {CMENUBODY}
            </p>
          </div>
          <!-- video title -->
        </div>
      </div>
      <!-- row -->
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="video-content text-center">
            {CMENUIMAGE}
            <a class="video-popup glightbox" href="{CMENUURL}https://www.youtube.com/watch?v=NJbXptdalP0">
              {CMENUICON}
            </a>
          </div>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
';
$MENU_TEMPLATE['video-one']['end'] 			= '</section><!--====== VIDEO ONE PART ENDS ======-->';