<?php get_header(); ?>
<section class="c-hero c-hero--orange" style="background-image: url(<?php the_field('hero_image'); ?>);">
  <div class="l-content-container">
    <div class="c-hero__content">
      <h1 class="c-hero__heading"><?php the_field('hero_heading'); ?></h1>

      <a href="<?php the_field('hero_button_link'); ?>" class="c-btn c-btn--white"><?php the_field('hero_button_text'); ?></a>
    </div>
  </div>
</section>
<section class="l-home-intro u-bg--gray--light" style="background-image: url(<?php the_field('residencies_background_graphic'); ?>);">
  <div class="l-content-container">
    <div>
      <?php
      if( have_rows('residencies_list') ):
          while ( have_rows('residencies_list') ) : the_row();
        $residency = get_sub_field('residency');
        $post = $residency;
        setup_postdata($post);

        $instructor = get_field('instructor');
        $post = $instructor;
        setup_postdata($post);
        $name = get_the_title();
        $link = get_permalink();
        $headshot = get_field('image');

        $headshot = str_replace('.jpg', '-150x150.jpg', $headshot);

        $post = $residency;
        setup_postdata($post);

      ?>
      <section class="c-card">
        <div class="c-card__image-container">
          <div class="c-card__image" style="background-image: url(<?php the_field('featured_image'); ?>);">
            <div class="c-tag c-card__tag"><?php the_field('tag'); ?></div>
          </div>
          <div class="c-card__attribution c-card__attribution u-hide-below-med u-hide-below-med--flex">
            <img src="<?php echo $headshot; ?>" class="c-card__attribution__headshot">
            <div>
              <div class="c-card__attribution__name"><?php echo $name; ?></div>
              <a href="<?php echo $link; ?>" class="c-card__attribution__link">Learn More</a>
            </div>
          </div>
        </div>

        <div class="c-card__content">
          <h2 class="c-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="c-card__meta"><?php the_field('date'); ?></div>
          <div class="c-card__text">
            <?php the_field('short_description'); ?>
          </div>

          <div class="c-card__attribution c-card__attribution u-hide@med">
            <img src="<?php echo $headshot; ?>" class="c-card__attribution__headshot">
            <div>
              <div class="c-card__attribution__name"><?php echo $name; ?></div>
              <a href="<?php echo $link; ?>" class="c-card__attribution__link">Learn More</a>
            </div>
          </div>
        </div>
      </section>
      <?php
            wp_reset_postdata();
          endwhile;
      endif;
      ?>


      <!--section class="c-card">
        <div class="c-card__image-container">
          <div class="c-card__image">
            <div class="c-tag c-card__tag">Illustration</div>
          </div>
          <div class="c-card__attribution c-card__attribution u-hide-below-med u-hide-below-med--flex">
            <img src="i/headshot.jpg" class="c-card__attribution__headshot">
            <div>
              <div class="c-card__attribution__name">Michael Wertz</div>
              <a href="#" class="c-card__attribution__link">Learn More</a>
            </div>
          </div>
        </div>

        <div class="c-card__content">
          <h2 class="c-card__title"><a href="#">Inside / Out</a></h2>
          <div class="c-card__meta">21 May - 2 June, 2018</div>
          <div class="c-card__text">
            <p>This residency explores Milan, one of the most vibrant cultural centers of Europe. We will be taking daily field trips and making drawings on location, emphasizing insightful observation combined with techniques that enhance the work and enliven the page.</p>
          </div>

          <div class="c-card__attribution c-card__attribution u-hide@med">
            <img src="i/headshot.jpg" class="c-card__attribution__headshot">
            <div>
              <div class="c-card__attribution__name">Michael Wertz</div>
              <a href="#" class="c-card__attribution__link">Learn More</a>
            </div>
          </div>
        </div>
      </section -->
    </div>
  </div>
</section>
<section class="l-home-vc" style="background-image: url(<?php the_field('vc_background_graphic'); ?>);">
  <div class="l-content-container">
    <div class="l-home-vc__tag">
      <?php the_field('vc_tag'); ?>
    </div>
    <div class="l-home-vc__main u-body-copy">
      <h3><?php the_field('vc_heading'); ?></h3>

      <?php the_field('vc_intro_text'); ?>

      <p><a target="_blank" href="<?php the_field('vc_button_link'); ?>" class="c-btn c-btn--orange"><?php the_field('vc_button_text'); ?></a></p>
    </div>

    <div class="l-home-vc__secondary u-body-copy">
      <?php the_field('vc_secondary_content'); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>