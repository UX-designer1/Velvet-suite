<form action="/" method="get">
			<div class="form-group">
				<input type="text" class="form-control" id="email" placeholder="Search here..." name="s" id="search" value="<?php the_search_query(); ?>" /> <button type="submit" class="btn btn_search_home"><span class="fa fa-search"></span></button>
			</div>
        </form>
        <!-- <form action="/" method="get">
    <label for="search">Search in <?php echo home_url( '/' ); ?></label>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
</form> -->