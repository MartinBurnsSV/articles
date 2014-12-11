<ul class="su-posts su-posts-teaser-loop">
	<?php
		// Posts are found
		if ( $posts->have_posts() ) {
			while ( $posts->have_posts() ) :
				$posts->the_post();
				global $post;
				?>
				<li id="su-post-<?php the_ID(); ?>" class="su-post">
					<?php if ( has_post_thumbnail() ) : ?>
						<a class="su-post-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<?php endif; ?>
					<span class="su-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
				</li>
				<?php
			endwhile;
		}
		// Posts not found
		else {
			echo '<h4>' . __( 'Posts not found', 'su' ) . '</h4>';
		}
	?>
</ul>