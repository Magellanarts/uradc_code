<?php /**
 * Template Name: About
 */
 get_header();
 ?>
<section class="c-hero c-hero--empty c-hero--gray"  style="background-image: url(<?php the_field('hero_image'); ?>);">

</section>
<section class="u-bg--gray--light">
  <div class="l-content-container l-pull-up-content-container">
    <div class="l-pull-up-content l-pull-up-content--further">
      <div class="l-main-content">
        <div class="l-main-content__intro u-lrg-font-size">
          <div class="c-tag"><?php the_field('page_tag'); ?></div>

          <h1><?php the_field('heading'); ?></h1>

          <?php the_field('intro_text'); ?>
        </div>

        <div class="c-tag">Our Leaders</div>

        <div class="l-instructors-list">
          <?php
          if( have_rows('instructors') ):
              while ( have_rows('instructors') ) : the_row();

            $instructor = get_sub_field('instructor');
            $post = $instructor;
            setup_postdata($post);

            $headshot = get_field('image');
             $headshot = str_replace('.jpg', '-300x300.jpg', $headshot);

          ?>
          <div class="c-instructor-mini-card">
            <div class="c-instructor-mini-card__headshot">
              <a href="<?php the_permalink(); ?>"><img src="<?php echo $headshot; ?>"></a>
            </div>
            <div class="c-instructor-mini-card__deatils">
              <h4 class="c-instructor-mini-card__name u-text--gray"><a class="u-text--gray" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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