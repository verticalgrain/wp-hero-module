<div class="hero" data-background-image="../../images/common/hero/hero.jpg">
	<div class="gallery gallery-hero owl-carousel owl-theme">
		<?php
			if( have_rows('hero_gallery') ):
		    while ( have_rows('hero_gallery') ) : the_row(); ?>
				  <?php
						$herogalleryitemimage = get_sub_field('hero_image');
						$herogallerytextalignment = get_sub_field('hero_text_alignment');
						$overlaycolor = get_sub_field('overlay_color');
					?>
					<div class="item <?php echo $herogallerytextalignment; ?>" style="background-image: url(<?php echo $herogalleryitemimage['sizes']['hero']; ?>)">
				    <div class="hero-overlay" style="background-color: <?php echo $overlaycolor; ?>"></div>
				    <div class="hero-text">
				    	<div class="hero-text-inner">
							  <div class="container">
						      <h1 style="color: <?php the_sub_field('hero_text_color'); ?>"><?php the_sub_field('hero_title'); ?></h1>
						      <h2 style="color: <?php the_sub_field('hero_text_color'); ?>"><?php the_sub_field('hero_text'); ?></h2>
					    	</div><!-- .container -->
					    </div><!-- .hero-text-inner -->
					  </div><!-- .hero-text -->
					</div><!-- .item -->
		    <?php endwhile;
			else :
			endif;
		?>
	</div><!-- .gallery -->
	<a href="#" class="next-slide next-slide-hero icon icon-caret-large-right"></a>
</div><!-- .hero -->
