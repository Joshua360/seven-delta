<?php require_once( 'admin/cms.php' ); ?>

<cms:template title='Areas of Expertise' clonable='1'> 
    <cms:editable name='description' type='richtext'/>
    <cms:editable name="header_picture" type='image'/>
    <cms:editable name="examples" type='richtext'/>
    <cms:editable name="icon_image" label="Icon" type='image'/>
    <cms:editable name="white_icon" label="White Icon" type='image'/>

</cms:template>
<cms:if k_is_page>


<?php include 'inc/header.php';?>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg4.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class=" text-white"> <cms:show k_page_title /> </h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a class="text-white" href="<cms:link 'homepage.php' />">Home</a></li>
                <li><a class="text-white" href="<cms:link 'expertise.php' />">Our Expertise</a></li>
                <li><a class="text-white" href="<cms:show k_page_link />"><cms:show k_page_title /></a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Services -->
    <section>
      <div class="container">
        <div class="row mtli-row-clearfix">
          <div class="col-sm-6 col-md-8 col-lg-8">
            <div class="campaign bg-silver-light maxwidth500 mb-30">
              <div class="thumb">
                <img src="<cms:show header_picture/>" alt="" class="img-fullwidth">
                <div class="campaign-overlay"></div>
              </div>
              <div class="campaign-details clearfix p-15 pt-10 pb-10">
              <h3 class="font-weight-700 mt-0"><a href="<cms:show k_page_link />"><cms:show k_page_title /></h3>
              <p><cms:show description/></p>
                <div class="campaign-bottom border-top clearfix mt-20">
                  <ul class="list-inline font-weight-600 pull-left flip pr-0 mt-10">
                  </ul>
                  <!-- <a class="btn btn-xs btn-theme-colored font-weight-600 font-11 pull-right flip mt-10" href="#">Apply Now</a> -->
                </div>
              </div>
            </div>
            <div class="event-details">

                <div class="mt-20">
                  <div class="left media p-0 mb-10">
                    <div class="media-body">
                        <h5 class="mt-0">Examples of Work Done</h5>
                        <cms:show examples />

                      <p></p>
                    </div>
                  </div>
                </div>
                <div>

                  <div class="left media p-0 mb-10"> <a href="#" class="pull-left flip"></a>
                    <div class="media-body">
                      <!-- <h5 class="mt-0">Duration of the Assignment</h5> -->
                      <p> </p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="sidebar sidebar-right mt-sm-30">
              <div class="widget">
                <div class="search-form">

                </div>
              </div>

              <div class="widget">
                <h5 class="widget-title line-bottom">Areas of Expertise</h5>
                <ul class="list-divider list-border list check">
                <cms:pages masterpage='expertise.php' >

                  <li><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></li>

                  <!-- <li><a class="text-theme-colored" href="<cms:show k_page_link />"><cms:show k_page_title /></li> -->
                  </cms:pages>
                </ul>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">Twitter Feed</h5>
                <div class="twitter-feed list-border clearfix" data-username="@OwuorJoshua" data-count="3"></div>
              </div>
              
          
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Related Project -->


    <!-- Divider: Clients -->
<?php include 'inc/clients.php'?>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <?php include 'inc/footer.php';?>

  <cms:else/>
      <cms:embed 'expertise_list.php' />

  </cms:if>
  <?php COUCH::invoke(); ?>
