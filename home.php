<?php
get_header();
?>
		<article class="content px-3 py-5 p-md-5">
<p>home.php</p>
			<?php
				if( have_posts() ){

					while( have_posts() ){

						the_post();
						get_template_part(  'template-parts/content', 'archive' );
					}
				}
			?>
	<div style="display: flex; align items: center; justify-content: center">

			<?php
				the_posts_pagination(
					array(
						// 'mid_size'  => 1,
						'prev_text' => __( '<< Previous' ),
						'next_text' => __( 'Next >>' ),
						'show_all' => true,
						'before_page_number' => ' ',
    					'after_page_number'  => ''
					)
				);
			?>
	</div>

	    </article>

	<?php
		get_footer();
	?>
