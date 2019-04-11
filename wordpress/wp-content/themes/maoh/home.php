<?php get_header() ?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h1>blog</h1>
		</div>
		
	</div>
	<div class="row">
		<?php
		if (have_posts()):
			while (have_posts() ) : 
				  the_post();
	?>

			<div class="col-md-6">
				<div class="post">
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?></p>
					<?php the_post_thumbnail([500, 300]); ?>
					<div><?php the_tags() ?></div>


				</div>
			</div>
			

	
		
		<?php endwhile; 
		      endif; ?>
	</div>
</div>
<?php get_footer() ?>