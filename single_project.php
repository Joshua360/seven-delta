<?php require_once( 'admin/cms.php' ); ?>

<cms:template title='Project' clonable='1'> 
  <cms:editable name='project_content' type='richtext'/>
  
  <cms:editable name="project_image" type='image'/>
  <cms:editable name='project_country' type='text'/>
  <cms:editable name='location' type='text'/>
  <cms:editable name='beneficiary' type='text'/>  

  <cms:folder name="payments" title="Payments" />
  <cms:folder name="research" title="Research" />
  <cms:folder name="human-centered-design " title="Strategy and Human Centered Design" />
  <cms:folder name="project-program-management" title="Project Program Management" />
  <cms:folder name="agile-building-and-network-management" title="Agile Building and Network Management" />


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
              <h2 class="text-center text-white">Our Projects</h2>
              <!-- <ol class="breadcrumb text-left text-black mt-10">
                <li><a class="text-white" href="homepage.php">Home</a></li>
                <li><a class="text-white" href="#">Our Projects</a></li>
                <li class="active text-white">Projects</li>
              </ol> -->
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

                <img src="<cms:show project_image/>" alt="" class="img-fullwidth">
                <div class="campaign-overlay"></div>
              </div>
              <div class="campaign-details clearfix p-15 pt-10 pb-10">
                <h3 class="font-weight-700 mt-0"><a href="#"><cms:show k_page_title /></a></h3>
                
                <p><cms:show project_content/></p>
                <div class="campaign-bottom border-top clearfix mt-20">
                  <ul class="list-inline font-weight-600 pull-left flip pr-0 mt-10">
                  </ul>

                </div>
              </div>
            </div>
            <div class="event-details">
                <div class="mt-20 mb-20">
                  <div class="left media p-0 mb-10"> <a href="#" class="pull-left flip"><i class="fa fa-2x fa-flag text-theme-colored2" aria-hidden="true"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Country</h5>
                      <p><cms:show project_country/> </p>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="left media p-0 mb-10"> <a href="#" class="pull-left flip"><i class="fa fa-2x fa-map-marker text-theme-colored2"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Location within Country</h5>
                      <p><cms:show location/></p>
                    </div>
                  </div>
                </div>

                <div class="mt-20">
                  <div class="left media p-0 mb-10"> <a href="#" class="pull-left flip"><i class="fa fa-2x fa-institution text-theme-colored"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Name of Final TA Beneficiary</h5>
                      <p><cms:show beneficiary/></p>
                    </div>
                  </div>
                </div>
                <div>
                  <!-- <div class="left media p-0 mb-10"> <a href="#" class="pull-left flip"><i class="fa fa-2x fa-clock-o text-theme-colored2"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Duration of the Assignment</h5>
                      <p>3 Months </p>
                    </div>
                  </div> -->
                </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="sidebar sidebar-right mt-sm-30">
              <div class="widget">
                <!-- <h5 class="widget-title line-bottom">Search box</h5>
                <div class="search-form">
                  <form>
                    <div class="input-group">
                      <input type="text" placeholder="Click to Search" class="form-control search-input">
                      <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div> -->
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">All Projects</h5>
                <ul class="list-divider list-border list check">
                  <li><a class="text-theme-colored" href="#">Agency Banking & Payments Shared Infrastructure Project </a></li>
                  <li><a href="#">Agency & Mobile  Banking Strategy & Interventional Support </a></li>
                  <li><a href="#">Shared Agency Banking System (SABS) </a></li>
                  <li><a href="#">Scale to Save (A MasterCard Foundation Program) </a></li>
                  <li><a href="#">Technology Assessments</a></li>
                  <li><a href="#">World Savings & Retail Banking Institute (WSBI) in respect of the following Banks</a></li>
                </ul>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">Twitter Feed</h5>
                <div class="twitter-feed list-border clearfix" data-username="Envato" data-count="3"></div>
              </div>
              
          
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Related Project -->
 <section class="bg-lighter">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h3 class="text-uppercase title line-bottom mt-0 mb-30"><i class="fa fa-thumb-tack text-theme-colored2 mr-10"></i>Related <span class="text-theme-colored2">Projects</span></h3>
              <div class="owl-carousel-3col">
                <div class="item">
                  <div class="gallery-item select1">

                    <div class="box-hover-effect">
                      <div class="effect-wrapper">
                        <div class="thumb">
                          <img class="img-fullwidth" src="images/content/customer.jpg" alt="project">
                        </div>
                        <div class="overlay-shade"></div>
                        <div class="text-holder text-holder-middle">
                          <div class="title text-center">
                            <h4 class="text-uppercase text-white mb-0"><a class="text-white" href="page-project.php"><cms:show k_page_title /></a></h4>
                            <!-- <p class="text-gray-darkgray mt-5">We help business improve</p> -->
                          </div>
                        </div>
                        <div class="icons-holder icons-holder-bottom-right">
                          <div class="icons-holder-inner">
                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                              <a href="images/gallery/1.jpg" data-lightbox-gallery="gallery1" title="Your Title Here"><i class="fa fa-camera"></i></a>
                            </div>
                          </div>
                        </div>
                        <a class="hover-link" data-lightbox-gallery="gallery1-link" href="images/content/customer.jpg">View more</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                <div class="gallery-item select1">

                  <div class="box-hover-effect">
                    <div class="effect-wrapper">
                      <div class="thumb">
                        <img class="img-fullwidth" src="images/content/customer.jpg" alt="project">
                      </div>
                      <div class="overlay-shade"></div>
                      <div class="text-holder text-holder-middle">
                        <div class="title text-center">
                          <h4 class="text-uppercase text-white mb-0"><a class="text-white" href="page-project2.php">Agency & Mobile  Banking Strategy & Interventional Support </a></h4>
                          <!-- <p class="text-gray-darkgray mt-5">We help business improve</p> -->
                        </div>
                      </div>
                      <div class="icons-holder icons-holder-bottom-right">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/2.jpg" data-lightbox-gallery="gallery1" title="Your Title Here"><i class="fa fa-camera"></i></a>
                          </div>
                        </div>
                      </div>
                      <!-- <a class="hover-link" data-lightbox-gallery="gallery1-link" href="images/content/customer.jpg">View more</a> -->
                    </div>
                  </div>
                </div>
                </div>
                <div class="item">
                <div class="gallery-item select2">

                  <div class="box-hover-effect">
                    <div class="effect-wrapper">
                      <div class="thumb">
                        <img class="img-fullwidth" src="images/content/customer.jpg" alt="project">
                      </div>
                      <div class="overlay-shade"></div>
                      <div class="text-holder text-holder-middle">
                        <div class="title text-center">
                          <h4 class="text-uppercase text-white mb-0"><a class="text-white" href="page-project3.php">Shared Agency Banking System (SABS)</a> </h4>
                          <!-- <p class="text-gray-darkgray mt-5">We help business improve</p> -->
                        </div>
                      </div>
                      <div class="icons-holder icons-holder-bottom-right">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/3.jpg" data-lightbox-gallery="gallery1" title="Your Title Here"><i class="fa fa-camera"></i></a>
                          </div>
                        </div>
                      </div>
                      <a class="hover-link" data-lightbox-gallery="gallery1-link" href="images/content/customer.jpg">View more</a>
                    </div>
                  </div>
                </div>
                </div>
                <div class="item">
                <div class="gallery-item select3">

                  <div class="box-hover-effect">
                    <div class="effect-wrapper">
                      <div class="thumb">
                        <img class="img-fullwidth" src="images/content/customer.jpg" alt="project">
                      </div>
                      <div class="overlay-shade"></div>
                      <div class="text-holder text-holder-middle">
                        <div class="title text-center">
                          <h4 class="text-uppercase text-white mb-0"><a class="text-white" href="page-project4.php">Scale to Save  (A MasterCard Foundation Program</a></h4>
                          <!-- <p class="text-gray-darkgray mt-5">We help business improve</p> -->
                        </div>
                      </div>
                      <div class="icons-holder icons-holder-bottom-right">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/4.jpg" data-lightbox-gallery="gallery1" title="Your Title Here"><i class="fa fa-camera"></i></a>
                          </div>
                        </div>
                      </div>
                      <a class="hover-link" data-lightbox-gallery="gallery1-link" href="images/content/customer.jpg">View more</a>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 

    <!-- Divider: Clients -->
<?php include 'inc/clients.php'?>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <?php include 'inc/footer.php';?>
  <cms:else/>
      <cms:embed 'project_list.php' />

  </cms:if>
  <?php COUCH::invoke(); ?>
