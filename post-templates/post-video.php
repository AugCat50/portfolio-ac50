<article class="post">
    <div class="entry-header cf">
        <h2 class="post-h"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
        <p class="post-meta">
            <time class="date" datetime="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('F jS, Y') ?></time>
        </p>
        
        <div class="post-thumb">
            <a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail( 'post_thumb' ); ?></a>
            <p><?php the_content(); ?></p>
        </div>
    </div>
</article>