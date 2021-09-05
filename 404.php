<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header('blog');
?>

<div class="black_filter_404">
	<div id="primary" class="content-area">
		<main id="main" class="site-main pfblock">

			<div class="error-404 not-found container">
                <div class="row">
                    <header class="page-header col-sm-10 col-sm-offset-2">
                        <h1 class="page-title">404<br>Page not found!</h1>
                    </header><!-- .page-header -->
                </div>
                
                <div class="row">
                    <div class="page-content col-sm-6 col-sm-offset-2">
                        <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', '' ); ?></p>
                        <?php get_search_form(); ?>
                    </div><!-- .page-content -->
                </div>
			</div><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php
get_footer();
