<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Velvet_Suite
*/
?>
<!-- #content -->
<footer>
  <div class="container-fluid footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 blogs">
          <h1 class="heading">LATEST BLOG POSTS</h1>
          <?php echo velvet_recent_posts(); ?>
        </div>
        <div class="col-sm-3 brands">
          <?php dynamic_sidebar( 'brands'); ?>
        </div>
        <div class="col-sm-3 col-sm-offset-1 address">
          <?php  dynamic_sidebar( 'contact_us' ); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid sub-footer">
    <div class="container">
      <!-- --><?php /* dynamic_sidebar( 'bottom_footer' ); */?>
      <?php
      wp_nav_menu( array(
      'menu' => 'footer_menun',
      'menu_class'        => '',
      'container_class' =>'',
      'container_id' =>'',
      'menu_id'         => '',
      ) );
      ?>
    </div>
  </div>
  </footer><!-- #page -->
  <?php wp_footer(); ?>
  <!-- Modal -->
  <div id="user_subscripbe" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6 p_left_0">
              <img src="http://vs.wntechs.com/wp-content/uploads/2019/03/idea_3.jpg" class="img-responsive">
            </div>
            
            <div class="col-sm-6">
              <h1 class="modal_heading">
              Think your brand ready?
              </h1>
              <h4 class="sub-text">
              Access or free brand health check to ensure your
              Get access to insider tips, strategies and know-how to build your brand leadership from the inside out.
              </h4>
              
              <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#for_companies" class="for_companies_vt">For Companies </a></li>
                <li><a data-toggle="pill" href="#for_individuals " class="for_individuals_vt">For Individuals </a></li>
                
              </ul>
              
              <?php echo
              do_shortcode( '[contact-form-7 id="646" title="Forcompany"]')
              ?>
            </div>
          </div>
        </div>
        
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<script>
wow = new WOW(
{
boxClass:     'wow',      // default
animateClass: 'animated', // default
offset:       0,          // default
mobile:       true,       // default
live:         true        // default
}
)
wow.init();
  
  jQuery(document).ready(function($) {
$('.counter').counterUp({
delay: 10,
time: 1500
});
});
  
</script>
</body>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
</html>
<style>
.footer .block img
{
  width:50%;
}
.footer .block .text {
width: 50%;
padding-left: 5%;
margin-top: 5px;
}
<style>