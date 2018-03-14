<?php get_header(); ?>
<section class="c-hero c-hero--orange" style="background-image: url(<?php the_field('hero_image'); ?>);">
  <div class="l-content-container">
    <div class="c-hero__content">
      <h2 class="c-hero__heading"><?php the_field('hero_heading'); ?></h2>

      <a href="<?php the_field('hero_button_link'); ?>" class="c-btn c-btn--white"><?php the_field('hero_button_text'); ?></a>
    </div>
  </div>
</section>
<section class="l-home-intro u-bg--gray--light" style="background-image: url(<?php the_field('residencies_backgroundd_graphic'); ?>);">
  <div class="l-content-container">
    <div>
      <?php
      if( have_rows('residencies_list') ):
          while ( have_rows('residencies_list') ) : the_row(); ?>
      <section class="c-card">
        <div class="c-card__image-container">
          <div class="c-card__image">
            <div class="c-tag c-card__tag">Interdisciplinary</div>
          </div>
          <div class="c-card__attribution c-card__attribution u-hide-below-med u-hide-below-med--flex">
            <img src="i/headshot.jpg" class="c-card__attribution__headshot">
            <div>
              <div class="c-card__attribution__name">Mariella Poli</div>
              <a href="#" class="c-card__attribution__link">Learn More</a>
            </div>
          </div>
        </div>

        <div class="c-card__content">
          <h2 class="c-card__title"><a href="#">Outskirts of Urban Blueprint</a></h2>
          <div class="c-card__meta">21 June - 8 July, 2018</div>
          <div class="c-card__text">
            <p>Designed to accommodate a collective of 15 participants whose creative art, design and architectural interest reside in the evolutions of community within a diverse cultural landscape.</p>
          </div>

          <div class="c-card__attribution c-card__attribution u-hide@med">
            <img src="i/headshot.jpg" class="c-card__attribution__headshot">
            <div>
              <div class="c-card__attribution__name">Mariella Poli</div>
              <a href="#" class="c-card__attribution__link">Learn More</a>
            </div>
          </div>
        </div>
      </section>
      <?php
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
<section class="l-home-vc" style="background-image: url(<?php the_field('vc_background_image'); ?>);">
  <div class="l-content-container">
    <div class="l-home-vc__tag">
      <?php the_field('vc_tag'); ?>
    </div>
    <div class="l-home-vc__main u-body-copy">
      <h3><?php the_field('vc_heading'); ?></h3>

      <?php the_field('vc_intro_text'); ?>

      <p><a href="<?php the_field('vc_button_link'); ?>" class="c-btn c-btn--orange"><?php the_field('vc_button_text'); ?></a></p>
    </div>

    <div class="l-home-vc__secondary u-body-copy">
      <?php the_field('vc_secondary_content'); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>