<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>

		<input type="text" class="text-search" onfocus="if (this.value == 'Search') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search'; }" placeholder='Search' value="<?php echo get_search_query(); ?>" name="s" id="s" />
		<input type="submit" id="searchsubmit" class="submit-search" value="<?php echo esc_attr_x( '', 'submit button' ); ?>" />
	</div>
</form>
