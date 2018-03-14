<?php /**
 * Template Name: About
 */
 get_header();
 ?>
<section class="c-hero c-hero--gray"  style="background-image: url(<?php the_field('hero_image'); ?>);">

</section>
<section class="u-bg--gray--light">
  <div class="l-content-container l-pull-up-content-container">
    <div class="l-pull-up-content">
      <div class="l-main-content">
        <div class="l-main-content__intro u-lrg-font-size">
          <div class="c-tag"><?php the_field('page_tag'); ?></div>

          <h2><?php the_field('heading'); ?></h2>

          <?php the_field('intro_text'); ?>
        </div>

        <div class="c-tag">Our Instructors</div>

        <div class="l-instructors-list">
          <?php
          if( have_rows('instructors') ):
              while ( have_rows('instructors') ) : the_row();

            $instructor = get_sub_field('instructor');
            $post = $instructor;
            setup_postdata($post);
          ?>
          <div class="c-instructor-mini-card">
            <div class="c-instructor-mini-card__headshot">
              <a href="<?php the_permalink(); ?>"><img src="<?php the_field('image'); ?>"></a>
            </div>
            <div class="c-instructor-mini-card__deatils">
              <h4 class="c-instructor-mini-card__name u-text--orange"><a class="u-text--orange" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <div class="c-instructor-mini-card__title"><?php the_field('title'); ?></div>
            </div>
          </div>
          <?php
                wp_reset_postdata();
              endwhile;
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>