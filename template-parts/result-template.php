<?php
/**
 * Template Name: Result Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Velvet_Suite
 */

get_header();
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="row">
                            <div class="button js-filter">
                                <button data-filter="*" class="is-active">show all</button>
                                <?php
                                     $taxonomy = 'portfolio_category';
                                     $terms = get_terms($taxonomy);
                                     if ( $terms && !is_wp_error( $terms ) ) :
                                         foreach ( $terms as $term ) {
                                ?>
                                <button data-filter=".filter<?php echo $term->term_id?>"><?php echo $term->name; ?></button>
                                         <?php }
                                                endif;
                                         ?>
                            </div>

                            <ul class="list">
                                <?php
                                        $args = array(
                                            'post_type' => 'portfolio',
                                            'post_status' => 'publish',
                                        );
                                          
                                        $loop = new WP_Query( $args );
                                        while ( $loop->have_posts() ) : $loop->the_post();
                                          $catsr =  wp_get_post_terms(get_the_ID(),'portfolio_category');
                                          //print_r($catsr);
                                          //echo $catsr[0]->term_taxonomy_id;
                                          $pst_id = get_the_ID();
                                        ?>

                                        <li class="list__item filter<?php echo $catsr[0]->term_taxonomy_id;?>">

                                            <?php the_post_thumbnail('portfolio_galler_thumb');?>
                                                
                                          <div class="team_overlay more_info" post_id="<?php echo $pst_id;?>" data-url="<?php echo admin_url('admin-ajax.php'); ?> ">
                                              <h4><?php the_title();?></h4>
                                              <p class="title_auth"><?php the_field('client_title',get_the_ID())?></p>
                                              <p class="portfolio_title"><b><?php echo $catsr[0]->name;?></b></p>
                                          </div>

                                            </li>

                                         <?php
                                         $arr=array();
                                         array_push($arr, $i);
                                           $i++;
                                        endwhile;
                                        wp_reset_query();
                                ?>


                            </ul>
                                 
                        </div>
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>

        </div>
    </div>
    <div class="clear"></div>
    <style>
 /*       //== LAYOUT
        $baseline: 12;
        $gutter:20;
        $border-radius:0;
        $inner-width:1200px;

        //== COLOURS
        $color-white: 					#ffffff;
        $color-black: 					#393838;
        $color-muted: 					#E3E3E3;
        $color-tomato:          #FF5252;

        $color-body: 					  $color-black;
        $color-main: 					  $color-black;
        $color-accent: 					$color-tomato;
        $color-link-hover: 		  $color-black;

        //== TYPOGRAPHY

        //-- FONT FAMILY
        $font-family-heading:		'Asap', sans-serif;
        $font-family-content:		'PT Sans', sans-serif;
        $font-family-icons:			'FontAwesome', sans-serif;

        $font-family-body: 			$font-family-content;
        $font-family-h1: 				$font-family-heading;
        $font-family-h2: 				$font-family-heading;
        $font-family-h3: 				$font-family-heading;
        $font-family-h4: 				$font-family-heading;
        $font-family-h5: 				$font-family-heading;

        //-- FONT SIZE
        $font-size-x-small: 			  12;
        $font-size-small: 				  14;
        $font-size-normal: 				  16;
        $font-size-large: 				  18;
        $font-size-x-large: 			  22;
        $font-size-xx-large: 			  26;
        $font-size-xxx-large: 			38;
        $font-size-ultra-large: 		40;
        $font-size-ultra-x-large: 	58;

        $font-size-body: 				$font-size-normal;
        $font-size-h1: 					$font-size-xxx-large;
        $font-size-h2: 					$font-size-xx-large;
        $font-size-h3: 					$font-size-x-large;
        $font-size-h4: 					$font-size-large;
        $font-size-h5: 					$font-size-normal;

        //-- FONT WEIGHT
        $font-weight-light: 			300;
        $font-weight-regular: 		400;
        $font-weight-medium: 			500;
        $font-weight-bold: 				700;
        $font-weight-heavy: 			900;

        //== TRANSITIONS

        $transition-default: 			.5s ease-in;
        $transition-fast: 				.25s ease-in;

        //== MEDIA QUERIES

        $breakpoint-mobile: 			    320px;
        $breakpoint-phablet: 		    	600px;
        $breakpoint-tablet: 			    768px;
        $breakpoint-laptop: 			    1024px;
        $breakpoint-desktop: 			    1280px;
        $breakpoint-desktop-large: 		1440px;
        $breakpoint-desktop-x-large: 	1600px;


        /* ********* SASS EXTENDS  ********* */

/*        %list-reset {
             list-style: none;
             margin: 0;
             padding: 0;
         }

        %inner {
             width: $inner-width;
             margin: 0 auto;
         }

        /* ********* SASS FUNCTIONS ********* */

/*        $context: $font-size-body;

        @function em($pixels, $context: $context) {
        @return ($pixels/$context) * 1em;
        }*/

        /* ********* SASS MIXINS ********* */

       /* @mixin gradient($image: none, $from: $color-white, $to: $color-muted) {
            background: $image $from;
            background: $image, linear-gradient(to bottom, $from 0%, $to 100%);
        }
        ul {
            margin-bottom: 1em;
            list-style: none;
            display: flex;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            justify-content: space-around;
        }*/*/
*/


        /* FILTERS */

        .js-filter{
                margin-bottom: 2rem;
            }
            

        .button {
            display: block;
            width: 100%;
            margin-bottom: 1em;
            font-family: $font-family-heading;
            
        }

       .js-filter button 	{
            margin: 0.5em;
            padding: 0.5em;
            border: 1px solid $color-black;
            color: $color-black;
            background: none;
            font-size: 0.7em;
            text-transform: uppercase;
            font-size: em($font-size-small);
            border-radius: 31px !important;
            border: 1px solid #0000002b !important;
            box-shadow: 1px -3px 9px 1px #0002 !important;
            -webkit-box-shadow: 1px -3px 9px 1px #0002 !important;
            margin-top: 2rem !important;
        }

        button.is-active {
            color: $color-white;]
            background-color: #e63939 !important;
        }

        .list__item:hover .team_overlay {
                            position: absolute;
                            z-index: 999;
                            display: block;
                            top: 0px;
                            background-color: #f63131eb;
                            width: 100%;
                            height: 100%;
                            padding: 1rem;
                            animation: slideInUp 1s;
                            -webkit-animation: slideInUp 1s;
                            cursor: pointer;
                        }


.list__item img {
    width: 254px!important;
    height: 260px;
    object-fit: contain;
    object-position: top;
}

 .list__item {
    height: 212px;
}

 .team_overlay h4{
    font-weight: 700;
    letter-spacing: 0px;
    line-height: 27px;
    margin-top: 4rem;
    text-transform: uppercase;
}


#team_info button.close {
    -webkit-appearance: none;
    padding: 0;
    cursor: pointer;
    background: 0 0;
    border: 0;
    margin-top: 0px !important;
    font-size: 24px;
    margin-bottom: 0px;
}

.team_profile_image{
    max-width: 97%;
    overflow: hidden;
}

.member_name{
    font-weight: 800;
    margin-top: 3px;
}

.is-active {
    background: #c41717 !important;
    color: #fff;
}



.team_overlay p {
    margin: 0px;
    margin-bottom: 3rem;
    margin-top: 1rem;
    max-width: 100%;
    letter-spacing: 1px;
    line-height: 2rem;
    text-transform: capitalize;
}

@media (min-width: 992px){


.modal-lg {
    width: 1223px;
}

}


    </style>


<!-- Modal -->
<div class="modal fade" id="team_info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">More info</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-4">
                <div class="team_profile_image">
                    <img src="http://vs.wntechs.com/wp-content/uploads/2014/01/case-study-suzanne-baragry.png" alt="" class="responsive">
                </div>
            </div>
            <div class="col-sm-8">
                <h3 class="member_name">SUZANNE BARAGRY – SALES DIRECTOR</h3>
               <p><strong>Challenge: </strong> Suzanne came to Velvet Suite looking for strategies to brand herself in a fresh way. It was important that leadership understood the contributions from her previous role and could share the same confidence she had in herself.</p>

               <p><strong>Action:  </strong> Velvet Suite enrolled Suzanne in our brand leadership executive coaching program a 360-degree approach to building the leadership lifestyle of a champion. She went through a series of training, coaching, feedback, interactive planning, wardrobe and executive presence recommendations as well as nutrition, exercise and stress management.</p>


               <p><strong>Results: </strong> Suzanne applied what she learned and began working with her immediate team to establish and package her authentic brand presence. Within six months of her engagement her sales grew 12.6% came from #4 to #2 and had the largest growth quarter over quarter in the entire company.</p>

            </div>
        </div>
    </div>
        </div>
      </div>
     
    </div>
  




<?php

get_footer();


