<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Velvet_Suite
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="container">
				<div class="row">
				    <div class="col-sm-12">
					<img src="http://vs.wntechs.com/wp-content/uploads/2019/03/error_page.png" class="img-responsive text-center error_404">

					<p class="text-center"><button class="btn btn-danger" onClick="goBack();" >Go Back</button>
				    </div></p>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<style>

.btn-danger {
    color: #fff;
    background-color: #ff174f;
    border-color: #d43f3a;
}

</style>

<script>
function goBack() {
  window.history.back();
}
</script>

<?php
get_footer();
