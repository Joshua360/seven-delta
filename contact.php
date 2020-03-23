<?php require_once( 'admin/cms.php' ); ?>

<!-- Section: Service -->
<?php include 'inc/header.php';?>


  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay" data-bg-img="images/bg/island.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class=" text-white">Contact Us</h2>
              <ol class="breadcrumb text-black mt-10">
                <li class="text-white"><a class="text-white" href="homepage.php">Home</a></li>
                <li><a class="text-white" href="#">Contact Us</a></li>
                <li class="active"><a class="text-white" href="contact.php">Connect with Us</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Have Any Question -->
    <section class="divider">
      <div class="container pt-60 pb-60">
        <div class="section-title mb-60">
          <div class="row">
            <div class="col-md-12">
              <div class="esc-heading small-border text-center">
                <h3>Have any Questions?</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                <h4>Call Us</h4>
                <h6 class="text-gray">Phone: +254 720 089535</h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                <h4>Address</h4>
                <h6 class="text-gray">The Greenhouse, Ngong Road Nairobi, KENYA</h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                <h4>Email</h4>
                <h6 class="text-gray">info@seven-delta.com</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Contact -->
    <section class="divider bg-lighter">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-7">
            <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>
            <style>
            .error,
	          .success{display:none;}
            </style>
            <!-- Contact Form -->
            <cms:form id="contact_form" name="contact_form" class="" action="" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Name <small>*</small></label>
                    <cms:input name="form_name" class="form-control required" type="text" placeholder="Enter Name" required="1" />
                    <cms:if k_error_form_name>
                    <p id='name_error' class='error' style="display:block;">Insert your name</p>
                    </cms:if>

                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email <small>*</small></label>
                    <cms:input name="form_email" class="form-control required email" type="text" placeholder="Enter Email"  required="1" validator="email" />
                    <cms:if k_error_form_email>
                      <p id='email_error' class='error' style="display:block;">Enter a valid email address</p>
                    </cms:if>

                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Subject <small>*</small></label>
                    <cms:input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject"  required="1" />
                    <cms:if k_error_form_subject>
                    <p id='name_error' class='error' style="display:block;">This field is required</p>
                    </cms:if>

                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone</label>
                    <cms:input name="form_phone" class="form-control required" type="text" placeholder="Enter Phone"  required="1" />
                    <cms:if k_error_form_phone>
                    <p id='name_error' class='error' style="display:block;">Insert your phone number</p>
                    </cms:if>

                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Message</label>
                <cms:input type="textarea" name="form_message" class="form-control required" rows="5" placeholder="Enter Message"  required="1"></cms:input>
                <cms:if k_error_form_message>
                <p id='message_error' class='error' style="display:block;">Enter a message</p>
                </cms:if>
              </div>
              <div class="form-group">

                <cms:input name="form_botcheck" class="form-control" type="hidden" value="" />
                <cms:if k_success>
                    <p id='mail_success' class='success' style="display:block;">Thank you. We'll get back to you as soon as possible.</p>
                    <cms:send_mail from=k_email_from to=k_email_to subject="Feedback from your website">
                        The following is an email sent by a visitoe to your site:
                        <cms:show k_success />
                    </cms:send_mail>
                </cms:if>



					      <p id='mail_fail' class='error'>Sorry, an error has occured. Please try again later.</p>

                <cms:input type="submit" class="btn btn-dark btn-theme-colored btn-flat" data-loading-text="Please wait..."  name="submit" value="Send your message"/>

              </div>
            </cms:form>
            <!-- Contact Form Validation-->
            <!-- <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script> -->

          </div>
          <div class="col-md-5">

            <!-- Google Map HTML Codes -->
            <!-- <div 
              data-address="The Greenhouse, Ngong Road Nairobi, KENYA"
              data-popupstring-id="#popupstring1"
              class="map-canvas autoload-map"
              data-mapstyle="style2"
              data-height="500"
              data-latlng="-37.817314,144.955431"
              data-title="sample title"
              data-zoom="12"
              data-marker="images/map-marker.png">
            </div>
            <div class="map-popupstring hidden" id="popupstring1">
              <div class="text-center">
                <h3>Seven-Delta Office Office</h3>
                <p>The Greenhouse, Ngong Road Nairobi, KENYA</p>
              </div>
            </div> -->
            <!-- Google Map Javascript Codes -->
            <!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
            <script src="js/google-map-init.js"></script> -->

          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->




<!-- Divider: Clients -->

<!-- Section: OUR CLIENTS-END -->
<!-- Footer -->
  <?php include 'inc/footer.php';?>


	<?php COUCH::invoke(); ?>
