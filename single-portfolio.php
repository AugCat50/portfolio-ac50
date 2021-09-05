<?php
    get_header('blog');
?>
<!-- Content
================================================== -->

   <div class="content-outer">
      <div id="page-content" class="row portfolio">
          
         <section class="entry cf">
            <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
            ?> 
             
            <div id="secondary"  class="four columns entry-details">
                  <h1><?php the_title(); ?></h1>
                  <div class="entry-description">
                    <?php the_excerpt(); ?>
                  </div>
                  <ul class="portfolio-meta-list">
						   <li><span>Date: </span><time class="date"><?php the_field( 'p_date' ); ?></time></li>
<!--						   <li><span>Client </span>Styleshout</li>-->
						   <li><span>Skills: </span><?php the_terms( get_the_ID(), 'skills', '', ', ', '' ); ?></li>
				      </ul>
                  <a class="button" href="<?php the_field( 'p_link' ); ?>">View project</a>
            </div> <!-- secondary End-->
             
            <div id="primary" class="eight columns">
               <div class="entry-media">
                   <?php the_post_thumbnail( 'full' ); ?>
               </div>
               <div class="entry-excerpt">
				    <?php the_content(); ?>
				</div>
            </div> <!-- primary end-->
             
            <?php
                    }//end while
                    the_posts_pagination();
                } else {
                    echo '<h2 class="post-h"><a href="#">Записей нет.</a></h2>';
                }//end if
            ?>
            <!-- post end -->
         </section> <!-- end section -->
          
<!--
         <ul class="post-nav cf">
			   <li class="prev"><a href="#" rel="prev"><strong>Previous Entry</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>
				<li class="next"><a href="#" rel="next"><strong>Next Entry</strong> Morbi Elit Consequat Ipsum</a></li>
          </ul>
-->
      </div>

   </div> <!-- content End-->


<?php get_footer();?>
