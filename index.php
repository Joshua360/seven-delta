<?php require_once( 'admin/cms.php' ); ?>

<cms:template title='Landing'> 
    <cms:editable name='landing_page' label="Landing Page Images" type='image'/>
</cms:template>  



<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="KonsultPlus | Business Consulting & Corporate Finance HTML5 Template" />
<meta name="keywords" content="advisor,corporate,business,accountant,consulting,finance,financial,insurance,trading" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Seven Delta Consulting Ltd | Business Consulting & Corporate Technology</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
 <link href="css/style.css" rel="stylesheet" type="text/css"> 

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<!-- <link href="css/colors/theme-skin-color-set2.css" rel="stylesheet" type="text/css"> -->
<link href="css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">

  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>



  <!-- Header -->
  <header id="header" class="header modern-header modern-header-theme-colored">
    <div class="header-middle p-0 bg-light xs-text-center">
      <div class="container pt-30 pb-30">
        <div class="row" class="header-shadow" >

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget sm-text-center">
              <i class="fa fa-envelope text-theme-colored2 font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
              <a href="#" class="font-12 text-gray text-uppercase">E-mail Us Today</a>
              <h5 class="font-13 text-black m-0"> info@seven-delta.com</h5>
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-5">
            <div class="widget text-center">
              <a class="" href="<cms:link 'homepage.php' />"><img src="images/logo-delta.png"></a>
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="widget sm-text-center">
              <i class="fa fa-building-o text-theme-colored2 font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
              <a href="#" class="font-12 text-gray text-uppercase">Company Location</a>
              <h5 class="font-13 text-black m-0"> The Greenhouse, Ngong Road <br>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nairobi, KENYA</h5>
            </div>
          </div>

          
        </div>
      </div>
    </div>

    
  </header>
  
  <!-- Start main-content -->
  <div class="main-content"> 

    <!-- Section: home -->
    <section id="home" class="divider">
      <div class="container-fluid p-0">

        <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
          <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/content/Njerit3.jpg" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="images/content/Njerit3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-1-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-2" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
                  data-y="['top','top','top','top']" data-voffset="['50','50','30','30']" 
                  data-fontsize="['56','46','40','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;"><span class="text-theme-color-2">Take the World's Premier </span>  <span class="text-theme-colored2">Digital Finance </span><span class="text-theme-color-2">Consulting</span> Firm...
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-3" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
                  data-y="['top','top','top','top']" data-voffset="['280','220','180','180']" 
                  data-fontsize="['18','18','16','13']"
                  data-lineheight="['30','30','28','25']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['800','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;"><i>Seven Delta</i> responds to the unique sensitivities and needs of developing countries <br> using local talent to resolve financial inclusion challenges in Africa, Asia and the Pacific.
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-1-layer-4" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                </div>
              </li>

              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/content/Story of DFS and convergent payment mechanisms.jpg" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="images/content/Story of DFS and convergent payment mechanisms.jpg" alt="" data-bgposition="top 60%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-2-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-2" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
                  data-y="['top','top','top','top']" data-voffset="['120','100','70','90']" 
                  data-fontsize="['28','24','24','24']"
                  data-lineheight="['33','30','30','30']"
                  data-fontweight="['600','600','600','600']"
                  data-textalign="['left','left','left','left']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;">Financial Services Ecosystem
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-3" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
                  data-y="['top','top','top','top']" data-voffset="['165','135','105','130']" 
                  data-fontsize="['56','46','40','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['left','left','left','left']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;"> Global Experts <br> in <span class="text-theme-colored2">Local Solutions.</span>
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-4" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
                  data-y="['top','top','top','top']" data-voffset="['320','260','220','220']" 
                  data-fontsize="['18','18','16','13']"
                  data-lineheight="['30','30','28','25']"
                  data-fontweight="['600','600','600','600']"
                  data-textalign="['left','left','left','left']"
                  data-width="['800','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;"> Multinational practitioners with experience providing end-to-end financial services solutions <br> for the un(der)banked in more than a dozen countries. 
                </div>


                <!-- LAYER NR. 5 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-2-layer-5" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
                  data-y="['top','top','top','top']" data-voffset="['400','340','300','300']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="1000" 

                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                </div>
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/content/20190823_113108.jpg" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="images/content/20190823_113108.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-3-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-2" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
                  data-y="['top','top','top','top']" data-voffset="['120','100','70','90']" 
                  data-fontsize="['56','46','40','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">We Build <span class="text-theme-colored2">Sustainable </span> User-Centred  Solutions. 
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-3" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
                  data-y="['top','top','top','top']" data-voffset="['280','220','180','180']" 
                  data-fontsize="['18','18','16','13']"
                  data-lineheight="['30','30','28','25']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;">Balancing the risk exposure to financial service providers, <br> with solutions that uphold the dignity of end-users.
    

                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-3" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" 
                  data-fontsize="['18','18','16','16']"
                  data-lineheight="['30','30','30','30']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;">
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-3-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['310','33','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" 
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                </div>
              </li>



          <!-- SLIDE 4 -->
              <li data-index="rs-4" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/content/20180928_155644.jpg" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="images/content/20180928_155644.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-4-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-4-layer-2" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
                  data-y="['top','top','top','top']" data-voffset="['120','100','70','90']" 
                  data-fontsize="['56','46','40','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">From <span class="text-theme-colored2">Africa's </span> Silicon Savannah...   
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-4-layer-3" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
                  data-y="['top','top','top','top']" data-voffset="['280','220','180','180']" 
                  data-fontsize="['18','18','16','13']"
                  data-lineheight="['30','30','28','25']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;font-weight: bolder;">Thought leadership and pioneering ground-level solutions <br> that have changed the way the world thinks and acts around financial inclusion.
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-4-layer-3" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" 
                  data-fontsize="['18','18','16','16']"
                  data-lineheight="['30','30','30','30']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;">
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-4-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['310','33','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" 
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                </div>
              </li>

               <!-- SLIDE 5 -->
              <li data-index="rs-5" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/content/Solomon Islands9.jpg" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="images/content/Solomon Islands9.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-5-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-5-layer-2" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
                  data-y="['top','top','top','top']" data-voffset="['120','100','70','90']" 
                  data-fontsize="['56','46','40','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">...to  <span class="text-theme-colored2">Asia </span> and <br> <span class="text-theme-colored2">the Pacifics</span>.   
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-5-layer-3" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
                  data-y="['top','top','top','top']" data-voffset="['280','220','180','180']" 
                  data-fontsize="['18','18','16','13']"
                  data-lineheight="['30','30','28','25']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap; font-weight: bolder;">With projects focused on insights, capacity building and management advisory; <br> ranging from technology and product design to strategic operations.
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-5-layer-3" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" 
                  data-fontsize="['18','18','16','16']"
                  data-lineheight="['30','30','30','30']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;">
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-5-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['310','33','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" 
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                </div>
              </li>



            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div>
          </div>
        </div>

        <!-- END REVOLUTION SLIDER -->
        <script type="text/javascript">
          var tpj=jQuery;         
          var revapi34;
          tpj(document).ready(function() {
            if(tpj("#rev_slider_home").revolution == undefined){
              revslider_showDoubleJqueryError("#rev_slider_home");
            }else{
              revapi34 = tpj("#rev_slider_home").show().revolution({
                sliderType:"standard",
                jsFileLocation:"js/revolution-slider/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                  keyboardNavigation:"on",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation:"off",
                  onHoverStop:"on",
                  touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                  }
                  ,
                  arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  },
                  bullets: {
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"metis",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:'<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                  }
                },
                viewPort: {
                  enable:true,
                  outof:"pause",
                  visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[600,550,500,450],
                lazyType:"none",
                parallax: {
                  type:"scroll",
                  origo:"enterpoint",
                  speed:400,
                  levels:[5,10,15,20,25,30,35,40,45,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  nextSlideOnWindowFocus:"off",
                  disableFocusListener:false,
                }
              });
            }
          }); /*ready*/
        </script>
      <!-- END REVOLUTION SLIDER -->
      </div>
    </section>

   

  <!-- end main-content -->
  </div>

  <!-- Footer -->
  <footer id="footer" class="footer" data-bg-img="images/footer-bg.png" data-bg-color="#152029">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-5 mb-20" alt="" src="images/logo-delta-footer.png">
            <p>The Greenhouse, Ngong Road, Nairobi, Kenya.</p>
            <ul class="list-inline mt-5">
             
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">info@seven-delta.com</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">www.seven-delta.com</a> </li>
            </ul>
          </div>
        </div>

            <script type="text/javascript">
              $('#mailchimp-subscription-form-footer').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: ''
              });

              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
            </script>
            <!-- Mailchimp Subscription Form Ends Here -->
          </div>
        </div>
      </div-->
    </div>
    <div class="footer-bottom bg-theme-colored-transparent-5">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2019 KonectCDM Agency Limited. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>

<?php COUCH::invoke(); ?>