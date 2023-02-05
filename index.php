<?php get_header(); ?>
	<div class="container">
		<?php query_posts('posts_per_page=1');
		while(have_posts()) : the_post(); ?>
		<article>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p><?php the_excerpt(); ?></p>
		</article>
		<?php endwhile; wp_reset_query(); ?>
	</div>
<?php get_footer(); ?>