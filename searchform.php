<div class="search-box">
	<form method="get" id="searchform" action="<?php echo home_url() ; ?>/">
		<input type="text" value="<?php echo esc_html($s, 1); ?>" name="s" id="s" maxlength="33" placeholder="rechercher" />
		<input type="image" src="<?php bloginfo('template_directory'); ?>/images/button_search.png" class="button" value=""/>
	</form>
</div>