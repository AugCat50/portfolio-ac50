	<!-- Footer start -->
	<footer id="footer">
		<div class="container">
			<div class="row">
                
				<div class="col-sm-12">
                    
                    <?php 
                        //Footer Menu
                        wp_nav_menu(array(
                            'theme_location'  => 'footer',
                            'container'       => null,
                            'menu_class'      => 'social-links',
                            'walker'          => new My_Walker_Nav_Menu
                        ));
                    ?>
<!--
					<ul class="social-links">
						<li><a href="index.html#" class="wow fadeInUp"><i class="fa fa-facebook"></i></a></li>
						<li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".1s"><i class="fa fa-twitter"></i></a></li>
						<li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".2s"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-envelope"></i></a></li>
					</ul>
-->
                    
<!--
					<p class="heart">
                        Made with <span class="fa fa-heart fa-2x animated pulse"></span> in Nottingham
                    </p>
-->
                    <p class="copyright">
                        © 2020 AugCat50 <a href="mailto:draackul2@gmail.com">draackul2@gmail.com</a>
<!--                        © 2015 John Doe | Images: <a href="https://unsplash.com/">Unsplash</a> & <a href="http://zoomwalls.com/">Zoomwalls</a>-->
					</p>
                    
				</div>
                
			</div><!-- .row -->
		</div><!-- .container -->
	</footer>

	<!-- Footer end -->

	<!-- Scroll to top -->

	<div class="scroll-up">
		<a href="#home"><i class="fa fa-angle-up"></i></a>
	</div>
    
    <!-- Scroll to top end-->
    
	<!-- Javascript files -->
    <?php wp_footer();?>
</body>
</html>
