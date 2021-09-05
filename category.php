<?php

/**
* A Simple Category Template
*/

    get_header();
?>
<!-- Content
================================================== -->
<div class="content-outer">
    <div id="page-content" class="row">
        
        <header class="archive-header">
            
            <?php if(is_category( 'Featured' )) : ?>
                <h1 class="archive-title">Featured Articles:</h1>
            <?php  else: ?>
                <h1 class="archive-title white">Category: <?php single_cat_title(); ?> </h1>
            <?php endif; ?>
            
        </header>
        <div id="primary" class="eight columns">
            
            <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
            ?>
            <article class="post">
                <div class="entry-header cf">
                    <h2 class="post-h"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="post-meta">
                        <time class="date" datetime="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('F jS, Y') ?></time>
<!--
                            /
                         <span class="categories">
                         <a href="#">Design</a> /
                         <a href="#">User Inferface</a> /
                         <a href="#">Web Design</a>
                         </span>
-->
                    </p>
                    <div class="post-thumb">
                        <a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail( 'post_thumb' ); ?></a>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <?php //the_content(); ?>
                </div>
            </article>
            <?php
                    }//end while
                    the_posts_pagination();
                } else {
                    echo '<h2 class="post-h"><a href="#">Записей нет.</a></h2>';
                }//end if
            ?>
<!-- post end -->
        </div> <!-- Primary End-->
        
         <div id="secondary" class="four columns end">
            <?php get_sidebar()?>
         </div> <!-- Secondary End-->
        
    </div>
    
</div> <!-- Content End-->

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
