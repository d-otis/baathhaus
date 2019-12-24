<?php get_header(); ?>

		<section class="main mt-5">
			<div class="container">
				<div class="row">
					<div class="page col-sm-12 col-md-8 offset-md-2">
						<?php if(have_posts()) : ?>
							<?php while(have_posts()) : the_post(); ?>
								<?php if(!is_page('blog')) : ?>
									<h3 class="text-right mb-4">[<?php esc_html(the_title()); ?>]</h3>
								<?php endif; ?>
									<?php esc_html(the_content()); ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div><!-- end of .page .col-sm-8 etc -->
				</div><!-- end of .row -->
			</div><!-- end of .container -->
		</section>

<?php get_footer(); ?>