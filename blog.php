<?php

/*
Template Name: Blog
Template Post Type: page
*/

get_header('blog');
?>
<!-- Content
================================================== -->
<div id='home' class="content-outer">
    <div id="page-content" class="row">
        <div id="primary" class="eight columns">
            <?php
                query_posts( array(
                       'cat' => 'all',
                       'post_type' => 'post',
                       'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                       ) );
                while ( have_posts() ) {
                    the_post();
            ?>
                <article class="post">
                    <div class="entry-header cf">
                        <h2 class="post-h"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="post-meta">
                            <time class="date" datetime="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('F jS, Y') ?></time>
                            <span class="categories">
                                <a href="#"><?php the_category(', '); ?></a>
                            </span>
                        </p>
                        <div class="post-thumb">
                            <a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail( 'post_thumb' ); ?></a>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <?php //the_content(); ?>
                    </div>
                </article>
                <!-- post end -->
            <?php
                }//end while
            
                // пагинация
                the_posts_pagination('paged');
                
                // вернем global $wp_query
                wp_reset_query();
            ?>
            
        </div> <!-- Primary End-->
        
         <div id="secondary" class="four columns end">
            <?php get_sidebar()?>
         </div><!-- Secondary End-->
    </div>
</div><!-- Content End-->

   <!-- Tweets Section
   ================================================== -->
<!--
   <section id="tweets">

      <div class="row">

         <div class="tweeter-icon align-center">
            <i class="fa fa-twitter"></i>
         </div>

         <ul id="twitter" class="align-center">
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">2 Days Ago</a></b>
            </li>
            
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">3 Days Ago</a></b>
            </li>
            
         </ul>

         <p class="align-center"><a href="#" class="button">Follow us</a></p>

      </div>

   </section> 
-->
<!-- Tweets Section End-->

<?php get_footer();?>
