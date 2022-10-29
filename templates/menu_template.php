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
 
$MENU_WRAPPER['features-one']['CPAGEFIELD: name=item-01-url'] =
'<div class="features-btn rounded-buttons"><a class="btn btn-cmenu"  href="{---}">{LAN=READ_MORE}</a></div>';
$MENU_WRAPPER['features-one']['CPAGEFIELD: name=item-02-url'] =
'<div class="features-btn rounded-buttons"><a class="btn btn-cmenu"  href="{---}">{LAN=READ_MORE}</a></div>';
$MENU_WRAPPER['features-one']['CPAGEFIELD: name=item-02-url'] =
'<div class="features-btn rounded-buttons"><a class="btn btn-cmenu"  href="{---}">{LAN=READ_MORE}</a></div>';





$MENU_TEMPLATE['features-one']['start'] 		= '{SETSTYLE=none}
  <!-- Start Services Area -->
 <section class="features-area features-one">
    <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6">
            <div class="section-title text-center">
               <h3 class="title">{CMENUTITLE}</h3>
               <p class="text">
                  {CMENUBODY}
               </p>
            </div>
            <!-- row -->
         </div>
      </div>
      <!-- row -->
      <div class="row justify-content-center">';


$MENU_TEMPLATE['features-one']['body'] =
' <div class="col">
            <div class="features-style-one text-center h-100">
               <div class="features-icon">
                  {CPAGEFIELD: name=item-01-icon}
               </div>
               <div class="features-content">
                  <h4 class="features-title">{CPAGEFIELD: name=item-01-title}</h4>
                  <p class="text">
                     {CPAGEFIELD: name=item-01-summary}
                  </p>
                  {CPAGEFIELD: name=item-01-url}
               </div>
            </div>
            <!-- single features -->
         </div>
         <div class="col">
            <div class="features-style-one text-center h-100">
               <div class="features-icon">
                  {CPAGEFIELD: name=item-02-icon}
               </div>
               <div class="features-content">
                  <h4 class="features-title">{CPAGEFIELD: name=item-02-title}</h4>
                  <p class="text">
                     {CPAGEFIELD: name=item-02-summary}
                  </p>
                 {CPAGEFIELD: name=item-02-url}
               </div>
            </div>
            <!-- single features -->
         </div>  
         <div class="col">
            <div class="features-style-one text-center h-100">
               <div class="features-icon">
                  {CPAGEFIELD: name=item-03-icon}
               </div>
               <div class="features-content">
                  <h4 class="features-title">{CPAGEFIELD: name=item-03-title}</h4>
                  <p class="text">
                     {CPAGEFIELD: name=item-03-summary}
                  </p>
                  {CPAGEFIELD: name=item-03-url}
               </div>
            </div>
            <!-- single features -->
         </div>';

$MENU_TEMPLATE['features-one']['end'] 			= '
 
      </div>
      <!-- row -->  
    </div>
    <!-- container -->
</section>
 <!-- /End Features Area features-one -->';

$MENU_TEMPLATE['features-twelve']['start'] 		= '
  <!-- Start Features Area -->
  <section id="features" class="features-area features-twelve">
    <!--======  Start Section Title Two ======-->
    <div class="section-title-two">
      <div class="container">
        <div class="row">
          <div class="col">
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
'<div class="col">
  <!-- Start Single Feature -->
  <div class="features-style-twelve">
    <div class="feature-icon">
      {CPAGEFIELD: name=item-01-icon} 
    </div>
    <h4>{CPAGEFIELD: name=item-01-title} </h4>
    <p>{CPAGEFIELD: name=item-01-summary}</p>
  </div>
  <!-- End Single Feature -->
</div>
<div class="col">
  <!-- Start Single Feature -->
  <div class="features-style-twelve">
    <div class="feature-icon">
      {CPAGEFIELD: name=item-02-icon}
    </div>
    <h4>{CPAGEFIELD: name=item-02-title}</h4>
    {CPAGEFIELD: name=item-02-summary}
  </div>
  <!-- End Single Feature -->
</div>
<div class="col">
  <!-- Start Single Feature -->
  <div class="features-style-twelve">
    <div class="feature-icon">
    {CPAGEFIELD: name=item-03-icon}
    </div>
    <h4>{CPAGEFIELD: name=item-03-title}</h4>
    {CPAGEFIELD: name=item-03-summary}
  </div>
  <!-- End Single Feature -->
</div>
<div class="col">
  <!-- Start Single Feature -->
  <div class="features-style-twelve">
    <div class="feature-icon">
      {CPAGEFIELD: name=item-04-icon}
    </div>
    <h4>{CPAGEFIELD: name=item-04-title}</h4>
    {CPAGEFIELD: name=item-04-summary}
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
 <!-- /End Features Area features-twelve -->';


$MENU_TEMPLATE['call-action-three']['start'] 		= '<!--====== CALL TO ACTION THREE PART START ======-->{SETIMAGE: w=0}<section class="call-action-area  call-action-three ">';
$MENU_TEMPLATE['call-action-three']['body'] 		= '
    <div class="container">
      <div class="row align-items-center">
        <div class="col">
          <div class="call-action-content">
            <h2 class="action-title">
              {CMENUTITLE}
            </h2>
            <p class="text">{CMENUBODY}</p>
            <div class="action-btn rounded-buttons">
				{CPAGEBUTTON: class=btn btn-cmenu}
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
        <div class="col">
          <div class="content">
            <div class="icon">
              {CMENUICON}
            </div>
            <h3 class="fw-bold">
              {CMENUTITLE}
            </h3>
            <p>{CMENUBODY}</p>
            <div class="light-rounded-buttons">
              {CPAGEBUTTON: class=btn btn-cmenu-outline}
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
        <div class="col">
          <div class="single-client text-center"> 
            {CPAGEFIELD: name=client-01}
          </div>
          <!-- single client -->
        </div>
        <div class="col">
          <div class="single-client text-center">
            {CPAGEFIELD: name=client-02}
          </div>
          <!-- single client -->
        </div>
        <div class="col">
          <div class="single-client text-center">
            {CPAGEFIELD: name=client-03}
          </div>
          <!-- single client -->
        </div>
        <div class="col">
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
                  <span> {CPAGETITLE} </span>
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

$MENU_TEMPLATE['contact-us']['start'] 		= '<!-- Start Contact Area -->{SETSTYLE=none}
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
 
 
$MENU_TEMPLATE['features-thirteen']['start'] 		= '{SETSTYLE=none}
  <!-- Start Services Area -->
 <section class="features-area features-one">
    <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6">
            <div class="section-title text-center">
               <h3 class="title">{CMENUTITLE}</h3>
               <p class="text">
                  {CMENUBODY}
               </p>
            </div>
            <!-- row -->
         </div>
      </div>
      <!-- row -->
      <div class="row justify-content-center">';


$MENU_TEMPLATE['features-thirteen']['body'] =
	'
         <div class="col-lg-4 col-md-7 col-sm-9">
            <div class="features-style-one text-center">
               <div class="features-icon">
                  <i class="lni lni-compass"></i>
               </div>
               <div class="features-content">
                  <h4 class="features-title">{CPAGEFIELD: name=item-01-title}</h4>
                  <p class="text">
                     {CPAGEFIELD: name=item-01-summary}
                  </p>
                  <div class="features-btn rounded-buttons">
                     <a
                        class="btn btn-cmenu"
                        href="{CPAGEFIELD: name=item-01-url}"
                        >
                    {LAN=READ_MORE}
                     </a>
                  </div>
               </div>
            </div>
            <!-- single features -->
         </div>

         <div class="col-lg-4 col-md-7 col-sm-9">
            <div class="features-style-one text-center">
               <div class="features-icon">
                  <i class="lni lni-compass"></i>
               </div>
               <div class="features-content">
                  <h4 class="features-title">{CPAGEFIELD: name=item-02-title}</h4>
                  <p class="text">
                     {CPAGEFIELD: name=item-02-summary}
                  </p>
                  <div class="features-btn rounded-buttons">
                     <a
                        class="btn btn-cmenu"
                        href="{CPAGEFIELD: name=item-02-url}"
                        >
                    {LAN=READ_MORE}
                     </a>
                  </div>
               </div>
            </div>
            <!-- single features -->
         </div>
		 
		          <div class="col-lg-4 col-md-7 col-sm-9">
            <div class="features-style-one text-center">
               <div class="features-icon">
                  <i class="lni lni-compass"></i>
               </div>
               <div class="features-content">
                  <h4 class="features-title">{CPAGEFIELD: name=item-03-title}</h4>
                  <p class="text">
                     CPAGEFIELD: name=item-03-summary}
                  </p>
                  <div class="features-btn rounded-buttons">
                     <a
                        class="btn btn-cmenu"
                        href="{CPAGEFIELD: name=item-03-url}"
                        >
                    {LAN=READ_MORE}
                     </a>
                  </div>
               </div>
            </div>
            <!-- single features -->
         </div>

	 
  ';
$MENU_TEMPLATE['features-thirteen']['end'] 			= '
 
      </div>
      <!-- row -->  
    </div>
    <!-- container -->
</section>
 <!-- /End Features Area features-thirteen -->';



$MENU_TEMPLATE['services-seven']['start'] 		= '{SETSTYLE=none}
  <!-- Start Services Area -->
  <section id="services" class="services-area services-seven">
    <!--======  Start Section Title Three ======-->
    <div class="section-title-three">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h5>{CPAGETITLE}</h5>
              <h2 class="fw-bold">{CMENUTITLE}</h2>
              <p>{CMENUBODY}
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
<div class="col-lg-4 col-md-6 col-12 ">
	<div class="single-service h-100">
		<span class="serial">01</span>
		<h4>{CPAGEFIELD: name=item-01-title}</h4>
		<p>{CPAGEFIELD: name=item-01-summary}</p>
		<div class="light-rounded-buttons">
		<a href="{CPAGEFIELD: name=item-01-url}" class="btn primary-btn"> {LAN=READ_MORE} </a>
		</div>
	</div>
</div>
<div class="col-lg-4 col-md-6 col-12">
	<div class="single-service h-100">
		<span class="serial">02</span>
		<h4>{CPAGEFIELD: name=item-02-title}</h4>
		<p>{CPAGEFIELD: name=item-02-summary}</p>
		<div class="light-rounded-buttons">
		<a href="{CPAGEFIELD: name=item-02-url}" class="btn primary-btn"> {LAN=READ_MORE} </a>
		</div>
	</div>
</div>
<div class="col-lg-4 col-md-6 col-12">
	<div class="single-service h-100">
		<span class="serial">03</span>
		<h4>{CPAGEFIELD: name=item-03-title}</h4>
		<p>{CPAGEFIELD: name=item-03-summary}</p>
		<div class="light-rounded-buttons">
		<a href="{CPAGEFIELD: name=item-03-url}" class="btn primary-btn"> {LAN=READ_MORE} </a>
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
 <!-- /End Features Area services-seven -->';


$MENU_TEMPLATE['video-one']['start'] 		= '<!--====== VIDEO ONE PART START ======--><section class="video-area video-one">';
$MENU_TEMPLATE['video-one']['body'] 		= '
   <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="video-title text-center">
            <h5>{CPAGETITLE}</h5>
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
            <a class="video-popup glightbox" href="{CMENUURL}">
              {CMENUICON}
            </a>
          </div>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
';
$MENU_TEMPLATE['video-one']['end'] 			= '</section><!--====== VIDEO ONE PART ENDS ======-->
<script>
$( document ).ready(function() {
      //========= glightbox
      const videoOne = GLightbox({
        selector: ".glightbox",
        type: "video",
        source: "youtube", //vimeo, youtube or local
        width: 900,
        autoplayVideos: true,
      });
}); 
 </script>

';


$MENU_TEMPLATE['video-two']['start'] 		= '<!--====== VIDEO TWO PART START ======-->
<section class="video-area video-two">';
$MENU_TEMPLATE['video-two']['body'] 		= '
<div class="container">
      <div class="row">
        <div class="col-12">
          <div class="inner-content-head">
            <div class="inner-content">
              <span class="shape2">
                <svg viewBox="0 0 22 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M18.7 4.60019C17.8 4.60019 17.2 3.90019 17.1 3.10019C17 2.30019 17.8 1.60019 18.6 1.50019C19.4 1.40019 20.1 2.20019 20.2 3.00019C20.2 3.90019 19.5 4.60019 18.7 4.60019ZM18.7 12.8002C17.8 12.8002 17.2 12.1002 17.1 11.3002C17 10.5002 17.8 9.80019 18.6 9.70019C19.4 9.60019 20.1 10.4002 20.2 11.2002C20.2 12.1002 19.5 12.8002 18.7 12.8002ZM18.7 21.1002C17.8 21.1002 17.2 20.4002 17.1 19.6002C17 18.8002 17.8 18.1002 18.6 18.0002C19.4 17.9002 20.1 18.7002 20.2 19.5002C20.2 20.4002 19.5 21.0002 18.7 21.1002ZM18.7 29.3002C17.8 29.3002 17.2 28.6002 17.1 27.8002C17 27.0002 17.8 26.3002 18.6 26.2002C19.4 26.1002 20.1 26.9002 20.2 27.7002C20.2 28.6002 19.5 29.3002 18.7 29.3002ZM18.7 37.5002C17.8 37.5002 17.2 36.8002 17.1 36.0002C17 35.2002 17.8 34.5002 18.6 34.4002C19.4 34.3002 20.1 35.1002 20.2 35.9002C20.2 36.8002 19.5 37.5002 18.7 37.5002ZM10.7 4.60019C9.79995 4.60019 9.19995 3.90019 9.19995 3.10019C9.19995 2.30019 9.89995 1.60019 10.7 1.60019C11.6 1.60019 12.2 2.30019 12.2 3.10019C12.2 3.90019 11.6 4.60019 10.7 4.60019ZM10.7 12.8002C9.79995 12.8002 9.19995 12.1002 9.19995 11.3002C9.19995 10.5002 9.89995 9.80019 10.7 9.80019C11.6 9.80019 12.2 10.5002 12.2 11.3002C12.2 12.1002 11.6 12.8002 10.7 12.8002ZM10.7 21.0002C9.79995 21.0002 9.19995 20.3002 9.19995 19.5002C9.19995 18.7002 9.79995 18.0002 10.7 18.0002C11.6 18.0002 12.2 18.7002 12.2 19.5002C12.2 20.4002 11.6 21.0002 10.7 21.0002C10.7 21.1002 10.7 21.1002 10.7 21.0002ZM10.7 29.3002C9.79995 29.3002 9.19995 28.6002 9.19995 27.8002C9.19995 27.0002 9.89995 26.3002 10.7 26.3002C11.6 26.3002 12.2 27.0002 12.2 27.8002C12.2 28.6002 11.6 29.3002 10.7 29.3002ZM10.7 37.5002C9.79995 37.5002 9.19995 36.8002 9.19995 36.0002C9.19995 35.2002 9.89995 34.5002 10.7 34.5002C11.6 34.5002 12.2 35.2002 12.2 36.0002C12.2 36.8002 11.6 37.5002 10.7 37.5002ZM2.69995 4.60019C1.79995 4.60019 1.19995 3.90019 1.19995 3.10019C1.19995 2.30019 1.89995 1.60019 2.69995 1.60019C3.59995 1.60019 4.19995 2.30019 4.19995 3.10019C4.29995 3.90019 3.59995 4.60019 2.69995 4.60019ZM2.69995 12.8002C1.79995 12.8002 1.19995 12.1002 1.19995 11.3002C1.19995 10.5002 1.89995 9.80019 2.69995 9.80019C3.59995 9.80019 4.19995 10.5002 4.19995 11.3002C4.29995 12.1002 3.59995 12.8002 2.69995 12.8002ZM2.69995 21.0002C1.79995 21.0002 1.19995 20.3002 1.19995 19.5002C1.19995 18.7002 1.89995 18.0002 2.69995 18.0002C3.59995 18.0002 4.19995 18.7002 4.19995 19.5002C4.29995 20.4002 3.59995 21.0002 2.69995 21.0002C2.69995 21.1002 2.69995 21.1002 2.69995 21.0002ZM2.69995 29.3002C1.79995 29.3002 1.19995 28.6002 1.19995 27.8002C1.19995 27.0002 1.89995 26.3002 2.69995 26.3002C3.59995 26.3002 4.19995 27.0002 4.19995 27.8002C4.29995 28.6002 3.59995 29.3002 2.69995 29.3002ZM2.69995 37.5002C1.79995 37.5002 1.19995 36.8002 1.19995 36.0002C1.19995 35.2002 1.89995 34.5002 2.69995 34.5002C3.59995 34.5002 4.19995 35.2002 4.19995 36.0002C4.29995 36.8002 3.59995 37.5002 2.69995 37.5002ZM18.7 45.6002C17.8 45.6002 17.2 44.9002 17.1 44.1002C17 43.3002 17.8 42.6002 18.6 42.5002C19.4 42.4002 20.1 43.2002 20.2 44.0002C20.2 44.9002 19.5 45.6002 18.7 45.6002ZM18.7 53.8002C17.8 53.8002 17.2 53.1002 17.1 52.3002C17 51.5002 17.8 50.8002 18.6 50.7002C19.4 50.6002 20.1 51.4002 20.2 52.2002C20.2 53.2002 19.5 53.8002 18.7 53.8002C18.7 53.9002 18.7 53.9002 18.7 53.8002ZM18.7 62.1002C17.8 62.1002 17.2 61.4002 17.1 60.6002C17 59.8002 17.8 59.1002 18.6 59.0002C19.4 58.9002 20.1 59.7002 20.2 60.5002C20.2 61.4002 19.5 62.1002 18.7 62.1002ZM18.7 70.3002C17.8 70.3002 17.2 69.6002 17.1 68.8002C17 68.0002 17.8 67.3002 18.6 67.2002C19.4 67.1002 20.1 67.9002 20.2 68.7002C20.2 69.6002 19.5 70.3002 18.7 70.3002ZM18.7 78.5002C17.8 78.5002 17.2 77.8002 17.1 77.0002C17 76.2002 17.8 75.5002 18.6 75.4002C19.4 75.3002 20.1 76.1002 20.2 76.9002C20.2 77.8002 19.5 78.5002 18.7 78.5002ZM10.7 45.6002C9.79995 45.6002 9.19995 44.9002 9.19995 44.1002C9.19995 43.3002 9.89995 42.6002 10.7 42.6002C11.6 42.6002 12.2 43.3002 12.2 44.1002C12.2 44.9002 11.6 45.6002 10.7 45.6002ZM10.7 53.8002C9.79995 53.8002 9.19995 53.1002 9.19995 52.3002C9.19995 51.5002 9.89995 50.8002 10.7 50.8002C11.6 50.8002 12.2 51.5002 12.2 52.3002C12.2 53.2002 11.6 53.8002 10.7 53.8002C10.7 53.9002 10.7 53.9002 10.7 53.8002ZM10.7 62.1002C9.79995 62.1002 9.19995 61.4002 9.19995 60.6002C9.19995 59.8002 9.79995 59.0002 10.7 59.0002C11.6 59.0002 12.2 59.7002 12.2 60.5002C12.2 61.4002 11.6 62.1002 10.7 62.1002ZM10.7 70.3002C9.79995 70.3002 9.19995 69.6002 9.19995 68.8002C9.19995 68.0002 9.89995 67.3002 10.7 67.3002C11.6 67.3002 12.2 68.0002 12.2 68.8002C12.2 69.6002 11.6 70.3002 10.7 70.3002ZM10.7 78.5002C9.79995 78.5002 9.19995 77.8002 9.19995 77.0002C9.19995 76.2002 9.89995 75.5002 10.7 75.5002C11.6 75.5002 12.2 76.2002 12.2 77.0002C12.2 77.8002 11.6 78.5002 10.7 78.5002ZM2.69995 45.6002C1.79995 45.6002 1.19995 44.9002 1.19995 44.1002C1.19995 43.3002 1.89995 42.6002 2.69995 42.6002C3.59995 42.6002 4.19995 43.3002 4.19995 44.1002C4.29995 44.9002 3.59995 45.6002 2.69995 45.6002ZM2.69995 53.8002C1.79995 53.8002 1.19995 53.1002 1.19995 52.3002C1.19995 51.5002 1.89995 50.8002 2.69995 50.8002C3.59995 50.8002 4.19995 51.5002 4.19995 52.3002C4.29995 53.2002 3.59995 53.8002 2.69995 53.8002C2.69995 53.9002 2.69995 53.9002 2.69995 53.8002ZM2.69995 62.1002C1.79995 62.1002 1.19995 61.4002 1.19995 60.6002C1.19995 59.8002 1.89995 59.0002 2.69995 59.0002C3.59995 59.0002 4.19995 59.7002 4.19995 60.5002C4.29995 61.4002 3.59995 62.1002 2.69995 62.1002ZM2.69995 70.3002C1.79995 70.3002 1.19995 69.6002 1.19995 68.8002C1.19995 68.0002 1.89995 67.3002 2.69995 67.3002C3.59995 67.3002 4.19995 68.0002 4.19995 68.8002C4.29995 69.6002 3.59995 70.3002 2.69995 70.3002ZM2.69995 78.5002C1.79995 78.5002 1.19995 77.8002 1.19995 77.0002C1.19995 76.2002 1.89995 75.5002 2.69995 75.5002C3.59995 75.5002 4.19995 76.2002 4.19995 77.0002C4.29995 77.8002 3.59995 78.5002 2.69995 78.5002Z"
                    fill="#155BD5" />
                </svg>
              </span>
              <span class="shape1">
                <svg viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M24.2001 1C11.1001 1 0.600098 11.6 0.600098 24.6C0.600098 37.6 11.2001 48.2 24.2001 48.2C37.2001 48.2 47.8001 37.6 47.8001 24.6C47.8001 11.6 37.2001 1 24.2001 1ZM24.2001 40C15.7001 40 8.8001 33.1 8.8001 24.6C8.8001 16.1 15.7001 9.2 24.2001 9.2C32.7001 9.2 39.6001 16.1 39.6001 24.6C39.6001 33.1 32.7001 40 24.2001 40Z"
                    fill="#155BD5" />
                </svg>
              </span>
              <div class="section-title">
                <span class="wow zoomIn" data-wow-delay=".2s">{CPAGETITLE}</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">{CMENUTITLE}</h2>
                <p class="wow fadeInUp" data-wow-delay=".6s">{CMENUBODY}</p>
              </div>
              <div class="intro-video-play">
                <div class="play-thumb wow zoomIn" data-wow-delay=".2s">
                  <a href="{CMENUURL}"
                    class="glightbox video"><i class="lni lni-play"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
';
$MENU_TEMPLATE['video-two']['end'] 			= '</section><!--====== VIDEO ONE PART ENDS ======-->
<script>
$( document ).ready(function() {
      //========= glightbox
      const videoTwo = GLightbox({
        selector: ".glightbox",
        type: "video",
        source: "youtube", //vimeo, youtube or local
        width: 900,
        autoplayVideos: true,
      });
}); 
 </script>
 
';