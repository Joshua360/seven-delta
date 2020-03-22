<?php require_once( 'admin/cms.php' ); ?>

<cms:template title='Team' clonable='1'> 
  <cms:editable name='bio' type='richtext'/>
  <cms:editable name='role' type='text'/>
  <cms:editable name="profile_picture" type='image'/>
  <cms:editable name='core_skills' type='text'/>
  <cms:editable name='address' type='text'/>
  <cms:editable name='phone' type='text'/>
  <cms:editable name='email' type='text'/>

</cms:template>

<cms:if k_is_page>



<?php include 'inc/header.php';?>

<!-- Start main-content -->
<div class="main-content">

<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bh5.jpg">
 <div class="container pt-70 pb-20">
   <!-- Section Content -->
   <div class="section-content">
     <div class="row">
       <div class="col-md-12">
         <h2 class=" text-white">Career Summary</h2>
         <ol class="breadcrumb text-left text-black mt-10">
           <!-- <li><a class="text-white" href="homepage.php">Home</a></li>
           <li><a class="text-white" href="homepage.php#ourpeople">Our Team</a></li>
           <li class="active text-white">Team Profile</li> -->
         </ol>
       </div>
     </div>
   </div>
 </div>
</section>

<!-- Section: Experts Details -->
<section>
 <div class="container">
   <div class="section-content">
     <div class="row">
       <div class="col-md-4">
         <div class="thumb">
           <img src="<cms:show profile_picture />" alt="">
         </div>
       </div>
       <div class="col-md-8">
         <h4 class="name font-24 mt-0 mb-0"><cms:show k_page_title /></h4>
         <h5 class="mt-5 text-theme-colored2"><cms:show role /></h5>

         <p><cms:show bio/></p>
         <ul class="styled-icons icon-dark icon-theme-colored icon-sm mt-15 mb-0">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-skype"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>
       </div>
     </div>
     <div class="row mt-30">
       <div class="col-md-4">
         <h4 class="line-bottom">About Me:</h4>
         <div class="volunteer-address">
           <ul>
             <li>
               <div class="bg-light media border-bottom p-15 mb-20">
                 <div class="media-left">
                   <i class="pe-7s-pen text-theme-colored font-24 mt-5"></i>
                 </div>
                 <div class="media-body">
                   <h5 class="mt-0 mb-0">Core Skills:</h5>
                   <p><cms:show core_skills/></p>
                 </div>
               </div>
             </li>
             <li>
               <div class="bg-light media border-bottom p-15 mb-20">
                 <div class="media-left">
                   <i class="fa fa-map-marker text-theme-colored font-24 mt-5"></i>
                 </div>
                 <div class="media-body">
                   <h5 class="mt-0 mb-0">Address:</h5>
                   <p><cms:show address/></p>
                 </div>
               </div>
             </li>
             <li>
               <div class="bg-light media border-bottom p-15">
                 <div class="media-left">
                   <i class="fa fa-phone text-theme-colored font-24 mt-5"></i>
                 </div>
                 <div class="media-body">
                   <h5 class="mt-0 mb-0">Contact:</h5>
                   <p><span>Phone:</span> <cms:show phone/><br><span>Email:</span> <cms:show email/></p>
                 </div>
               </div>
             </li>
           </ul>
         </div>
       </div>
       

       <div class="col-md-4">
         <div class="clearfix">
           <h4 class="line-bottom">Quick Contact:</h4>
         </div>
         <form id="contact-form" class="contact-form-transparent">
           <div class="row">
             <div class="col-sm-12">
               <div class="form-group">
                 <input type="text" placeholder="Enter Name" id="contact_name" name="contact_name" required="" class="form-control">
               </div>
             </div>
             <div class="col-sm-6">
               <div class="form-group">
                 <input type="text" placeholder="Enter Email" id="contact_email" name="contact_email" class="form-control" required="">
               </div>
             </div>
             <div class="col-sm-6">
               <div class="form-group">
                 <input type="text" placeholder="Enter Subject" id="contact_subject" name="contact_subject" class="form-control" required="">
               </div>
             </div>
           </div>
           <div class="form-group">
             <textarea rows="5" placeholder="Enter Message" id="contact_message" name="contact_message" required class="form-control"></textarea>
           </div>
           <div class="form-group">
             <button data-loading-text="Please wait..." class="btn btn-flat btn-dark btn-theme-colored mt-5" type="submit">Send your message</button>
           </div>
         </form>
       </div>
     </div>
   </div>
 </div>
</section>

</div>
<!-- end main-content -->



<?php include 'inc/footer.php'?>


<cms:else/>
      <cms:embed 'team.php' />

  </cms:if>

<?php COUCH::invoke(); ?>
