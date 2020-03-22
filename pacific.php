
<?php require_once( 'admin/cms.php' ); ?>

<cms:template title='Pacific Coming soon'> 
    <cms:editable name='pacific_coming_soon' label="Pacific Coming Soon" type='richtext'/>
</cms:template>  


<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Seen-Delta | Business Consulting" />
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
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="bg-lightest fullscreen">
      <div class="display-table text-center">
        <div class="display-table-cell">
          <div class="container pt-0 pb-0"><div class="row">
          <div class="text-center mb-60"><a href="<cms:link 'homepage.php' />" class=""><img alt="" src="images/logo-delta.png"></a></div>

              <div class="col-md-10 col-md-offset-1">
                <h1 class="font-weight-100 font-64">Projects Coming Soon</h1>

                <div id="basic-coupon-clock" class="text-center font-36 pt-10 pb-10"></div>

                <!-- Final Countdown Timer Script -->
                <script type="text/javascript">
                  $(document).ready(function() {
                    $('#basic-coupon-clock').countdown('2017/10/10', function(event) {
                      $(this).html(event.strftime('%D <span class="font-16">Days</span> %H <span class="font-16">Hours</span> %M <span class="font-16"> Minutes</span> %S <span class="font-16"> Seconds</span>'));
                    });
                  });
                </script>
              </div>
              
              <div class="col-md-8 col-md-offset-2">
                <form id="mailchimp-subscription-form" class="newsletter-form mt-0 mb-30 maxwidth500">
                  <label for="mce-EMAIL"></label>
                  <div class="input-group">
                    <input type="email" id="mce-EMAIL" data-height="45px" class="form-control input-lg" placeholder="Your Email" name="EMAIL" value="">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-colored btn-theme-colored btn-xs m-0" data-height="45px">Subscribe</button>
                    </span>
                  </div>
                </form>

                <!-- Mailchimp Subscription Form Validation-->
                <script type="text/javascript">
                  $('#mailchimp-subscription-form').ajaxChimp({
                      callback: mailChimpCallBack,
                      url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                  });

                  function mailChimpCallBack(resp) {
                      // Hide any previous response text
                      var $mailchimpform = $('#mailchimp-subscription-form'),
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

                <p class="font-14"> We will showcase our projects in the Pacific soon.<br>Subscribe to the newsletter to get notified</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  <footer id="footer" class="footer bg-black-333 text-center pt-20 pb-20">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="mb-0">Copyright &copy;2020 Seven-Delta. All Rights Reserved</p>
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

</body>
</html>

<?php COUCH::invoke(); ?>